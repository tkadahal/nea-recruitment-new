@extends('layouts.app')

@section('content')
    <div class="card-body {{ request()->routeIs('contact') ? 'active' : '' }}" id="contact">
        <form class="wizard-box" action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-section">
                <h3>
                    {{ trans('global.contact.title') }}
                </h3>

                <div class="p3">
                    <div class="row">
                        <div class="col">
                            <div class="card-section mt-3">
                                <h6>
                                    {{ trans('global.contact.category.fields.permanent') }}
                                </h6>
                                <div class="row mt-2">
                                    <p class="mb-0">
                                        <span style="color: #a307eb">
                                            {{ trans('global.contact.info.permanentInfo') }}
                                        </span>
                                    </p>
                                </div>
                                <div class="row g-1 m-0">

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('perma_province') ? 'has-error' : '' }}">
                                        <label class="required" for="perma_province">
                                            {{ trans('global.contact.fields.perma_province') }}
                                        </label>
                                        <select name="perma_province" id="perma_province" class="form-control select2">
                                            @foreach ($provinces as $id => $permaProvince)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->permaProvince ? $contact->permaProvince->id : old('perma_province')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $permaProvince }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('perma_province'))
                                            <p class="help-block">
                                                {{ $errors->first('perma_province') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.perma_province_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('perma_district') ? 'has-error' : '' }}">
                                        <label class="required" for="perma_district">
                                            {{ trans('global.contact.fields.perma_district') }}
                                        </label>
                                        <select name="perma_district" id="perma_district" class="form-control select2">
                                            @foreach ($districts as $id => $permaDistrict)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->permaDistrict ? $contact->permaDistrict->id : old('perma_district')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $permaDistrict }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('perma_district'))
                                            <p class="help-block">
                                                {{ $errors->first('perma_district') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.perma_district_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('perma_municipality') ? 'has-error' : '' }}">
                                        <label class="required" for="perma_municipality">
                                            {{ trans('global.contact.fields.perma_municipality') }}
                                        </label>
                                        <select name="perma_municipality" id="perma_municipality"
                                            class="form-control select2">
                                            @foreach ($municipalities as $id => $permaMunicipality)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->permaMunicipality
                                                        ? $contact->permaMunicipality->id
                                                        : old('perma_municipality')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $permaMunicipality }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('perma_municipality'))
                                            <p class="help-block">
                                                {{ $errors->first('perma_municipality') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.perma_municipality_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('perma_ward_number') ? 'has-error' : '' }}">
                                        <label class="required" for="perma_ward_number">
                                            {{ trans('global.contact.fields.perma_ward_number') }}
                                        </label>
                                        <input type="number" id="perma_ward_number" name="perma_ward_number"
                                            class="form-control" min="0"
                                            value="{{ old('perma_ward_number', isset($contact) ? $contact->perma_ward_number : '') }}">
                                        @if ($errors->has('perma_ward_number'))
                                            <p class="help-block">
                                                {{ $errors->first('perma_ward_number') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.perma_ward_number_helper') }}
                                        </p>
                                    </div>

                                    <div class="col-md-12 form-group {{ $errors->has('perma_tol') ? 'has-error' : '' }}">
                                        <label class="required" for="perma_tol">
                                            {{ trans('global.contact.fields.perma_tol') }}
                                        </label>
                                        <input type="text" id="perma_tol" name="perma_tol" class="form-control"
                                            value="{{ old('perma_tol', isset($contact) ? $contact->perma_tol : '') }}">
                                        @if ($errors->has('perma_tol'))
                                            <p class="help-block">
                                                {{ $errors->first('perma_tol') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.perma_tol_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card-section mt-3">
                                <h6>
                                    {{ trans('global.contact.category.fields.temporary') }}
                                </h6>
                                <div class="row mt-2">
                                    <div class="col">
                                        <input type="hidden" name="sameAsPermanent" value="0">
                                        <input type="checkbox" id="sameAsPermanent" name="sameAsPermanent" value="1"
                                            {{ old('sameAsPermanent', isset($contact) ? $contact->sameAsPermanent : null) ? 'checked' : '' }}>
                                        {{ trans('global.contact.fields.sameAsPermanent') }}
                                    </div>

                                </div>
                                <div class="row g-1 m-0">
                                    <div
                                        class="col-md-12 form-group {{ $errors->has('temp_province') ? 'has-error' : '' }}">
                                        <label class="required" for="temp_province">
                                            {{ trans('global.contact.fields.temp_province') }}
                                        </label>
                                        <select name="temp_province" id="temp_province" class="form-control select2">
                                            @foreach ($provinces as $id => $tempProvince)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->tempProvince ? $contact->tempProvince->id : old('temp_province')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $tempProvince }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('temp_province'))
                                            <p class="help-block">
                                                {{ $errors->first('temp_province') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.temp_province_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('temp_district') ? 'has-error' : '' }}">
                                        <label class="required" for="temp_district">
                                            {{ trans('global.contact.fields.temp_district') }}
                                        </label>
                                        <select name="temp_district" id="temp_district" class="form-control select2">
                                            @foreach ($districts as $id => $tempDistrict)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->tempDistrict ? $contact->tempDistrict->id : old('temp_district')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $tempDistrict }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('temp_district'))
                                            <p class="help-block">
                                                {{ $errors->first('temp_district') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.temp_district_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('temp_municipality') ? 'has-error' : '' }}">
                                        <label class="required" for="temp_municipality">
                                            {{ trans('global.contact.fields.temp_municipality') }}
                                        </label>
                                        <select name="temp_municipality" id="temp_municipality"
                                            class="form-control select2">
                                            @foreach ($municipalities as $id => $tempMunicipality)
                                                <option value="{{ $id }}"
                                                    {{ (isset($contact) && $contact->tempMunicipality
                                                        ? $contact->tempMunicipality->id
                                                        : old('temp_municipality')) == $id
                                                        ? 'selected'
                                                        : '' }}>
                                                    {{ $tempMunicipality }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('temp_municipality'))
                                            <p class="help-block">
                                                {{ $errors->first('temp_municipality') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.temp_municipality_helper') }}
                                        </p>
                                    </div>

                                    <div
                                        class="col-md-12 form-group {{ $errors->has('temp_ward_number') ? 'has-error' : '' }}">
                                        <label class="required" for="temp_ward_number">
                                            {{ trans('global.contact.fields.temp_ward_number') }}
                                        </label>
                                        <input type="number" id="temp_ward_number" name="temp_ward_number"
                                            class="form-control" min="0"
                                            min=value="{{ old('temp_ward_number', isset($contact) ? $contact->temp_ward_number : '') }}">
                                        @if ($errors->has('temp_ward_number'))
                                            <p class="help-block">
                                                {{ $errors->first('temp_ward_number') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.temp_ward_number_helper') }}
                                        </p>
                                    </div>

                                    <div class="col-md-12 form-group {{ $errors->has('temp_tol') ? 'has-error' : '' }}">
                                        <label class="required" for="temp_tol">
                                            {{ trans('global.contact.fields.temp_tol') }}
                                        </label>
                                        <input type="text" id="temp_tol" name="temp_tol" class="form-control"
                                            value="{{ old('temp_tol', isset($contact) ? $contact->temp_tol : '') }}">
                                        @if ($errors->has('temp_tol'))
                                            <p class="help-block">
                                                {{ $errors->first('temp_tol') }}
                                            </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.contact.fields.temp_tol_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-section">
                <h3>
                    {{ trans('global.contact.category.fields.contactPersonDetails') }}
                </h3>

                <div class="p3">
                    <div class="row g-2 m-3">
                        <div class="row mt-1">
                            <p class="mb-0">
                                <span style="color: #a307eb">
                                    {{ trans('global.contact.info.contactPersonInfo') }}
                                </span>
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('contact_person_name') ? 'has-error' : '' }}">
                                <label class="required" for="contact_person_name">
                                    {{ trans('global.contact.fields.contact_person_name') }}
                                </label>
                                <input type="text" id="contact_person_name" name="contact_person_name"
                                    class="form-control"
                                    value="{{ old('contact_person_name', isset($contact) ? $contact->contact_person_name : '') }}">
                                @if ($errors->has('contact_person_name'))
                                    <p class="help-block">
                                        {{ $errors->first('contact_person_name') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contact.fields.contact_person_name_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('contact_person_number') ? 'has-error' : '' }}">
                                <label class="required" for="contact_person_number">
                                    {{ trans('global.contact.fields.contact_person_number') }}
                                </label>
                                <input type="number" id="contact_person_number" name="contact_person_number"
                                    class="form-control" min="0"
                                    value="{{ old('contact_person_number', isset($contact) ? $contact->contact_person_number : '') }}">
                                @if ($errors->has('contact_person_number'))
                                    <p class="help-block">
                                        {{ $errors->first('contact_person_number') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contact.fields.contact_person_number_helper') }}
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
                                @if ($errors->has('father_name'))
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
                                <select name="father_country_id" id="father_country_id" class="form-control select2">
                                    @foreach ($countries as $id => $fatherCountry)
                                        <option value="{{ $id }}"
                                            {{ (isset($contact) && $contact->fatherCountry ? $contact->fatherCountry->id : old('father_country_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $fatherCountry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('father_country_id'))
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
                                @if ($errors->has('mother_name'))
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
                                <select name="mother_country_id" id="mother_country_id" class="form-control select2">
                                    @foreach ($countries as $id => $motherCountry)
                                        <option value="{{ $id }}"
                                            {{ (isset($contact) && $contact->motherCountry ? $contact->motherCountry->id : old('mother_country_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $motherCountry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('mother_country_id'))
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
                                <input type="text" id="grandfather_name" name="grandfather_name" class="form-control"
                                    value="{{ old('grandfather_name', isset($contact) ? $contact->grandfather_name : '') }}">
                                @if ($errors->has('grandfather_name'))
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
                                        <option value="{{ $id }}"
                                            {{ (isset($contact) && $contact->grandfatherCountry
                                                ? $contact->grandfatherCountry->id
                                                : old('grandfather_country_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $grandfatherCountry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('grandfather_country_id'))
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
                                    <i style="color: #a307eb">
                                        {{ trans('global.contact.info.spouseInfo') }}
                                    </i>
                                </label>

                                <input type="text" id="spouse_name" name="spouse_name" class="form-control"
                                    value="{{ old('spouse_name', isset($contact) ? $contact->spouse_name : '') }}">
                                @if ($errors->has('spouse_name'))
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
                                <select name="spouse_country_id" id="spouse_country_id" class="form-control select2">
                                    @foreach ($countries as $id => $spouseCountry)
                                        <option value="{{ $id }}"
                                            {{ (isset($contact) && $contact->spouseCountry ? $contact->spouseCountry->id : old('spouse_country_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $spouseCountry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('spouse_country_id'))
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
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#perma_province').on('change', function() {
                var permaProvinceId = $(this).val();
                if (permaProvinceId) {
                    $.ajax({
                        url: '/get-districts/' + permaProvinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#perma_district').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $('#perma_municipality').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#perma_district').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#perma_district').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $('#perma_municipality').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                }
            });

            $('#perma_district').on('change', function() {
                var permaDistrictId = $(this).val();
                if (permaDistrictId) {
                    $.ajax({
                        url: '/get-municipalities/' + permaDistrictId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#perma_municipality').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#perma_municipality').append('<option value="' +
                                    key +
                                    '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#perma_municipality').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                }
            });

            $('#temp_province').on('change', function() {
                var tempProvinceId = $(this).val();
                if (tempProvinceId) {
                    $.ajax({
                        url: '/get-districts/' + tempProvinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#temp_district').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $('#temp_municipality').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#temp_district').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#temp_district').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                    $('#temp_municipality').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                }
            });

            $('#temp_district').on('change', function() {
                var tempDistrictId = $(this).val();
                if (tempDistrictId) {
                    $.ajax({
                        url: '/get-municipalities/' + tempDistrictId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#temp_municipality').empty().append('<option value="">' +
                                "{{ trans('global.pleaseSelect') }}" + '</option>');
                            $.each(data, function(key, value) {
                                $('#temp_municipality').append('<option value="' +
                                    key +
                                    '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('#temp_municipality').empty().append('<option value="">' +
                        "{{ trans('global.pleaseSelect') }}" + '</option>');
                }
            });

            $('#sameAsPermanent').on('change', function() {
                if ($(this).is(':checked')) {
                    var permaProvince = $('#perma_province').val();
                    var permaDistrict = $('#perma_district').val();
                    var permaMunicipality = $('#perma_municipality').val();

                    if (permaProvince) {
                        $('#temp_province').empty().append('<option value="' + permaProvince + '">' +
                            $('#perma_province option:selected').text() + '</option>');
                    } else {
                        $('#temp_province').empty();
                    }

                    if (permaDistrict) {
                        $('#temp_district').empty().append('<option value="' + permaDistrict + '">' +
                            $('#perma_district option:selected').text() + '</option>');
                    } else {
                        $('#temp_district').empty();
                    }

                    if (permaMunicipality) {
                        $('#temp_municipality').empty().append('<option value="' + permaMunicipality +
                            '">' +
                            $('#perma_municipality option:selected').text() + '</option>');
                    } else {
                        $('#temp_municipality').empty();
                    }
                    $('#temp_ward_number').val($('#perma_ward_number').val());
                    $('#temp_tol').val($('#perma_tol').val());
                } else {
                    var provinces = {!! json_encode($provinces) !!};
                    $('#temp_province').empty().append('<option value="">Select Province</option>');
                    $.each(provinces, function(key, value) {
                        $('#temp_province').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    var districts = {!! json_encode($districts) !!};
                    $('#temp_district').empty().append('<option value="">Select District</option>');
                    $.each(districts, function(key, value) {
                        $('#temp_district').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    var municipalities = {!! json_encode($municipalities) !!};
                    $('#temp_municipality').empty().append('<option value="">Select Municipality</option>');
                    $.each(municipalities, function(key, value) {
                        $('#temp_municipality').append('<option value="' + key + '">' + value +
                            '</option>');
                    });
                    $('#temp_ward_number').val('');
                    $('#temp_tol').val('');
                }
            });
        });
    </script>
@endsection
