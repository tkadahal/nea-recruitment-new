<?php

declare(strict_types=1);

namespace App\Http\Controllers\User\Payments;

use App\Helpers\PaymentHelper;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Payment;
use App\Services\PaymentService;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class KhaltiController extends Controller
{
    private $_logger;

    private $paymentService;

    private $_api_context_khalti = [];

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

        $log_path = storage_path() . '/logs/khalti/' . date('Y-m-d') . '.log';
        $this->_logger = new Logger('KHALTI LOG :' . date('Y-d-m H:i:s'));
        $this->_logger->pushHandler(new StreamHandler($log_path, Logger::INFO));

        $this->_api_context_khalti['payment_gateway'] = 'khalti';
        $this->_api_context_khalti['public_key'] = 'test_public_key_15ecc4b864bc48fa98f8aebf5d358664';
        $this->_api_context_khalti['secret_key'] = 'd04d0838688047b2bb78f70a1b2951a9';
        $this->_api_context_khalti['initate_url'] = 'https://a.khalti.com/api/v2/epayment/initiate/';
        $this->_api_context_khalti['verify_url'] = 'https://a.khalti.com/api/v2/epayment/lookup/';
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

            return redirect()->back();
        }
    }

    /** Payment Verification */
    public function verificationKhalti(Request $request)
    {
        try {
            /** Logger : CHECKOUT RESPONSE */
            $this->_logger->info('KHALTI CHECKOUT RESPONSE: ' . json_encode($request->all()));

            // dd($request->all());

            $pidx = $request->get('pidx') ?? false;

            // dd($pidx);
            $txnId = $request->get('txnId') ?? false;
            $amount = $request->get('amount') ?? false;
            $mobile = $request->get('mobile') ?? false;
            $purchase_order_id = $request->get('purchase_order_id') ?? false;
            $purchase_order_name = $request->get('purchase_order_name') ?? false;
            $transaction_id = $request->get('transaction_id') ?? false;

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


            // dd($payment_verification_status);
            // dd($payment_verification_status[0]['status']);

            if ($payment_verification_status['status'] === 'Completed') {

                dd('completed');
                // SUCCESSFUL PAYMENT
                PaymentHelper::updatePayment([
                    'reference_id' => $payment_verification_status['pidx'],
                    'application_id' => $paymentDetails->applicationDetails->id ?? null,
                    'payment_status' => '1',
                    'paid_amount' => $paymentDetails->amount,
                    'transaction_id' => $payment_verification_status['transaction_id'],
                ]);

                /** SEND SMS TO THE USER FOR PAYMENT VERIFICATION **/
                // ...
                // (Your SMS sending logic here)

                return response()->json(['status' => 'success', 'message' => 'Verification successfully.']);
            } else {
                // Verification Failed
                PaymentHelper::updatePayment([
                    'reference_id' => $payment_verification_status['pidx'],
                    'application_id' => $paymentDetails->applicationDetails->id ?? null,
                    'payment_status' => '3',
                    'paid_amount' => $paymentDetails->amount,
                    'transaction_id' => $payment_verification_status['transaction_id'],
                ]);

                return response()->json(['status' => 'error', 'message' => 'Verification Failed.']);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Verification Failed.']);
        }
    }

    /** KHALTI API CALL */
    private function KhaltiTransactionVerifyAPICall($khalti_post_params = [])
    {
        // dd($khalti_post_params);
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

            // return redirect::($responseData['payment_url']);
            return ['response' => $responseData];
        } catch (GuzzleException $e) {
            return false;
        }
    }
}
