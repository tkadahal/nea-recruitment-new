<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMediaTypeRequest;
use App\Http\Requests\UpdateMediaTypeRequest;
use App\Models\MediaType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class MediaTypeController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('mediaType_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaTypes = MediaType::all();

        return view('admin.mediaTypes.index', compact('mediaTypes'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('mediaType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaTypes.create');
    }

    public function store(StoreMediaTypeRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('mediaType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        MediaType::create($request->validated());

        return redirect()->route(route: 'admin.mediaType.index')
            ->with('message', 'MediaType created successfully.');
    }

    public function show(MediaType $mediaType): View
    {
        abort_if(Gate::denies('mediaType_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaTypes.show', compact('mediaType'));
    }

    public function edit(MediaType $mediaType): View
    {
        abort_if(Gate::denies('mediaType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mediaTypes.edit', compact('mediaType'));
    }

    public function update(UpdateMediaTypeRequest $request, MediaType $mediaType): RedirectResponse
    {
        abort_if(Gate::denies('mediaType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaType->update($request->validated());

        return redirect()->route(route: 'admin.mediaType.index')
            ->with('message', 'MediaType updated successfully.');
    }

    public function destroy(MediaType $mediaType): RedirectResponse
    {
        abort_if(Gate::denies('mediaType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mediaType->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('mediaType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        MediaType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
