<?php

declare(strict_types=1);

namespace App\Http\Controllers\User\Payments;

use Monolog\Logger;
use GuzzleHttp\Client;
use App\Models\Payment;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\PaymentVendor;
use App\Helpers\PaymentHelper;
use App\Services\PaymentService;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;

class KhaltiController extends Controller
{
    private $_logger;

    private $paymentService;

    private $_api_context_khalti = [];

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

        $paymentVendor = PaymentVendor::where('payment_gateway', 'khalti')->first();

        $log_path = storage_path() . '/logs/khalti/' . date('Y-m-d') . '.log';
        $this->_logger = new Logger('KHALTI LOG :' . date('Y-d-m H:i:s'));
        $this->_logger->pushHandler(new StreamHandler($log_path, Logger::INFO));

        $this->_api_context_khalti['payment_gateway'] = $paymentVendor->payment_gateway;
        $this->_api_context_khalti['public_key'] = $paymentVendor->public_key;
        $this->_api_context_khalti['secret_key'] = $paymentVendor->secret_key;
        $this->_api_context_khalti['initate_url'] = $paymentVendor->token_url;
        $this->_api_context_khalti['verify_url'] = $paymentVendor->verify_url;
    }

    /** Payment Initialization */
    public function initializeKhalti($applicationRefID)
    {
        try {
            $application = Application::where('user_id', auth()->id())
                ->where('uuid', $applicationRefID)
                ->first() ?? null;

            if (!$application) {
                return redirect()->back()->withErrors(['error' => 'Invalid application. Please try again.']);
            }

            $paymentRecord = $this->paymentService->initiatePayment($application, $this->_api_context_khalti['payment_gateway']);

            if (!$paymentRecord) {
                return redirect()->back()->withErrors(['error' => 'Sorry we cannot process your request at this moment. Please try again.']);
            }

            $khaltiParams = [
                'method' => 'payment_initiation',
                'return_url' => route('khalti.payments-verification'),
                'website_url' => URL::to('/'),
                'amount' => $paymentRecord['amount'] * 100,
                'purchase_order_id' => $paymentRecord['reference_id'],
                'purchase_order_name' => 'NEA Recruitment',
            ];

            $khalti_params = $this->KhaltiTransactionVerifyAPICall($khaltiParams);

            $paymentUrl = $khalti_params['response']['payment_url'];

            return redirect($paymentUrl);
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

            return redirect()->route('payment.index');
        }
    }

    /** Payment Verification */
    public function verificationKhalti(Request $request)
    {
        try {
            /** Logger : CHECKOUT RESPONSE */
            $this->_logger->info('KHALTI CHECKOUT RESPONSE: ' . json_encode($request->all()));

            $pidx = $request->get('pidx') ?? false;
            $txnId = $request->get('txnId') ?? false;
            $purchase_order_id = $request->get('purchase_order_id') ?? false;

            if (!$pidx || !$txnId || !$purchase_order_id) {
                return response()->json(['status' => 'error', 'message' => 'Verification Failed.']);
            }

            $paymentDetails = Payment::with('application')->where('reference_id', $purchase_order_id)->first();
            if (!$paymentDetails) {
                return response()->json(['status' => 'error', 'message' => 'Verification Failed.']);
            }

            $khalti_post_params = [
                'method' => 'payment_lookup',
                'pidx' => $pidx,
            ];

            $payment_verification_status = $this->KhaltiTransactionVerifyAPICall($khalti_post_params);

            if (!$payment_verification_status || $payment_verification_status['response']['status'] != 'Completed') {
                PaymentHelper::updatePayment([
                    'reference_id' => $purchase_order_id,
                    'pidx' => $payment_verification_status['response']['pidx'],
                    'application_id' => $paymentDetails->application->id ?? null,
                    'payment_status' => '3',
                    'paid_amount' => $payment_verification_status['response']['total_amount'],
                    'transaction_id' => $payment_verification_status['response']['transaction_id'],
                ]);

                Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');
                return redirect()->route('payment.index');
            }

            // SUCCESSFUL PAYMENT
            PaymentHelper::updatePayment([
                'reference_id' => $purchase_order_id,
                'pidx' => $payment_verification_status['response']['pidx'],
                'application_id' => $paymentDetails->application->id ?? null,
                'payment_status' => '1',
                'paid_amount' => $paymentDetails->amount,
                'transaction_id' => $payment_verification_status['response']['transaction_id'],
            ]);

            /** SEND SMS TO THE USER FOR PAYMENT VERIFICATION **/
            // $mobile = $paymentDetails->userDetails->mobile_no;
            // $applicant_name = $paymentDetails->userDetails->name;
            // $vacancy_name = $paymentDetails->vacancyDetails->bigyapan_number;

            // $message = 'Dear '.$applicant_name.' , Your application fee '.$paymentDetails->paid_amount.' the post '.$vacancy_name.' has been sucessfully received';


            // Auth::user()->sendSms($message, $mobile);

            Session::flash('message', 'Payment successfull. Please find below the application details.');

            return redirect()->route('payment.index');
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');
            return redirect()->route('payment.index');
        }
    }

    /** KHALTI API CALL */
    private function KhaltiTransactionVerifyAPICall($khalti_post_params = [])
    {
        if ($khalti_post_params === null) {
            return false;
        }

        $client = new Client();

        /** Logger : CHECKOUT RESPONSE */
        $this->_logger->info('KHALTI VERIFY REQUEST: ' . json_encode($khalti_post_params));

        $headers = [
            'Authorization' => 'Key ' . $this->_api_context_khalti['secret_key'],
            'Content-Type' => 'application/json',
        ];

        switch ($khalti_post_params['method']) {
            case 'payment_initiation':
                $api_endpoint = $this->_api_context_khalti['initate_url'];
                break;
            case 'payment_lookup':
                $api_endpoint = $this->_api_context_khalti['verify_url'];
                break;

            default:
                return false;
        }
        try {
            $response = $client->request('POST', $api_endpoint, [
                'json' => $khalti_post_params,
                'headers' => $headers,
            ]);

            $responseData = json_decode($response->getBody()->getContents(), true);

            /** Logger: VERIFY RESPONSE */
            $this->_logger->info('KHALTI VERIFY RESPONSE: ' . json_encode($responseData));

            return ['response' => $responseData];
        } catch (GuzzleException $e) {
            return false;
        }
    }
}
