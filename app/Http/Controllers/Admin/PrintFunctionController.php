<?php

namespace App\Http\Controllers\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PrintFunctionController extends Controller
{
    public function printExamCards(Request $request, $advertisementId)
    {
        $payments = Payment::query()
            ->with(['application.user'])
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            })
            ->where('payment_status', '1')
            ->whereHas('paymentVerification', function ($query) {
                $query->where('is_approved', true);
            })
            ->get();

        $content = View::make('admin.pdfTemplates.printableExamCards', compact('payments', 'advertisementId'))->render();

        $javascript = '<script>window.onload = function() { window.print(); }</script>';

        $printableView = $content . $javascript;

        return $printableView;
    }
}
