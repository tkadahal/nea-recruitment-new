<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use App\Models\Tippani;
use App\Models\Advertisement;
use App\Models\TippaniApproval;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ReportController extends Controller
{
    public function getReportByPaymentVendors($advertisementNumber = null)
    {
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
            // 'relationship_name' => 'application',
            'group_by_field' => 'payment_gateway',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $report_by_payment_vendors = new LaravelChart($officeReport_chart_settings);

        return view('admin.reports.reportsByPaymentVendors', compact('list_blocks', 'report_by_payment_vendors', 'advertisements'));
    }

    public function getReportByFiscalYear()
    {
        $title = trans('global.reportByFiscalYear.title');
        $list_blocks = [
            [
                'title' => $title,
                'entries' => Tippani::with('fiscalYear')->groupBy('fiscal_year_id')
                    ->select('fiscal_year_id', DB::raw('count(*) as total'))->get(),
            ],
        ];

        $fiscalYearReport_chart_settings = [
            'chart_title' => $title,
            'chart_type' => 'pie',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Tippani',
            'relationship_name' => 'fiscalYear',
            'group_by_field' => 'title',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $tippani_by_fiscalYear = new LaravelChart($fiscalYearReport_chart_settings);

        return view('admin.reports.reportsByFiscalYears', compact('list_blocks', 'tippani_by_fiscalYear'));
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

    public function getReportByStatus()
    {
        $title = trans('global.reportByStatus.title');
        $list_blocks = [
            [
                'title' => $title,
                'entries' => TippaniApproval::with('status')->groupBy('status_id')
                    ->select('status_id', DB::raw('count(*) as total'))->get(),
            ],
        ];

        $statusReport_chart_settings = [
            'chart_title' => $title,
            'chart_type' => 'pie',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\TippaniApproval',
            'relationship_name' => 'status',
            'group_by_field' => 'title',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $tippani_by_status = new LaravelChart($statusReport_chart_settings);

        return view('admin.reports.reportsByStatuses', compact('list_blocks', 'tippani_by_status'));
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
