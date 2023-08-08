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
        $perPage = 10;

        $payments = Payment::query()
            ->with('application.user', 'application.user.media', 'application.advertisement')
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            })
            ->where('payment_status', '1')
            ->whereHas('paymentVerification', function ($query) {
                $query->where('is_approved', true);
            })
            ->get();

        $chunks = $payments->chunk($perPage);

        $contentChunks = [];
        foreach ($chunks as $chunk) {
            $content = View::make('admin.pdfTemplates.printableExamCards', compact('chunk'))->render();
            $contentChunks[] = $content;
        }

        // $content = View::make('admin.pdfTemplates.printableExamCards', compact('payments'))->render();

        $javascript = '<script>window.onload = function() { window.print(); }</script>';

        $printableView = $content . $javascript;

        return $printableView;
    }
}
