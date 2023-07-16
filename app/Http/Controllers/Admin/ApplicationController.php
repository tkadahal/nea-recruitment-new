<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\View\View;
use App\Models\FiscalYear;
use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Http\Controllers\Controller;

class ApplicationController extends Controller
{
    public function index(): View
    {
        $applications = FiscalYear::has('advertisements')->withCount('advertisements')->get();
        // $applications = FiscalYear::has('advertisements.applications.payments.paymentVerification')
        //     ->with(['advertisements' => function ($query) {
        //         $query->withCount(['applications', 'applications.payments.paymentVerification as is_checked_count' => function ($query) {
        //             $query->where('is_checked', 1);
        //         }]);
        //     }])
        //     ->withCount('advertisements')
        //     ->get();

        return view('admin.applications.index', compact('applications'));
    }

    public function show($id): View
    {
        $advertisements = Advertisement::query()
            ->withCount(['applications as total_payments' => function ($query) {
                $query->whereHas('payments', function ($query) {
                    $query->where('payment_status', 1);
                });
            }])
            ->withCount(['applications as total_checked' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_checked', 1);
                });
            }])
            ->withCount(['applications as total_approved' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_approved', 1);
                });
            }])
            ->withCount(['applications as total_rejected' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_rejected', 1);
                });
            }])
            ->where('fiscal_year_id', $id)
            ->get();

        // dd($advertisements);

        return view('admin.applications.show', compact('advertisements'));
    }

    public function viewApplications($advertisementId, $action): View
    {
        $advertisementNum = Advertisement::query()->where('id', $advertisementId)->value('advertisement_num');

        $paymentQuery = Payment::query()->with(['application.user'])
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            });

        switch ($action) {
            case '_total':
                $paymentQuery->where('payment_status', '1')
                    ->whereDoesntHave('paymentVerification')
                    ->orwhereHas('paymentVerification', function ($query) {
                        $query->where('is_checked', false);
                    });
                break;
            case '_checked':
                $paymentQuery->whereHas('paymentVerification', function ($query) {
                    $query->where('is_checked', true);
                });
                break;
            case '_approved':
                $paymentQuery->whereHas('paymentVerification', function ($query) {
                    $query->where('is_approved', true);
                });
                break;
            case '_rejected':
                $paymentQuery->whereHas('paymentVerification', function ($query) {
                    $query->where('is_rejected', true);
                });
                break;
            default:
                // Handle unknown action or error
                break;
        }

        $paymentDetails = $paymentQuery->get();

        $applications = [];

        foreach ($paymentDetails as $paymentDetail) {
            $id = $paymentDetail->id;
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
        $payment = Payment::query()
            ->with([
                'application',
                'application.user',
                'application.user.educations',
                'application.user.contact',
                'application.user.contact.province',
                'application.user.contact.district',
                'application.user.contact.municipality',
                'application.user.contact.fatherCountry',
                'application.user.trainings',
                'application.user.experiences',
                'application.user.media',
                'application.samabeshiGroups',
            ])
            ->findOrFail($id);

        $user = $payment->application->user;
        $application = $payment->application;

        return view('admin.applications.viewUserDetail', compact('user', 'application', 'payment'));
    }
}
