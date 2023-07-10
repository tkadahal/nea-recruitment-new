<?php

declare(strict_types=1);

namespace App\Helpers;

use App\Models\Payment;
use Hidehalo\Nanoid\Client as NanoClient;

class PaymentHelper
{
    public static function initiatePayment(array $paymentData): array
    {
        if (empty($paymentData)) {
            return [];
        }

        $application_id = $paymentData['application_id'] ?? null;
        $payment_gateway = $paymentData['payment_gateway'] ?? null;
        $amount = $paymentData['amount'] ?? null;
        $reference_id = $paymentData['reference_id'] ?? null;

        if (! $application_id || ! $payment_gateway || ! $amount || ! $reference_id) {
            throw new \InvalidArgumentException('Required payment data is missing.');
        }

        try {
            $payment = Payment::create([
                'application_id' => $application_id,
                'amount' => $amount,
                'reference_id' => $reference_id,
                'payment_status' => '0',
                'payment_gateway' => $payment_gateway,
            ]);

            return $payment ? $payment->toArray() : [];
        } catch (\Exception $e) {
            // Handle the database or other exceptions appropriately.
            return [];
        }
    }

    public static function updatePayment(array $paymentData): bool
    {
        if (empty($paymentData)) {
            return false;
        }

        $reference_id = $paymentData['reference_id'] ?? null;
        $application_id = $paymentData['application_id'] ?? null;
        $payment_status = $paymentData['payment_status'] ?? null;
        $paid_amount = $paymentData['paid_amount'] ?? null;
        $transaction_id = $paymentData['transaction_id'] ?? null;

        if (! $reference_id || ! $application_id || ! $payment_status) {
            throw new \InvalidArgumentException('Required payment data is missing.');
        }

        try {
            return (bool) Payment::where('application_id', $application_id)
                ->where('reference_id', $reference_id)
                ->update([
                    'payment_status' => $payment_status,
                    'paid_amount' => $paid_amount,
                    'transaction_id' => $transaction_id,
                ]);
        } catch (\Exception $e) {
            // Handle the database or other exceptions appropriately.
            return false;
        }
    }

    public static function generateKhaltiReference(): string
    {
        $nanoClient = new NanoClient();

        return 'KH.'.$nanoClient->formattedId($alphabet = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', $size = 12);
    }
}
