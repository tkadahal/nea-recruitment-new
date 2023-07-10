<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StatusController extends Controller
{
    public function index(): View
    {
        $statuses = Status::all();

        return view('admin.statuses.index', compact('statuses'));
    }

    public function create(): View
    {
        return view('admin.statuses.create');
    }

    public function store(StoreStatusRequest $request): RedirectResponse
    {
        Status::create($request->validated());

        return redirect()->route('admin.status.index');
    }

    public function show(Status $status): View
    {
        return view('admin.statuses.show', compact('status'));
    }

    public function edit(Status $status)
    {
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(UpdateStatusRequest $request, Status $status): RedirectResponse
    {
        $status->update($request->validated());

        return redirect()->route('admin.status.index');
    }

    public function destroy(Status $status): RedirectResponse
    {
        $status->delete();

        return back();
    }
}
