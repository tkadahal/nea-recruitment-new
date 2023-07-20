<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StorePersonalRequest;
use App\Models\District;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonalController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();

        $genders = Gender::all()->pluck('title', 'id');

        $citizenshipDistricts = District::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $personal = $user->load(['gender', 'citizenshipDistrict']);

        return view('user.personal', compact('personal', 'genders', 'citizenshipDistricts'));
    }

    public function store(StorePersonalRequest $request): RedirectResponse
    {
        User::updateOrCreate(['id' => auth()->id()], $request->validated());

        return redirect()->route('contact');
    }
}
