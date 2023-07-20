<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use Illuminate\View\View;
use App\Models\Application;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index(): View
    {
        $applications = Application::with('advertisement', 'payments')->get();

        // dd($applications);

        return view('user.payments.index', compact('applications'));
    }
}
