<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExamCenterRequest;
use App\Http\Requests\UpdateExamCenterRequest;
use App\Models\ExamCenter;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ExamCenterController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('examCenter_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examCenters = ExamCenter::all();

        return view('admin.examCenters.index', compact('examCenters'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('examCenter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examCenters.create');
    }

    public function store(StoreExamCenterRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('examCenter_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ExamCenter::create($request->validated());

        return redirect()->route(route: 'admin.examCenter.index')
            ->with('message', 'ExamCenter created successfully.');
    }

    public function show(ExamCenter $examCenter): View
    {
        abort_if(Gate::denies('examCenter_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examCenters.show', compact('examCenter'));
    }

    public function edit(ExamCenter $examCenter): View
    {
        abort_if(Gate::denies('examCenter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.examCenters.edit', compact('examCenter'));
    }

    public function update(UpdateExamCenterRequest $request, ExamCenter $examCenter): RedirectResponse
    {
        abort_if(Gate::denies('examCenter_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examCenter->update($request->validated());

        return redirect()->route(route: 'admin.examCenter.index')
            ->with('message', 'ExamCenter updated successfully.');
    }

    public function destroy(ExamCenter $examCenter): RedirectResponse
    {
        abort_if(Gate::denies('examCenter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $examCenter->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('examCenter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ExamCenter::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
