<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQualificationRequest;
use App\Http\Requests\UpdateQualificationRequest;
use App\Models\Qualification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class QualificationController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('qualification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualifications = Qualification::all();

        return view('admin.qualifications.index', compact('qualifications'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualifications.create');
    }

    public function store(StoreQualificationRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('qualification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Qualification::create($request->validated());

        return redirect()->route(route: 'admin.qualification.index')
            ->with('message', 'Qualification created successfully.');
    }

    public function show(Qualification $qualification): View
    {
        abort_if(Gate::denies('qualification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualifications.show', compact('qualification'));
    }

    public function edit(Qualification $qualification): View
    {
        abort_if(Gate::denies('qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.qualifications.edit', compact('qualification'));
    }

    public function update(UpdateQualificationRequest $request, Qualification $qualification): RedirectResponse
    {
        abort_if(Gate::denies('qualification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualification->update($request->validated());

        return redirect()->route(route: 'admin.qualification.index')
            ->with('message', 'Qualification updated successfully.');
    }

    public function destroy(Qualification $qualification): RedirectResponse
    {
        abort_if(Gate::denies('qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $qualification->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('qualification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Qualification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
