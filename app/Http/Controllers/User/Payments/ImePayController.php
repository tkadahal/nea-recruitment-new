<?php

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
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\RequestException;

class ImePayController extends Controller
{
    private $paymentService;

    private $_api_context_imepay = [];

    private $_logger;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

        $paymentVendor = PaymentVendor::where('payment_gateway', 'imepay')->first();

        $log_path = storage_path() . '/logs/imepay/' . date('Y-m-d') . '.log';
        $this->_logger = new Logger('IMEPAY LOG :' . date('Y-d-m H:i:s'));
        $this->_logger->pushHandler(new StreamHandler($log_path, Logger::INFO));

        $this->_api_context_imepay['payment_gateway'] = $paymentVendor->payment_gateway;
        $this->_api_context_imepay['merchant_code'] = $paymentVendor->merchant_code;
        $this->_api_context_imepay['username'] = $paymentVendor->username;
        $this->_api_context_imepay['password'] = $paymentVendor->verify_password;
        $this->_api_context_imepay['module'] = $paymentVendor->app_name;
        $this->_api_context_imepay['token_url'] = $paymentVendor->token_url;
        $this->_api_context_imepay['checkout_url'] = $paymentVendor->checkout_url;
        $this->_api_context_imepay['confirm_url'] = $paymentVendor->verify_url;
        $this->_api_context_imepay['recheck_url'] = $paymentVendor->recheck_url;
    }

    public function initializeImePay($applicationRefID = null)
    {
        try {
            $application = Application::where('user_id', auth()->id())
                ->where('uuid', $applicationRefID)
                ->first() ?? null;

            if (!$application) {
                return redirect()->back()->withErrors(['error' => 'Invalid application. Please try again.']);
            }

            $paymentRecord = $this->paymentService->initiatePayment($application, $this->_api_context_imepay['payment_gateway']);

            if (!$paymentRecord) {
                return redirect()->back()->withErrors(['error' => 'Sorry we cannot process your request at this moment. Please try again.']);
            }

            $payload_amount = number_format((float) $paymentRecord['amount'], 2, '.', '');

            $ime_payload = [
                'method' => 'generate_token',
                'Amount' => $payload_amount,
                'RefId' => $paymentRecord['reference_id'],
            ];

            // API Call for Token
            $token_status = $this->apiCallIMEPay($ime_payload);

            if (!$token_status) {
                Session::flash('error_message', 'Payment failed. Please select other payment options.');

                return redirect()->route('payment.index');
            }

            $TokenId = $token_status['TokenId'] ?? null;

            $ime_pay_ref_data = [
                'checkout_url' => $this->_api_context_imepay['checkout_url'],
                'MerchantCode' => $this->_api_context_imepay['merchant_code'],
                'TranAmount' => $paymentRecord['amount'],
                'RefId' => $paymentRecord['reference_id'],
                'TokenId' => $TokenId,
                'RespUrl' => route('imepay.success', [$paymentRecord['reference_id']]), // response url
                'CancelUrl' => route('imepay.failure', [$paymentRecord['reference_id']]), // cancel url
            ];

            return view('user.applications.gateways.imepay', ['ime_params' => $ime_pay_ref_data]);
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

            return redirect()->route('payment.index');
        }
    }

    public function imePaymentResponse(Request $request, $tokenID = null)
    {
        try {
            $ime_response = $request->data;

            $decoded_data = \base64_decode($ime_response);

            $response_data = \explode('|', $decoded_data);

            $this->_logger->info('---------------------------------------------------------------------------');
            $this->_logger->info('WEB CHECKOUT RESPONSE LOG : ' . json_encode($response_data));
            $this->_logger->info('---------------------------------------------------------------------------');

            $ResponseCode = $response_data['0'] ?? null;
            $ResponseDescription = $response_data['1'] ?? null;
            $Msisdn = $response_data['2'] ?? null;
            $TransactionId = $response_data['3'];
            $RefId = $response_data['4'];
            $TranAmount = $response_data['5'];
            $TokenId = $response_data['6'];

            // $tokenID = $ime_response['TokenId'] ?? $tokenID;

            $paymentDetails = Payment::with('application')->where('reference_id', $RefId)->first();

            if (!$paymentDetails || $paymentDetails->application->user->id != auth()->id()) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

                return redirect()->route('payment.index');
            }

            /**
             * VERIFICATIN API CALL
             */
            $ime_payload = [
                'method' => 'confirm_payment',
                'RefId' => $RefId,
                'TokenId' => $TokenId,
                'TransactionId' => $TransactionId,
                'Msisdn' => $Msisdn,
            ];

            $verification_response = $this->apiCallIMEPay($ime_payload);
            if (!$verification_response || ($verification_response && isset($verification_response['ResponseCode']) && $verification_response['ResponseCode'] != '0')) {
                /**
                 *  RECHECK API : CASE I : IF No response, CASE II : Response but ResponseCode is not 0 ie failed
                 */
                $this->_logger->info('---------------------------------------------------------------------------');
                $this->_logger->info('RECHECKING API CALL');
                $this->_logger->info('---------------------------------------------------------------------------');

                $ime_recheck_payload = [
                    'method' => 'recheck',
                    'RefId' => $RefId,
                    'TokenId' => $TokenId,
                ];
                $verification_response = $this->apiCallIMEPay($ime_recheck_payload);
                if (!$verification_response) {
                    Session::flash('error_message', 'Payment failed. Please select other payment options.');

                    return redirect()->route('payment.index');
                }
            }

            if (isset($verification_response['ResponseCode']) && $verification_response['ResponseCode'] == '0') {

                /** Logger : REQUEST */
                $this->_logger->info('---------------------------------------------------------------------------');
                $this->_logger->info('PAYMENT PROCESS STARTED');

                // PAYMENT SUCCESS
                // UPDATE PAYMENT STATUS HERE AND REDIRECT

                PaymentHelper::updatePayment([
                    'reference_id' => $RefId,
                    'application_id' => $paymentDetails->application->id ?? null,
                    'payment_status' => '1',
                    'paid_amount' => $paymentDetails->amount,
                    'transaction_id' => $TransactionId,
                ]);

                /** SEND SMS TO THE USER FOR PAYMENT VERIFICATION **/
                // $mobile = $paymentDetails->userDetails->mobile_no;
                // $applicant_name = $paymentDetails->userDetails->name;
                // $vacancy_name = $paymentDetails->vacancyDetails->bigyapan_number;

                // $message = 'Dear '.$applicant_name.' , Your application fee '.$paymentDetails->paid_amount.' the post '.$vacancy_name.' has been sucessfully received';

                // Auth::user()->sendSms($message, $mobile);

                Session::flash('message', 'Payment successfull. Please find below the application details.');

                return redirect()->route('payment.index');
            }

            Session::flash('error_message', 'Payment failed. Please select other payment options.');

            return redirect()->route('payment.index');
        } catch (\Exception $e) {
            return redirect()->route('payment.index');
        }
    }

    public function imePaymentResponseCancel(Request $request, $tokenID = null)
    {
        try {
            $ime_response = $request->data;

            $decoded_data = \base64_decode($ime_response);

            $response_data = \explode('|', $decoded_data);

            $this->_logger->info('---------------------------------------------------------------------------');
            $this->_logger->info('WEB CHECKOUT CANCEL RESPONSE LOG : ' . json_encode($response_data));
            $this->_logger->info('---------------------------------------------------------------------------');

            $ResponseCode = $response_data['0'] ?? null;
            $ResponseDescription = $response_data['1'] ?? null;
            $Msisdn = $response_data['2'] ?? null;
            $TransactionId = $response_data['3'];
            $RefId = $response_data['4'];
            $TranAmount = $response_data['5'];
            $TokenId = $response_data['6'];

            // $this->_logger->info("---------------------------------------------------------------------------");
            // $this->_logger->info("WEB CHECKOUT RESPONSE LOG : " . json_encode($ime_response));
            // $this->_logger->info("---------------------------------------------------------------------------");

            $paymentDetails = Payment::with('application')->where('reference_id', $RefId)->first();

            if (!$paymentDetails || $paymentDetails->application->user->id != auth()->id()) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

                return redirect()->route('payment.index');
            }

            Session::flash('error_message', 'Payment failed. Please select other payment options.');

            return redirect()->route('payment.index');
        } catch (\Exception $e) {
            return redirect()->route('payment.index');
        }
    }

    /////////////////// API CALL IMEPay ////////////////////////////

    private function apiCallIMEPay($payload = null)
    {
        if ($payload == null || count($payload) == 0) {
            return false;
        }

        try {
            $imepay_header = [
                'Content-Type' => 'application/json;charset=utf-8',
                'Authorization' => 'Basic ' . base64_encode($this->_api_context_imepay['username'] . ':' . $this->_api_context_imepay['password']),
                'Module' => base64_encode($this->_api_context_imepay['module']),
            ];

            $ime_payload = [
                'MerchantCode' => $this->_api_context_imepay['merchant_code'],
            ];

            switch ($payload['method']) {
                case 'generate_token':
                    $api_endpoint = $this->_api_context_imepay['token_url'];
                    $ime_payload['Amount'] = $payload['Amount'];
                    $ime_payload['RefId'] = $payload['RefId'];
                    break;

                case 'confirm_payment':
                    $api_endpoint = $this->_api_context_imepay['confirm_url'];
                    $ime_payload['RefId'] = $payload['RefId'];
                    $ime_payload['TokenId'] = $payload['TokenId'];
                    $ime_payload['TransactionId'] = $payload['TransactionId'];
                    $ime_payload['Msisdn'] = $payload['Msisdn'];
                    break;

                case 'recheck':
                    $api_endpoint = $this->_api_context_imepay['recheck_url'];
                    $ime_payload['TokenId'] = $payload['TokenId'];
                    $ime_payload['RefId'] = $payload['RefId'];
                    break;

                default:
                    return false;
            }

            $client = new Client();
            $response = $client->post($api_endpoint, [
                'headers' => $imepay_header,
                'body' => json_encode($ime_payload),
                'connect_timeout' => 30,
                'http_errors' => false,
            ]);

            $api_response = (string) $response->getBody();

            // Logger: RESPONSE
            $this->_logger->info('---------------------------------------------------------------------------');
            $this->_logger->info('RESPONSE LOG: ' . $payload['method'] . ': ' . $payload['RefId']);
            $this->_logger->info($api_response);

            if ($response->getStatusCode() === 200) {
                return json_decode($api_response, true);
            } else {
                return false;
            }
        } catch (RequestException $e) {
            return false;
        }
    }
}
