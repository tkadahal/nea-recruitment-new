<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdatePersonalInfoRequest;
use App\Models\District;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function edit(User $user): View
    {
        $user->load(['gender', 'citizenshipDistrict']);

        $genders = Gender::all()->pluck('title', 'id');

        $citizenshipDistricts = District::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.users.edit', compact('user'));
    }

    public function update(UpdatePersonalInfoRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return redirect()->route('contactDetail');
    }
}
