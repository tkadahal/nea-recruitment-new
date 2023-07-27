<?php

declare(strict_types=1);

namespace App\Http\Controllers\User\Payments;

use Carbon\Carbon;
use Monolog\Logger;
use GuzzleHttp\Client;
use App\Models\Payment;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\PaymentVendor;
use App\Helpers\PaymentHelper;
use App\Services\PaymentService;
use Monolog\Handler\StreamHandler;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;

class ConnectIpsController extends Controller
{
    private $_logger;

    private $paymentService;

    private $_api_context_connect_ips = [];

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

        $paymentVendor = PaymentVendor::where('payment_gateway', 'connectips')->first();

        $log_path = storage_path() . '/logs/connect-ips/' . date('Y-m-d') . '.log';

        $this->_logger = new Logger('connectIPS LOG :' . date('Y-d-m H:i:s'));
        $this->_logger->pushHandler(new StreamHandler($log_path, Logger::INFO));

        $this->_api_context_connect_ips['payment_gateway'] = $paymentVendor->payment_gateway;
        $this->_api_context_connect_ips['MERCHANTID'] = $paymentVendor->merchant_id;
        $this->_api_context_connect_ips['APPID'] = $paymentVendor->app_id;
        $this->_api_context_connect_ips['APPNAME'] = $paymentVendor->app_name;
        $this->_api_context_connect_ips['checkout_url'] = $paymentVendor->checkout_url;
        $this->_api_context_connect_ips['verify_url'] = $paymentVendor->verify_url;
        $this->_api_context_connect_ips['verify_password'] = $paymentVendor->verify_password;
        $this->_api_context_connect_ips['cert_path'] = Storage::path('1/930c3c6b-6756-47f2-af98-0712b66682f0/CREDITOR.pfx');
        $this->_api_context_connect_ips['cert_password'] = $paymentVendor->cert_password;
    }

    public function initializeIPS($applicationRefID)
    {
        // dd($this->_api_context_connect_ips);
        try {
            $application = Application::where('user_id', auth()->id())
                ->where('uuid', $applicationRefID)
                ->first();

            if (!$application) {
                return redirect()->back()->withErrors(['error' => 'Invalid application. Please try again.']);
            }

            $paymentRecord = $this->paymentService->initiatePayment($application, $this->_api_context_connect_ips['payment_gateway']);

            if (!$paymentRecord) {
                return redirect()->back()->withErrors(['error' => 'Sorry, we cannot process your request at this moment. Please try again.']);
            }

            $ips_params = [
                'checkout_url' => $this->_api_context_connect_ips['checkout_url'],
                'MERCHANTID' => $this->_api_context_connect_ips['MERCHANTID'],
                'APPID' => $this->_api_context_connect_ips['APPID'],
                'APPNAME' => $this->_api_context_connect_ips['APPNAME'],
                'TXNID' => $paymentRecord['reference_id'],
                'TXNDATE' => Carbon::now()->format('d-m-Y'),
                'TXNCRNCY' => 'NPR',
                'TXNAMT' => $paymentRecord['amount'] * 100, // converting into paisa
                'REFERENCEID' => 'NEA-' . (auth()->user()->name ?? 'RECRUITMENT'),
                'REMARKS' => auth()->user()->mobile_number ?? 'NEA-RECRUITMENT',
                'PARTICULARS' => 'NEA-RECRUITMENT-' . $paymentRecord['amount'],
                'SUCCESS' => route('connectips.success', ['id' => $paymentRecord['id']]),
                'FAILURE' => route('connectips.failure', ['id' => $paymentRecord['id']]),
            ];

            $hash_response = $this->generateToken($ips_params, 'checkout');

            // dd($hash_response);
            if (!$hash_response) {
                Session::flash('error_message', 'Sorry, we cannot process your request at this moment. Please try again.');

                return redirect()->route('payment');
            }
            $ips_params['TOKEN'] = $hash_response;

            return view('user.applications.gateways.connectIps', ['ips_params' => $ips_params]);
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry, we cannot process your request at this moment. Please try again.');

            return redirect()->back();
        }
    }

    public function successIPS(Request $request)
    {
        try {

            /** DUMPING ALL THE RESPONSE */
            $connect_ips_response = $request->all();
            $this->_logger->info('CHECKOUT RESPONSE LOG : ' . json_encode($connect_ips_response));

            $TXNID = $request->get('TXNID') ?? null;

            $paymentDetails = Payment::with('application')->where('reference_id', $TXNID)->first();

            if (!$paymentDetails || $paymentDetails->application->user->id != auth()->id()) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

                return redirect()->back();
            }

            $tranx_params = [];
            $tranx_params['merchantId'] = $this->_api_context_connect_ips['MERCHANTID'];
            $tranx_params['appId'] = $this->_api_context_connect_ips['APPID'];
            $tranx_params['referenceId'] = $TXNID;
            $tranx_params['txnAmt'] = $paymentDetails->amount * 100;  // INTO PAISA

            $hash_response = $this->generateToken($tranx_params, 'transaction_verification');
            if (!$hash_response) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please try again.');

                return redirect()->back();
            }
            $tranx_params['token'] = $hash_response;

            $payment_status = $this->apiCallConnectIPS($tranx_params, 'transaction_verification');

            if (!isset($payment_status['status']) || $payment_status['status'] != 'SUCCESS') {

                $this->_logger->info('DOUBLE VERIFICATION CALL : TXN ID ' . $TXNID);

                // CALLING VERIFICATION ONE MORE TIME AFTER WAITING 3 Secs
                sleep(3);

                $payment_status = $this->apiCallConnectIPS($tranx_params, 'transaction_verification');

                if (!isset($payment_status['status']) || $payment_status['status'] != 'SUCCESS') {

                    // verification status not received or returned failure
                    PaymentHelper::updatePayment([
                        'reference_id' => $TXNID,
                        'application_id' => $paymentDetails->application->id ?? null,
                        'payment_status' => '3',
                        'paid_amount' => $paymentDetails->amount,
                        'transaction_id' => $TXNID,
                    ]);

                    Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');

                    return redirect()->back();
                }
            }

            PaymentHelper::updatePayment([
                'reference_id' => $TXNID,
                'application_id' => $paymentDetails->application->id ?? null,
                'payment_status' => '1',
                'paid_amount' => $paymentDetails->amount,
                'transaction_id' => $TXNID,
            ]);

            /** SEND SMS TO THE USER FOR PAYMENT VERIFICATION **/
            // $mobile = $paymentDetails->userDetails->mobile_no;
            // $applicant_name = $paymentDetails->userDetails->name;
            // $vacancy_name = $paymentDetails->vacancyDetails->bigyapan_number;

            // $message = 'Dear '.$applicant_name.' , Your application fee '.$paymentDetails->paid_amount.' the post '.$vacancy_name.' has been sucessfully received';

            // Auth::user()->sendSms($message, $mobile);

            Session::flash('message', 'Payment successfull. Please find below the application details.');

            return redirect('/application?show_applied=1');
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');

            return redirect('/application?show_applied=1');
        }
    }

    public function failureIPS(Request $request)
    {
        try {

            $TXNID = $request->get('TXNID') ?? null;

            $this->_logger->info('CANCEL/FAILURE RESPONSE, REFERENCE ID : ' . $TXNID);

            $paymentDetails = Payment::with('application')->where('reference_id', $TXNID)->first();

            if (!$paymentDetails || $paymentDetails->application->user->id != auth()->id()) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

                return redirect()->back();
            }

            PaymentHelper::updatePayment([
                'reference_id' => $TXNID,
                'application_id' => $paymentDetails->application->id ?? null,
                'payment_status' => '3',
            ]);

            Session::flash('error_message', 'Sorry we cannot process your payment at this moment. Please select other payment options.');

            return redirect()->back();
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

            return redirect()->back();
        }
    }

    private function generateToken($token_params = [], $hash_for = null)
    {
        try {
            if (count($token_params) === 0 || $hash_for === null) {
                return false;
            }

            switch ($hash_for) {
                case 'checkout':
                    $token_values = [
                        'MERCHANTID=' . $token_params['MERCHANTID'],
                        'APPID=' . $token_params['APPID'],
                        'APPNAME=' . $token_params['APPNAME'],
                        'TXNID=' . $token_params['TXNID'],
                        'TXNDATE=' . $token_params['TXNDATE'],
                        'TXNCRNCY=' . $token_params['TXNCRNCY'],
                        'TXNAMT=' . $token_params['TXNAMT'],
                        'REFERENCEID=' . $token_params['REFERENCEID'],
                        'REMARKS=' . $token_params['REMARKS'],
                        'PARTICULARS=' . $token_params['PARTICULARS'],
                        'TOKEN=TOKEN',
                    ];

                    $token_values = implode(',', $token_values);
                    break;

                case 'transaction_verification':
                    $token_values = [
                        'MERCHANTID=' . $token_params['merchantId'],
                        'APPID=' . $token_params['appId'],
                        'REFERENCEID=' . $token_params['referenceId'],
                        'TXNAMT=' . $token_params['txnAmt'],
                    ];

                    $token_values = implode(',', $token_values);
                    break;

                default:
                    return false;
            }

            // Try to locate certificate file
            if (!Storage::exists($this->_api_context_connect_ips['cert_path'])) {
                return false;
            }

            // Try to read certificate file
            $cert_store = Storage::get($this->_api_context_connect_ips['cert_path']);

            dd($cert_store);

            // Try to read certificate file
            if (openssl_pkcs12_read($cert_store, $cert_info, $this->_api_context_connect_ips['cert_password'])) {
                if ($private_key = openssl_pkey_get_private($cert_info['pkey'])) {
                    $array = openssl_pkey_get_details($private_key);
                }
            } else {
                return false;
            }

            if (openssl_sign($token_values, $signature, $private_key, 'sha256WithRSAEncryption')) {
                $hash = base64_encode($signature);
                unset($private_key);

                return $hash;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }

    private function apiCallConnectIPS($payload = null, $api_method = null)
    {
        if ($payload == null || empty($payload) || $api_method == null) {
            return false;
        }

        try {
            $connect_ips_header = [
                'Content-Type' => 'application/json;charset=utf-8',
                'Authorization' => 'Basic ' . base64_encode($this->_api_context_connect_ips['APPID'] . ':' . $this->_api_context_connect_ips['verify_password']),
                'postman-token' => 'df24adcd-c372-fcd1-65ef-7909a4d30538',
            ];

            $api_endpoint = null;
            if ($api_method == 'transaction_verification') {
                $api_endpoint = $this->_api_context_connect_ips['verify_url'];
            }

            $client = new Client();

            /** Logger : REQUEST */
            $this->_logger->info('REQUEST LOG : ' . $api_method . ' : ' . $payload['referenceId']);
            $this->_logger->info(json_encode($payload));

            $response = $client->post($api_endpoint, [
                'headers' => $connect_ips_header,
                'body' => json_encode($payload),
                'connect_timeout' => 30,
                'timeout' => 30,
                'allow_redirects' => true,
                'verify' => false,
                'http_errors' => false,
            ]);

            $api_response = $response->getBody()->getContents();

            /** Logger : RESPONSE */
            $this->_logger->info('RESPONSE LOG : ' . $api_method . ' : ' . $payload['referenceId']);
            $this->_logger->info($api_response);

            if ($response->getStatusCode() === 200) {
                $response_payload = json_decode($api_response, true);

                return isset($response_payload) ? $response_payload : false;
            }

            return false;
        } catch (GuzzleException $e) {
            return false;
        }
    }
}
