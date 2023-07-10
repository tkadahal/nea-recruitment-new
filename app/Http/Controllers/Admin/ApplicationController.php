<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Application;
use App\Models\FiscalYear;
use App\Models\Payment;
use Illuminate\View\View;

class ApplicationController extends Controller
{
    public function index(): View
    {
        // $applications = FiscalYear::has('advertisements')->withCount('advertisements')->get();
        $applications = FiscalYear::has('advertisements.applications.payment.paymentVerification')
            ->with(['advertisements' => function ($query) {
                $query->withCount(['applications', 'applications.payment.paymentVerification as is_checked_count' => function ($query) {
                    $query->where('is_checked', 1);
                }]);
            }])
            ->withCount('advertisements')
            ->get();

        dd($applications);

        return view('admin.applications.index', compact('applications'));
    }

    public function show($id): View
    {
        $advertisements = Advertisement::query()->withCount('applications')
            ->where('fiscal_year_id', $id)
            ->get();

        return view('admin.applications.show', compact('advertisements'));
    }

    public function viewApplications($advertisementId): View
    {
        $advertisementNum = Advertisement::query()->where('id', $advertisementId)->value('advertisement_num');

        $paymentDetails = Payment::query()->with(['application.user'])
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            })
            ->where('payment_status', '1')
            ->get();

        $applications = [];

        foreach ($paymentDetails as $paymentDetail) {
            $id = $paymentDetail->application->id;
            $name = $paymentDetail->application->user->name;
            $payment_gateway = $paymentDetail->payment_gateway;
            $payable_amount = $paymentDetail->amount;
            $paid_amount = $paymentDetail->paid_amount;

            $applications[] = [
                'id' => $id,
                'name' => $name,
                'payment_gateway' => $payment_gateway,
                'payable_amount' => $payable_amount,
                'paid_amount' => $paid_amount,
            ];
        }

        return view('admin.applications.viewApplications', compact('applications', 'advertisementNum'));
    }

    public function viewUserDetail($id): View
    {
        $application = Application::query()
            ->with([
                'user',
                'user.educations',
                'user.contact',
                'user.contact.province',
                'user.contact.district',
                'user.contact.municipality',
                'user.contact.fatherCountry',
                'user.trainings',
                'user.experiences',
                'user.media',
                'samabeshiGroups',
                'payment',
            ])
            ->findOrFail($id);

        $user = $application->user;

        return view('admin.applications.viewUserDetail', compact('user', 'application'));
    }
}
