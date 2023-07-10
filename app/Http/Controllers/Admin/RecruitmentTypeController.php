<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecruitmentTypeRequest;
use App\Http\Requests\UpdateRecruitmentTypeRequest;
use App\Models\RecruitmentType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class RecruitmentTypeController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('recruitmentType_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recruitmentTypes = RecruitmentType::all();

        return view('admin.recruitmentTypes.index', compact('recruitmentTypes'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('recruitmentType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recruitmentTypes.create');
    }

    public function store(StoreRecruitmentTypeRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('recruitmentType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        RecruitmentType::create($request->validated());

        return redirect()->route(route: 'admin.recruitmentType.index')
            ->with('message', 'RecruitmentType created successfully.');
    }

    public function show(RecruitmentType $recruitmentType): View
    {
        abort_if(Gate::denies('recruitmentType_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recruitmentTypes.show', compact('recruitmentType'));
    }

    public function edit(RecruitmentType $recruitmentType): View
    {
        abort_if(Gate::denies('recruitmentType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.recruitmentTypes.edit', compact('recruitmentType'));
    }

    public function update(UpdateRecruitmentTypeRequest $request, RecruitmentType $recruitmentType): RedirectResponse
    {
        abort_if(Gate::denies('recruitmentType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recruitmentType->update($request->validated());

        return redirect()->route(route: 'admin.recruitmentType.index')
            ->with('message', 'RecruitmentType updated successfully.');
    }

    public function destroy(RecruitmentType $recruitmentType): RedirectResponse
    {
        abort_if(Gate::denies('recruitmentType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $recruitmentType->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('recruitmentType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        RecruitmentType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
