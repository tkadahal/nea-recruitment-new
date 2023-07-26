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
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;

class EsewaController extends Controller
{
    private $paymentService;

    private $_logger;

    private $_api_context_esewa = [];

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

        $paymentVendor = PaymentVendor::where('payment_gateway', 'esewa')->first();

        $log_path = storage_path() . '/logs/esewa/' . date('Y-m-d') . '.log';

        $this->_logger = new Logger('ESEWA LOG :' . date('Y-d-m H:i:s'));
        $this->_logger->pushHandler(new StreamHandler($log_path, Logger::INFO));

        $this->_api_context_esewa['payment_gateway'] = $paymentVendor->payment_gateway;
        $this->_api_context_esewa['merchant_code'] = $paymentVendor->merchant_code;
        $this->_api_context_esewa['payment_url'] = $paymentVendor->token_url;
        $this->_api_context_esewa['verify_url'] = $paymentVendor->verify_url;
    }

    public function initializeEsewa($applicationRefID)
    {
        try {
            $application = Application::where('user_id', auth()->id())
                ->where('uuid', $applicationRefID)
                ->first() ?? null;

            if (!$application) {
                return redirect()->back()->withErrors(['error' => 'Invalid application. Please try again.']);
            }

            $paymentRecord = $this->paymentService->initiatePayment($application, $this->_api_context_esewa['payment_gateway']);

            if (!$paymentRecord) {
                return redirect()->back()->withErrors(['error' => 'Sorry we cannot process your request at this moment. Please try again.']);
            }

            $esewa_params = [
                'amt' => $paymentRecord['amount'],
                'txAmt' => 0,
                'psc' => 0,
                'pdc' => 0,
                'tAmt' => $paymentRecord['amount'],
                'scd' => $this->_api_context_esewa['merchant_code'],
                'pid' => $paymentRecord['reference_id'],
                'su' => route('esewa.success', [$paymentRecord['reference_id']]),
                'fu' => route('esewa.failure', [$paymentRecord['reference_id']]),
                'payment_url' => $this->_api_context_esewa['payment_url'],
            ];

            return view('user.applications.gateways.esewa', ['esewa_params' => $esewa_params]);
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

            return redirect()->back();
        }
    }

    public function successEsewa(Request $request, $paymentRefID = null)
    {
        try {
            $this->_logger->info('CHECKOUT RESPONSE, REFERENCE ID : ' . $paymentRefID . ' ' . json_encode($request->all()));

            $paymentDetails = Payment::with('application')->where('reference_id', $paymentRefID)->first();

            if (!$paymentDetails || $paymentDetails->application->user->id != auth()->id()) {
                Session::flash('error_message', 'Sorry we cannot process your request at this moment. Please select other payment options.');

                return redirect()->back();
            }

            $oid = $request->get('oid') ?? null;
            $refId = $request->get('refId') ?? null;
            $paidAmount = $request->get('amt') ?? null;

            $esewa_params_verify = [
                'amt' => $paymentDetails->amount,
                'scd' => $this->_api_context_esewa['merchant_code'],
                'pid' => $oid,
                'rid' => $refId,
            ];

            $esewa_params_verify_query = http_build_query($esewa_params_verify);

            $payment_verification_status = $this->verifyPaymentEsewa($esewa_params_verify_query);

            if (!$payment_verification_status || $payment_verification_status != 'SUCCESS') {

                /** DOUBLE VERIFICATION */
                $this->_logger->info('DOUBLE VERIFICATION, REFERENCE ID : ' . $paymentRefID);

                // CALLING VERIFICATION ONE MORE TIME AFTER WAITING 3 Secs
                sleep(3);
                $payment_verification_status = $this->verifyPaymentEsewa($esewa_params_verify_query);

                // verification status not received or returned failure
                if (!$payment_verification_status || $payment_verification_status != 'SUCCESS') {
                    PaymentHelper::updatePayment([
                        'reference_id' => $paymentRefID,
                        'application_id' => $paymentDetails->application->id,
                        'payment_status' => '3',
                        'paid_amount' => $paidAmount,
                        'transaction_id' => $refId,
                    ]);

                    Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');

                    return redirect()->back();
                }
            }

            // SUCCESSFUL PAYMENT
            PaymentHelper::updatePayment([
                'reference_id' => $paymentRefID,
                'application_id' => $paymentDetails->application->id,
                'payment_status' => '1',
                'paid_amount' => $paidAmount,
                'transaction_id' => $refId,
            ]);

            Session::flash('message', 'Payment successfull. Please find below the application details.');

            return redirect()->route('payment.index');
        } catch (\Exception $e) {
            Session::flash('error_message', 'Sorry something went wrong processing your payment. Please verify the payment or select other payment options.');

            return redirect()->route('payment.index');
        }
    }

    private function verifyPaymentEsewa($esewa_params_verify_query = null)
    {
        if ($esewa_params_verify_query === null) {
            return false;
        }

        try {
            $verify_url = $this->_api_context_esewa['verify_url'];

            $this->_logger->info('VERIFY REQUEST: ' . $esewa_params_verify_query);

            $client = new Client();
            $response = $client->post($verify_url, [
                'body' => $esewa_params_verify_query,
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'verify' => false, // Disables SSL certificate verification (for testing purposes only)
            ]);

            $result = $response->getBody()->getContents();

            $this->_logger->info('VERIFY RESPONSE: ' . $result);

            $verification_response = strtoupper(trim(strip_tags($result)));

            return $verification_response;
        } catch (GuzzleException $e) {
            return false;
        }
    }
}
