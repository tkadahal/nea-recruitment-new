<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tippani;
use App\Models\TippaniApproval;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ReportController extends Controller
{
    public function getReportByOffice()
    {
        $title = trans('global.reportByOffice.title');
        $list_blocks = [
            [
                'title' => $title,
                'entries' => Tippani::with('user')->groupBy('user_id')
                    ->select('user_id', DB::raw('count(*) as total'))->get(),
            ],
        ];

        $officeReport_chart_settings = [
            'chart_title' => $title,
            'chart_type' => 'pie',
            'report_type' => 'group_by_relationship',
            'model' => 'App\Models\Tippani',
            'relationship_name' => 'user',
            'group_by_field' => 'name',
            'aggregate_function' => 'count',
            'column_class' => 'col-md-12',
            'chart_color' => 'rgba({{ rand(0,255) }}, {{ rand(0,255) }}, {{ rand(0,255) }}, 1)',
        ];
        $tippani_by_office = new LaravelChart($officeReport_chart_settings);

        return view('admin.reports.reportsByOffices', compact('list_blocks', 'tippani_by_office'));
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
