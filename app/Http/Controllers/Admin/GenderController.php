<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGenderRequest;
use App\Http\Requests\UpdateGenderRequest;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class GenderController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('gender_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $genders = Gender::all();

        return view('admin.genders.index', compact('genders'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('gender_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.create');
    }

    public function store(StoreGenderRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('gender_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Gender::create($request->validated());

        return redirect()->route(route: 'admin.gender.index')
            ->with('message', 'Gender created successfully.');
    }

    public function show(Gender $gender): View
    {
        abort_if(Gate::denies('gender_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.show', compact('gender'));
    }

    public function edit(Gender $gender): View
    {
        abort_if(Gate::denies('gender_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.genders.edit', compact('gender'));
    }

    public function update(UpdateGenderRequest $request, Gender $gender): RedirectResponse
    {
        abort_if(Gate::denies('gender_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gender->update($request->validated());

        return redirect()->route(route: 'admin.gender.index')
            ->with('message', 'Gender updated successfully.');
    }

    public function destroy(Gender $gender): RedirectResponse
    {
        abort_if(Gate::denies('gender_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gender->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('gender_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Gender::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
