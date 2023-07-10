<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUniversityRequest;
use App\Http\Requests\UpdateUniversityRequest;
use App\Models\University;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class UniversityController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('university_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $universities = University::all();

        return view('admin.universities.index', compact('universities'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.universities.create');
    }

    public function store(StoreUniversityRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('university_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        University::create($request->validated());

        return redirect()->route(route: 'admin.university.index')
            ->with('message', 'University created successfully.');
    }

    public function show(University $university): View
    {
        abort_if(Gate::denies('university_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.universities.show', compact('university'));
    }

    public function edit(University $university): View
    {
        abort_if(Gate::denies('university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.universities.edit', compact('university'));
    }

    public function update(UpdateUniversityRequest $request, University $university): RedirectResponse
    {
        abort_if(Gate::denies('university_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $university->update($request->validated());

        return redirect()->route(route: 'admin.university.index')
            ->with('message', 'University updated successfully.');
    }

    public function destroy(University $university): RedirectResponse
    {
        abort_if(Gate::denies('university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $university->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('university_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        University::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
