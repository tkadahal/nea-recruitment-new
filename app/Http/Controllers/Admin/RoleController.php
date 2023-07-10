<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index(): View
    {
        $this->authorize(ability: 'index', arguments: Role::class);

        $roles = Role::with('permissions')->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create(): View
    {
        $this->authorize(ability: 'create', arguments: Role::class);

        $permissions = Permission::all()->pluck('title', 'id');

        return view('admin.roles.create', compact('permissions'));
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $this->authorize(ability: 'create', arguments: Role::class);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route(route: 'admin.role.index')
            ->with('message', 'Role created successfully.');
    }

    public function edit(Role $role): View
    {
        $this->authorize(ability: 'edit', arguments: Role::class);

        $permissions = Permission::all()->pluck('title', 'id');

        $role->load('permissions');

        return view('admin.roles.edit', compact('permissions', 'role'));
    }

    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $this->authorize(ability: 'edit', arguments: Role::class);

        $role->update($request->all());

        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route(route: 'admin.role.index')
            ->with('message', 'Role updated successfully.');
    }

    public function show(Role $role): View
    {
        $this->authorize(ability: 'view', arguments: Role::class);

        $role->load('permissions');

        return view('admin.roles.show', compact('role'));
    }

    public function destroy(Role $role): RedirectResponse
    {
        $this->authorize(ability: 'delete', arguments: Role::class);

        $role->delete();

        return back()->with('message', 'Role deleted successfully.');
    }
}
