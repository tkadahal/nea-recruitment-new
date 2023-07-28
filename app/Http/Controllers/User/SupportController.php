<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupportRequest;
use App\Models\Support;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SupportController extends Controller
{
    public function index(): View
    {
        $user_id = auth()->id();

        $supports = Support::where(function ($query) use ($user_id) {
            $query->whereNull('user_id')
                ->orWhere('user_id', $user_id);
        })
            ->active()
            ->latest()
            ->get();

        return view('user.supports.index', compact('supports'));
    }

    public function store(StoreSupportRequest $request): RedirectResponse
    {
        Support::create($request->validated());

        return redirect()->back()->with('message', 'Query Successfully Posted');
    }
}
