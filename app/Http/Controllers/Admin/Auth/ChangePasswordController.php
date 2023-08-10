<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdatePasswordRequest;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('admin.auth.passwords.edit');
    }

    public function update(UpdatePasswordRequest $request)
    {
        auth('admin')->user()->update($request->validated());

        return redirect()->route('admin.profile.password.edit')->with('message', __('global.change_password_success'));
    }
}
