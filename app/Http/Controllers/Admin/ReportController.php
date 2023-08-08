<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use App\Models\Tippani;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PaymentVendor;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ReportController extends Controller
{
    public function getReportByPaymentVendors(Request $request)
    {
        $advertisementNumber = $request->query('advertisement');
        $advertisements = Advertisement::all();

        $query = Payment::select('payment_gateway', DB::raw('COUNT(id) as total'))
            ->where('payment_status', '1');

        if ($advertisementNumber !== null) {
            $query->whereHas('application', function ($q) use ($advertisementNumber) {
                $q->where('advertisement_id', $advertisementNumber);
            });
        }

        $list_blocks = [
            [
                'title' => 'Reports By Payment Vendors',
                'entries' => $query->groupBy('payment_gateway')->get(),
            ],
        ];

        $officeReport_chart_settings = [
            'chart_title' => 'Reports By Payment Vendors',
            'chart_type' => 'pie',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Payment',
            'group_by_field' => 'payment_gateway',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $report_by_payment_vendors = new LaravelChart($officeReport_chart_settings);

        return view('admin.reports.reportsByPaymentVendors', compact('list_blocks', 'report_by_payment_vendors', 'advertisements'));
    }

    public function getReportByApplicationCount()
    {
        $list_blocks = [
            [
                'title' => 'Reports By Application Count',
                'entries' => Payment::with('application.advertisement', 'paymentVerification')
                    ->where('payment_status', '1')
                    ->get()
                    ->groupBy(function ($item) {
                        return $item->application->advertisement->advertisement_num;
                    })
                    ->map(function ($groupedItems) {
                        $approvedCount = $groupedItems->where('paymentVerification.is_approved', true)->count();
                        $rejectedCount = $groupedItems->where('paymentVerification.is_rejected', true)->count();

                        return [
                            'advertisementNumber' => $groupedItems->first()->application->advertisement->advertisement_num,
                            'total' => $groupedItems->count(),
                            'approved' => $approvedCount,
                            'rejected' => $rejectedCount,
                        ];
                    })
                    ->values(),
            ],
        ];

        return view('admin.reports.reportsByApplicationCount', compact('list_blocks'));
    }


    public function getReportByApplicantsCount(Request $request)
    {
        $advertisements = Advertisement::all()->pluck('advertisement_num', 'id')->prepend(trans('global.pleaseSelect'), '');
        $paymentVendors = PaymentVendor::all()->pluck('payment_gateway', 'id')->prepend(trans('global.pleaseSelect'), '');

        $list_blocks = [
            [
                'title' => 'Reports By Users Count',
                'entries' => Payment::with('application.advertisement', 'application.user', 'paymentVerification')
                    ->when($request->filled('date_from_ad'), function ($query) use ($request) {
                        return $query->whereDate('created_at', '>=', $request->input('date_from_ad'));
                    })
                    ->when($request->filled('date_to_ad'), function ($query) use ($request) {
                        return $query->whereDate('created_at', '<=', $request->input('date_to_ad'));
                    })
                    ->when($request->filled('payment_status'), function ($query) use ($request) {
                        return $query->where('payment_status', $request->input('payment_status'));
                    })
                    ->when($request->filled('verification_status'), function ($query) use ($request) {
                        if ($request->input('verification_status') === '1') {
                            return $query->whereHas('paymentVerification', function ($subquery) {
                                $subquery->where('is_approved', true);
                            });
                        } elseif ($request->input('verification_status') === '2') {
                            return $query->whereHas('paymentVerification', function ($subquery) {
                                $subquery->where('is_checked', true)->where('is_approved', false);
                            });
                        } elseif ($request->input('verification_status') === '3') {
                            return $query->whereHas('paymentVerification', function ($subquery) {
                                $subquery->where('is_rejected', true);
                            });
                        }
                    })
                    ->when($request->filled('verification_status') && $request->input('verification_status') === '2', function ($query) {
                        return $query->orWhereDoesntHave('paymentVerification');
                    })
                    ->when($request->filled('advertisement_id'), function ($query) use ($request) {
                        return $query->whereHas('application.advertisement', function ($subquery) use ($request) {
                            $subquery->where('id', $request->input('advertisement_id'));
                        });
                    })
                    ->when($request->filled('payment_vendor_id'), function ($query) use ($request) {
                        $paymentVendorEnumValue = PaymentVendor::find($request->input('payment_vendor_id'))->payment_gateway;
                        return $query->where('payment_gateway', $paymentVendorEnumValue);
                    })
                    ->get()
            ],
        ];

        return view('admin.reports.reportsByApplicants', compact('list_blocks', 'advertisements', 'paymentVendors'));
    }

    public function getReportByCategory()
    {
        $title = trans('global.reportByCategory.title');
        $list_blocks = [
            [
                'title' => $title,
                'entries' => Tippani::with('category')->groupBy('category_id')
                    ->select('category_id', DB::raw('count(*) as total'))->get(),
            ],
        ];

        $categoryReport_chart_settings = [
            'chart_title' => $title,
            'chart_type' => 'pie',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Tippani',
            'relationship_name' => 'category',
            'group_by_field' => 'title',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $tippani_by_category = new LaravelChart($categoryReport_chart_settings);

        return view('admin.reports.reportsByCategories', compact('list_blocks', 'tippani_by_category'));
    }

    public function getReportByUserType()
    {
        $title = trans('global.reportByUserType.title');
        $list_blocks = [
            [
                'title' => $title,
                'entries' => Tippani::with('user.userType')->groupBy('user_id')
                    ->select('user_id', DB::raw('count(*) as total'))->get(),
            ],
        ];

        $userTypeReport_chart_settings = [
            'chart_title' => $title,
            'chart_type' => 'pie',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Tippani',
            'relationship_name' => 'user.userType',
            'group_by_field' => 'title',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $tippani_by_userType = new LaravelChart($userTypeReport_chart_settings);

        return view('admin.reports.reportsByUserTypes', compact('list_blocks', 'tippani_by_userType'));
    }
}
