<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupportRequest;
use App\Http\Requests\UpdateSupportRequest;
use App\Models\Support;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('support_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $supports = Support::all();

        return view('admin.supports.index', compact('supports'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('support_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supports.create');
    }

    public function store(StoreSupportRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('support_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $validatedInput = $request->validated();

        $validatedInput['admin_id'] = auth('admin')->id();

        // dd($validatedInput);

        Support::create($validatedInput);

        return redirect()->route(route: 'admin.support.index')
            ->with('message', 'Support created successfully.');
    }

    public function show(Support $support): View
    {
        abort_if(Gate::denies('support_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $support->load('user', 'admin');

        return view('admin.supports.show', compact('support'));
    }

    public function edit(Support $support): View
    {
        abort_if(Gate::denies('support_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.supports.edit', compact('support'));
    }

    public function update(UpdateSupportRequest $request, Support $support): RedirectResponse
    {
        abort_if(Gate::denies('support_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $support->update($request->validated());

        return redirect()->route(route: 'admin.support.index')
            ->with('message', 'Support updated successfully.');
    }

    public function destroy(Support $support): RedirectResponse
    {
        abort_if(Gate::denies('support_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $support->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('support_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Support::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
