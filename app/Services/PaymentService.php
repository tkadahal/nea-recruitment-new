<?php

declare(strict_types=1);

namespace App\Services;

use App\Helpers\PaymentHelper;
use App\Models\Application;
use Carbon\Carbon;
use Hidehalo\Nanoid\Client as NanoClient;

class PaymentService
{
    private function isPaymentAlreadyMade(Application $application): void
    {
        $payment = $application->payment;

        if ($payment && $payment->where('payment_status', '1')->first()) {
            throw new \Exception('You have already made payment for this application. Please find the details below.');
        }
    }

    private function calculateVacancyAmount(Application $application): ?float
    {
        $isPaymentMade = $this->isPaymentAlreadyMade($application);

        if ($isPaymentMade) {
            throw new \Exception('You have already made payment for this application. Please find the details below.');
        }

        $advertisement = $application->advertisement;
        $currentDate = Carbon::now()->toDateString();

        $amount = $currentDate >= $advertisement->start_date_en && $currentDate <= $advertisement->end_date_en
            ? $application->payable_amount
            : ($currentDate > $advertisement->end_date_en ? $application->payable_amount * 2 : null);

        if ($amount === null) {
            throw new \Exception('Invalid application. Please try again.');
        }

        return $amount;
    }

    public function initiatePayment(Application $application, string $paymentGateway): array
    {
        $transactionRefID = $this->generateTransactionRefID($paymentGateway);
        $amount = $this->calculateVacancyAmount($application);

        $paymentRecord = PaymentHelper::initiatePayment([
            'application_id' => $application->id,
            'amount' => $amount,
            'reference_id' => $transactionRefID,
            'payment_gateway' => $paymentGateway,
            'user_id' => auth()->id(),
            'vacancy_id' => $application->advertisement_id,
        ]);

        return $paymentRecord;
    }

    private function generateTransactionRefID(string $paymentGateway): string
    {
        $prefix = '';

        if ($paymentGateway === 'esewa') {
            $prefix = 'ES.';
        } elseif ($paymentGateway === 'connectips') {
            $prefix = 'CI.';
        } elseif ($paymentGateway === 'imepay') {
            $prefix = 'IM.';
        } elseif ($paymentGateway === 'khalti') {
            $prefix = 'KH.';
        }

        $nanoClient = new NanoClient();

        return $prefix.$nanoClient->formattedId('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz', 12);
    }
}
