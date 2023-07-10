<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $admin = auth('admin')->user();

        if (! app()->runningInConsole() && $admin) {
            $roles = Role::with('permissions')->get();
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }

            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (Admin $admin) use ($roles) {
                    return count(array_intersect($admin->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }

        return $next($request);
    }
}
