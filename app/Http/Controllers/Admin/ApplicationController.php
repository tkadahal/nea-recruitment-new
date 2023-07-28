<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\FiscalYear;
use App\Models\Payment;
use Illuminate\View\View;

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
                    $query->where('payment_status', '1');
                });
            }])
            ->withCount(['applications as total_checked' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_checked', true);
                });
            }])
            ->withCount(['applications as total_approved' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_approved', true);
                });
            }])
            ->withCount(['applications as total_rejected' => function ($query) {
                $query->whereHas('payments.paymentVerification', function ($query) {
                    $query->where('is_rejected', true);
                });
            }])
            ->where('fiscal_year_id', $id)
            ->get();

        return view('admin.applications.show', compact('advertisements'));
    }

    public function viewApplications($advertisementId, $action): View
    {
        $advertisementNum = Advertisement::query()->where('id', $advertisementId)->value('advertisement_num');

        $paymentQuery = Payment::query()->with(['application.user'])
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            })->where('payment_status', '1');

        switch ($action) {
            case '_total':
                $paymentQuery->whereDoesntHave('paymentVerification')
                    ->orwhereHas('paymentVerification', function ($query) {
                        $query->where('is_checked', false);
                        $query->where('is_approved', false);
                        $query->where('is_rejected', false);
                    });
                break;
            case '_checked':
                $paymentQuery->whereHas('paymentVerification', function ($query) {
                    $query->where('is_checked', true)
                        ->where('is_approved', false)
                        ->where('is_rejected', false);
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
                abort(404, 'Invalid action');
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

        return view('admin.applications.viewApplications', compact('applications', 'advertisementNum', 'advertisementId'));
    }

    public function viewUserDetail($id): View
    {
        $payment = Payment::query()
            ->with([
                'application',
                'application.user',
                'application.user.educations',
                'application.user.contact',
                'application.user.contact.permaProvince',
                'application.user.contact.tempProvince',
                'application.user.contact.permaDistrict',
                'application.user.contact.tempDistrict',
                'application.user.contact.permaMunicipality',
                'application.user.contact.tempMunicipality',
                'application.user.contact.fatherCountry',
                'application.user.educations',
                'application.user.educations.media',
                'application.user.educations.media.mediaType',
                'application.user.trainings',
                'application.user.trainings.media',
                'application.user.trainings.media.mediaType',
                'application.user.experiences',
                'application.user.experiences.media',
                'application.user.experiences.media.mediaType',
                'application.user.media',
                'application.user.media.mediaType',
                'application.samabeshiGroups',
            ])
            ->findOrFail($id);

        $user = $payment->application->user;
        $application = $payment->application;

        return view('admin.applications.viewUserDetail', compact('user', 'application', 'payment'));
    }
}
