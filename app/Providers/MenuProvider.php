<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Advertisement;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // View::composer('admin.partials.menu', function ($view) {
        //     $isAdmin = auth('admin')->user()->roles->contains('id', 1);
        //     $adminId = auth('admin')->id();

        //     if ($isAdmin) {
        //         // Admin has role 1, so retrieve all advertisements
        //         $advertisements = Advertisement::all();
        //     } else {
        //         // Admin does not have role 1, filter advertisements based on the relationship
        //         $advertisements = Advertisement::whereHas('admins', function ($query) use ($adminId) {
        //             $query->where('admin_id', $adminId);
        //         })->get();
        //     }

        //     $view->with('adminId', $adminId);
        //     $view->with('advertisements', $advertisements);
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
