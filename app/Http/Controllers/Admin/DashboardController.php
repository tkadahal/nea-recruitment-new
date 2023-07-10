<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $number_blocks = [
            [
                'title' => 'Users Logged In Today',
                'number' => Admin::whereDate('last_login_at', today())->count(),
            ],
            [
                'title' => 'Users Logged In Last 7 Days',
                'number' => Admin::whereDate('last_login_at', '>', today()->subDays(7))->count(),
            ],
            [
                'title' => 'Users Logged In Last 30 Days',
                'number' => Admin::whereDate('last_login_at', '>', today()->subDays(30))->count(),
            ],
        ];

        $list_blocks = [
            [
                'title' => 'Last Logged In Users',
                'entries' => Admin::orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get(),
            ],
            [
                'title' => 'Users Not Logged In For 30 Days',
                'entries' => Admin::where('last_login_at', '<', today()->subDays(30))
                    ->orwhere('last_login_at', null)
                    ->orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get(),
            ],
        ];

        $chart_settings = [
            'chart_title' => 'Users By Months',
            'chart_type' => 'line',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Admin',
            'group_by_field' => 'last_login_at',
            'group_by_period' => 'month',
            'aggregate_function' => 'count',
            'filter_field' => 'last_login_at',
            'column_class' => 'col-md-12',
            'entries_number' => '5',
        ];
        $chart = new LaravelChart($chart_settings);

        return view('admin.home', compact('number_blocks', 'list_blocks', 'chart'));
    }
}
