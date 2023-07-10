<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Admin;
use App\Models\Advertisement;
use App\Models\ExamCenter;
use App\Models\Role;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        $this->authorize(ability: 'index', arguments: Admin::class);

        $admins = Admin::with(['roles'])->get();

        return view('admin.admins.index', compact('admins'));
    }

    public function create(): View
    {
        $this->authorize(ability: 'create', arguments: Admin::class);

        $roles = Role::all()->pluck('title', 'id');

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::all()->pluck('advertisement_num', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.admins.create', compact(['roles', 'advertisements', 'examCenters']));
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $this->authorize(ability: 'create', arguments: Admin::class);

        $admin = Admin::create($request->all());

        $admin->roles()->sync($request->input('roles', []));

        $admin->advertisements()->sync($request->input('advertisements', []));

        return redirect()->route(route: 'admin.admin.index')
            ->with('message', 'Admin User created successfully.');
    }

    public function edit(Admin $admin): View
    {
        $this->authorize(ability: 'edit', arguments: Admin::class);

        $roles = Role::all()->pluck('title', 'id');

        $admin->load(['roles', 'examCenter', 'advertisements']);

        $examCenters = ExamCenter::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $advertisements = Advertisement::all()->pluck('advertisement_num', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.admins.edit', compact(['admin', 'roles', 'examCenters', 'advertisements']));
    }

    public function update(UpdateUserRequest $request, Admin $admin): RedirectResponse
    {
        $this->authorize(ability: 'edit', arguments: Admin::class);

        $admin->update($request->all());

        $admin->roles()->sync($request->input('roles', []));

        $admin->advertisements()->sync($request->input('advertisements', []));

        return redirect()->route(route: 'admin.admin.index')
            ->with('message', 'Admin User updated successfully.');
    }

    public function show(Admin $admin): View
    {
        $this->authorize(ability: 'view', arguments: Admin::class);

        $admin->load(['roles', 'examCenter', 'advertisements']);

        return view('admin.admins.show', compact('admin'));
    }

    public function destroy(Admin $admin): RedirectResponse
    {
        $this->authorize(ability: 'delete', arguments: User::class);

        $admin->delete();

        return back()->with('message', 'User deleted successfully.');
    }

    public function getAdvertisements($examCenterId): JsonResponse
    {
        $advertisements = Advertisement::where('exam_center_id', $examCenterId)->pluck('advertisement_num', 'id');

        return response()->json($advertisements);
    }
}
