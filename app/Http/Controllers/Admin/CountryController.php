<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('country_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $countries = Country::all();

        return view('admin.countries.index', compact('countries'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('country_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.countries.create');
    }

    public function store(StoreCountryRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('country_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Country::create($request->validated());

        return redirect()->route(route: 'admin.country.index')
            ->with('message', 'Country created successfully.');
    }

    public function show(Country $country): View
    {
        abort_if(Gate::denies('country_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.countries.show', compact('country'));
    }

    public function edit(Country $country): View
    {
        abort_if(Gate::denies('country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.countries.edit', compact('country'));
    }

    public function update(UpdateCountryRequest $request, Country $country): RedirectResponse
    {
        abort_if(Gate::denies('country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $country->update($request->validated());

        return redirect()->route(route: 'admin.country.index')
            ->with('message', 'Country updated successfully.');
    }

    public function destroy(Country $country): RedirectResponse
    {
        abort_if(Gate::denies('country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $country->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('country_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Country::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
