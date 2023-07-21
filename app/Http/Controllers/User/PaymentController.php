<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use Illuminate\View\View;
use App\Models\Application;
use App\Models\Advertisement;
use App\Models\PaymentVendor;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index(): View
    {
        $applications = Application::with('advertisement', 'latestPayment', 'latestPayment.paymentVerification')
            ->where('user_id', auth()->id())
            ->get();

        foreach ($applications as $application) {
            $selectedGroups = collect($application->samabeshiGroups)->toArray();

            try {
                $application->applicationFee = $this->calculateFee($selectedGroups, $application->advertisement->id);
            } catch (\Exception $e) {
                $application->applicationFee = 0;
            }
        }

        return view('user.payments.index', compact('applications'));
    }

    public function show(string $id): View
    {
        $application = Application::with('advertisement')->findorFail($id);
        $advertisement = $application->advertisement;

        $paymentVendors = PaymentVendor::active()->orderBy('payment_gateway')->get();

        $advertisementSamabeshiGroups = $advertisement->samabeshiGroups;

        $userAppliedSamabeshiGroups = $application->samabeshiGroups;

        $samabeshiGroups = $advertisementSamabeshiGroups->map(function ($samabeshiGroup) use ($userAppliedSamabeshiGroups) {
            $samabeshiGroup['applied'] = $userAppliedSamabeshiGroups->contains('id', $samabeshiGroup['id']);

            return $samabeshiGroup;
        });

        $application->applicationFee = $this->calculateFee($userAppliedSamabeshiGroups->toArray(), $application->advertisement->id);

        return view('user.payments.show', compact('application', 'samabeshiGroups', 'paymentVendors'));
    }

    public function calculateFee(array $selectedGroups, int $advertisementId): int
    {
        $numSelectedGroups = count($selectedGroups);

        if ($numSelectedGroups === 0) {
            $selectedGroups = [];
            abort(422, trans('global.application.info.zeroAmountError'));
        }

        $advertisement = Advertisement::find($advertisementId);

        $endDate = Carbon::parse($advertisement->end_date_en);
        $currentDate = Carbon::now();

        if ($currentDate > $endDate) {
            return ($advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee)) * 2;
        }

        return $advertisement->open_fee + (($numSelectedGroups - 1) * $advertisement->samabeshi_fee);
    }
}
