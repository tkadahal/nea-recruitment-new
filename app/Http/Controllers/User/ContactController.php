<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreContactRequest;
use App\Models\Contact;
use App\Models\Country;
use App\Models\District;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $user_id = auth()->id();

        $contact = Contact::with([
            'permaProvince',
            'tempProvince',
            'permaDistrict',
            'tempDistrict',
            'permaMunicipality',
            'tempMunicipality',
            'fatherCountry',
            'motherCountry',
            'grandfatherCountry',
            'spouseCountry',
        ])->where('user_id', $user_id)->first();

        $provinces = Province::active()->get()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
        $districts = District::active()->get()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
        $municipalities = Municipality::active()->get()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');
        $countries = Country::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('user.contact', compact('contact', 'provinces', 'districts', 'municipalities', 'countries'));
    }

    public function store(StoreContactRequest $request): RedirectResponse
    {
        Contact::updateOrCreate(['user_id' => auth()->id()], $request->validated());

        return redirect()->route('education.index')->with('message', 'Data Updated Successfully');
    }

    public function getDistricts($provinceId): JsonResponse
    {
        $districts = District::where('province_id', $provinceId)->pluck('title', 'id');

        return response()->json($districts);
    }

    public function getMunicipalities($districtId): JsonResponse
    {
        $municipalities = Municipality::where('district_id', $districtId)->pluck('title', 'id');

        return response()->json($municipalities);
    }
}
