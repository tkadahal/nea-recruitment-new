@extends('user.home')

@section('content')

<div role="tabpanel" class="tab-pane {{ request()->routeIs('contact') ? 'active' : '' }}" id="contact">

    <div class="card">
        <div class="card-body">
            <form class="wizard-box" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-section">
                    <h3>
                        {{ trans('global.contact.category.fields.AddressDetails') }}
                    </h3>

                    <div class="p3">
                        <div class="row g-3 m-3">

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
                                    <label class="required" for="province_id">
                                        {{ trans('global.contact.fields.province_id') }}
                                    </label>
                                    <select name="province_id" id="province_id" class="form-control select2">
                                        @foreach ($provinces as $id => $province)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->province
                                            ? $contact->province->id
                                            : old('province_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $province }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('province_id'))
                                    <p class="help-block">
                                        {{ $errors->first('province_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.province_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
                                    <label class="required" for="district_id">
                                        {{ trans('global.contact.fields.district_id') }}
                                    </label>
                                    <select name="district_id" id="district_id" class="form-control select2">
                                        @foreach ($districts as $id => $district)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->district
                                            ? $contact->district->id
                                            : old('district_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $district }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('district_id'))
                                    <p class="help-block">
                                        {{ $errors->first('district_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.district_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : '' }}">
                                    <label class="required" for="municipality_id">
                                        {{ trans('global.contact.fields.municipality_id') }}
                                    </label>
                                    <select name="municipality_id" id="municipality_id" class="form-control select2">
                                        @foreach ($municipalities as $id => $municipality)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->municipality
                                            ? $contact->municipality->id
                                            : old('municipality_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $municipality }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('municipality_id'))
                                    <p class="help-block">
                                        {{ $errors->first('municipality_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.municipality_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('ward_number') ? 'has-error' : '' }}">
                                    <label class="required" for="ward_number">
                                        {{ trans('global.contact.fields.ward_number') }}
                                    </label>
                                    <input type="number" id="ward_number" name="ward_number" class="form-control"
                                        value="{{ old('ward_number', isset($contact) ? $contact->ward_number : '') }}">
                                    @if($errors->has('ward_number'))
                                    <p class="help-block">
                                        {{ $errors->first('ward_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.ward_number_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('tol') ? 'has-error' : '' }}">
                                    <label class="required" for="tol">
                                        {{ trans('global.contact.fields.tol') }}
                                    </label>
                                    <input type="text" id="tol" name="tol" class="form-control"
                                        value="{{ old('tol', isset($contact) ? $contact->tol : '') }}">
                                    @if($errors->has('tol'))
                                    <p class="help-block">
                                        {{ $errors->first('tol') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.tol_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                    <label class="" for="phone_number">
                                        {{ trans('global.contact.fields.phone_number') }}
                                    </label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        value="{{ old('phone_number', isset($contact) ? $contact->phone_number : '') }}">
                                    @if($errors->has('phone_number'))
                                    <p class="help-block">
                                        {{ $errors->first('phone_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.phone_number_helper') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="row g-3 p-3">
                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
                                    <label class="required" for="province_id">
                                        {{ trans('global.contact.fields.province_id') }}
                                    </label>
                                    <select name="province_id" id="province_id" class="form-control select2">
                                        @foreach ($provinces as $id => $province)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->province
                                            ? $contact->province->id
                                            : old('province_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $province }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('province_id'))
                                    <p class="help-block">
                                        {{ $errors->first('province_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.province_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
                                    <label class="required" for="district_id">
                                        {{ trans('global.contact.fields.district_id') }}
                                    </label>
                                    <select name="district_id" id="district_id" class="form-control select2">
                                        @foreach ($districts as $id => $district)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->district
                                            ? $contact->district->id
                                            : old('district_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $district }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('district_id'))
                                    <p class="help-block">
                                        {{ $errors->first('district_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.district_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : '' }}">
                                    <label class="required" for="municipality_id">
                                        {{ trans('global.contact.fields.municipality_id') }}
                                    </label>
                                    <select name="municipality_id" id="municipality_id" class="form-control select2">
                                        @foreach ($municipalities as $id => $municipality)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->municipality
                                            ? $contact->municipality->id
                                            : old('municipality_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $municipality }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('municipality_id'))
                                    <p class="help-block">
                                        {{ $errors->first('municipality_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.municipality_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('tol') ? 'has-error' : '' }}">
                                    <label class="required" for="tol">
                                        {{ trans('global.contact.fields.tol') }}
                                    </label>
                                    <input type="text" id="tol" name="tol" class="form-control"
                                        value="{{ old('tol', isset($contact) ? $contact->tol : '') }}">
                                    @if($errors->has('tol'))
                                    <p class="help-block">
                                        {{ $errors->first('tol') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.tol_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('ward_number') ? 'has-error' : '' }}">
                                    <label class="required" for="ward_number">
                                        {{ trans('global.contact.fields.ward_number') }}
                                    </label>
                                    <input type="number" id="ward_number" name="ward_number" class="form-control"
                                        value="{{ old('ward_number', isset($contact) ? $contact->ward_number : '') }}">
                                    @if($errors->has('ward_number'))
                                    <p class="help-block">
                                        {{ $errors->first('ward_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.ward_number_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                    <label class="required" for="phone_number">
                                        {{ trans('global.contact.fields.phone_number') }}
                                    </label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control"
                                        value="{{ old('phone_number', isset($contact) ? $contact->phone_number : '') }}">
                                    @if($errors->has('phone_number'))
                                    <p class="help-block">
                                        {{ $errors->first('phone_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.phone_number_helper') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card-section">
                    <h3>
                        {{ trans('global.contact.category.fields.familyDetails') }}
                    </h3>

                    <div class="p3">
                        <div class="row g-2 m-3">

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('father_name') ? 'has-error' : '' }}">
                                    <label class="required" for="father_name">
                                        {{ trans('global.contact.fields.father_name') }}
                                    </label>
                                    <input type="text" id="father_name" name="father_name" class="form-control"
                                        value="{{ old('father_name', isset($contact) ? $contact->father_name : '') }}">
                                    @if($errors->has('father_name'))
                                    <p class="help-block">
                                        {{ $errors->first('father_name') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.father_name_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('father_country_id') ? 'has-error' : '' }}">
                                    <label class="required" for="father_country_id">
                                        {{ trans('global.contact.fields.father_country_id') }}
                                    </label>
                                    <select name="father_country_id" id="father_country_id"
                                        class="form-control select2">
                                        @foreach ($countries as $id => $fatherCountry)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->
                                            fatherCountry
                                            ? $contact->fatherCountry->id
                                            : old('father_country_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $fatherCountry }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('father_country_id'))
                                    <p class="help-block">
                                        {{ $errors->first('father_country_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.father_country_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('mother_name') ? 'has-error' : '' }}">
                                    <label class="required" for="mother_name">
                                        {{ trans('global.contact.fields.mother_name') }}
                                    </label>
                                    <input type="text" id="mother_name" name="mother_name" class="form-control"
                                        value="{{ old('mother_name', isset($contact) ? $contact->mother_name : '') }}">
                                    @if($errors->has('mother_name'))
                                    <p class="help-block">
                                        {{ $errors->first('mother_name') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.mother_name_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('mother_country_id') ? 'has-error' : '' }}">
                                    <label class="required" for="mother_country_id">
                                        {{ trans('global.contact.fields.mother_country_id') }}
                                    </label>
                                    <select name="mother_country_id" id="mother_country_id"
                                        class="form-control select2">
                                        @foreach ($countries as $id => $motherCountry)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->motherCountry
                                            ? $contact->motherCountry->id
                                            : old('mother_country_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $motherCountry }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('mother_country_id'))
                                    <p class="help-block">
                                        {{ $errors->first('mother_country_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.mother_country_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('grandfather_name') ? 'has-error' : '' }}">
                                    <label class="required" for="grandfather_name">
                                        {{ trans('global.contact.fields.grandfather_name') }}
                                    </label>
                                    <input type="text" id="grandfather_name" name="grandfather_name"
                                        class="form-control"
                                        value="{{ old('grandfather_name', isset($contact) ? $contact->grandfather_name : '') }}">
                                    @if($errors->has('grandfather_name'))
                                    <p class="help-block">
                                        {{ $errors->first('grandfather_name') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.grandfather_name_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('grandfather_country_id') ? 'has-error' : '' }}">
                                    <label class="required" for="grandfather_country_id">
                                        {{ trans('global.contact.fields.grandfather_country_id') }}
                                    </label>
                                    <select name="grandfather_country_id" id="grandfather_country_id"
                                        class="form-control select2">
                                        @foreach ($countries as $id => $grandfatherCountry)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->
                                            grandfatherCountry
                                            ? $contact->grandfatherCountry->id
                                            : old('grandfather_country_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $grandfatherCountry }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('grandfather_country_id'))
                                    <p class="help-block">
                                        {{ $errors->first('grandfather_country_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.grandfather_country_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('spouse_name') ? 'has-error' : '' }}">
                                    <label class="" for="spouse_name">
                                        {{ trans('global.contact.fields.spouse_name') }}
                                        <i class="text-success">{{ trans('global.contact.info.spouseInfo') }}</i>
                                    </label>

                                    <input type="text" id="spouse_name" name="spouse_name" class="form-control"
                                        value="{{ old('spouse_name', isset($contact) ? $contact->spouse_name : '') }}">
                                    @if($errors->has('spouse_name'))
                                    <p class="help-block">
                                        {{ $errors->first('spouse_name') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.spouse_name_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group {{ $errors->has('spouse_country_id') ? 'has-error' : '' }}">
                                    <label class="" for="spouse_country_id">
                                        {{ trans('global.contact.fields.spouse_country_id') }}
                                    </label>
                                    <select name="spouse_country_id" id="spouse_country_id"
                                        class="form-control select2">
                                        @foreach ($countries as $id => $spouseCountry)
                                        <option value="{{ $id }}" {{ (isset($contact) && $contact->
                                            spouseCountry
                                            ? $contact->spouseCountry->id
                                            : old('spouse_country_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $spouseCountry }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('spouse_country_id'))
                                    <p class="help-block">
                                        {{ $errors->first('spouse_country_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.contact.fields.spouse_country_id_helper') }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-secondary" href="{{ route('personal') }}">
                            Go Back
                        </a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Save & Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
    $('#province_id').on('change', function() {
        var provinceId = $(this).val();
        if (provinceId) {
            $.ajax({
                url: '/get-districts/' + provinceId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#district_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $('#municipality_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $.each(data, function(key, value) {
                        $('#district_id').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#district_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
            $('#municipality_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
        }
    });

    $('#district_id').on('change', function() {
        var districtId = $(this).val();
        if (districtId) {
            $.ajax({
                url: '/get-municipalities/' + districtId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#municipality_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $.each(data, function(key, value) {
                        $('#municipality_id').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#municipality_id').empty().append('<option value="">' + "{{ trans('global.pleaseSelect') }}" + '</option>');
        }
    });
});
</script>
@endsection