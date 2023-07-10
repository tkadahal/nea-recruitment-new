<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserTypeRequest;
use App\Http\Requests\UpdateUserTypeRequest;
use App\Models\UserType;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class UserTypeController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('userType_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userTypes = UserType::all();

        return view('admin.userTypes.index', compact('userTypes'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('userType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.create');
    }

    public function store(StoreUserTypeRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('userType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        UserType::create($request->validated());

        return redirect()->route(route: 'admin.userType.index')
            ->with('message', 'UserType created successfully.');
    }

    public function show(UserType $userType): View
    {
        abort_if(Gate::denies('userType_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.show', compact('userType'));
    }

    public function edit(UserType $userType): View
    {
        abort_if(Gate::denies('userType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.userTypes.edit', compact('userType'));
    }

    public function update(UpdateUserTypeRequest $request, UserType $userType): RedirectResponse
    {
        abort_if(Gate::denies('userType_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userType->update($request->validated());

        return redirect()->route(route: 'admin.userType.index')
            ->with('message', 'UserType updated successfully.');
    }

    public function destroy(UserType $userType): RedirectResponse
    {
        abort_if(Gate::denies('userType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $userType->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('userType_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        UserType::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
