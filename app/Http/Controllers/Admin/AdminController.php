<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\View\View;
use App\Models\ExamCenter;
use App\Models\Advertisement;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('admin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admins = Admin::with(['roles'])->get();

        return view('admin.admins.index', compact('admins'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('admin_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::all()->pluck('advertisement_num', 'id');

        return view('admin.admins.create', compact(['roles', 'advertisements', 'examCenters']));
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('admin_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admin = Admin::create($request->all());

        $admin->roles()->sync($request->input('roles', []));

        $admin->advertisements()->sync($request->input('advertisements', []));

        return redirect()->route(route: 'admin.admin.index')
            ->with('message', 'Admin User created successfully.');
    }

    public function edit(Admin $admin): View
    {
        abort_if(Gate::denies('admin_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $admin->load(['roles', 'examCenter', 'advertisements']);

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::all()->pluck('advertisement_num', 'id');

        return view('admin.admins.edit', compact(['admin', 'roles', 'examCenters', 'advertisements']));
    }

    public function update(UpdateUserRequest $request, Admin $admin): RedirectResponse
    {
        abort_if(Gate::denies('admin_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admin->update($request->all());

        $admin->roles()->sync($request->input('roles', []));

        $admin->advertisements()->sync($request->input('advertisements', []));

        return redirect()->route(route: 'admin.admin.index')
            ->with('message', 'Admin User updated successfully.');
    }

    public function show(Admin $admin): View
    {
        abort_if(Gate::denies('admin_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admin->load(['roles', 'examCenter', 'advertisements']);

        return view('admin.admins.show', compact('admin'));
    }

    public function destroy(Admin $admin): RedirectResponse
    {
        abort_if(Gate::denies('admin_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $admin->delete();

        return back()->with('message', 'User deleted successfully.');
    }

    public function getAdvertisements($examCenterId): JsonResponse
    {
        $advertisements = Advertisement::where('exam_center_id', $examCenterId)->pluck('advertisement_num', 'id');

        return response()->json($advertisements);
    }
}
