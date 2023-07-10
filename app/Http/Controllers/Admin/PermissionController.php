<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Models\Permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PermissionController extends Controller
{
    public function index(): View
    {
        $this->authorize(ability: 'index', arguments: Permission::class);

        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create(): View
    {
        $this->authorize(ability: 'create', arguments: Permission::class);

        return view('admin.permissions.create');
    }

    public function store(StorePermissionRequest $request): RedirectResponse
    {
        $this->authorize(ability: 'create', arguments: Permission::class);

        Permission::create($request->all());

        return redirect()->route(route: 'admin.permission.index')
            ->with('message', 'Permission created successfully.');
    }

    public function edit(Permission $permission): View
    {
        $this->authorize(ability: 'edit', arguments: Permission::class);

        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission): RedirectResponse
    {
        $this->authorize(ability: 'edit', arguments: Permission::class);

        $permission->update($request->all());

        return redirect()->route(route: 'admin.permission.index')
            ->with('message', 'Permission updated successfully.');
    }

    public function show(Permission $permission): View
    {
        $this->authorize(ability: 'view', arguments: Permission::class);

        return view('admin.permissions.show', compact('permission'));
    }

    public function destroy(Permission $permission): RedirectResponse
    {
        $this->authorize(ability: 'delete', arguments: Permission::class);

        $permission->delete();

        return back();
    }
}
