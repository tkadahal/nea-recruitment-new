@extends('layouts.app')

@section('content')

<div class="card" id="contact">
    <div class="card-body">
        <form class="form-horizontal" action="{{ route('contactDetail.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-section">
                <h3>
                    {{ trans('global.contactInfo.category.fields.AddressDetails') }}
                </h3>

                <div class="p3">
                    <div class="row g-3 m-3">

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
                                <label class="required" for="province_id">
                                    {{ trans('global.contactInfo.fields.province_id') }}
                                </label>
                                <select name="province_id" id="province_id" class="form-control select2">
                                    @foreach ($provinces as $id => $province)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->province
                                        ? $contactInfo->province->id
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
                                    {{ trans('global.contactInfo.fields.province_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
                                <label class="required" for="district_id">
                                    {{ trans('global.contactInfo.fields.district_id') }}
                                </label>
                                <select name="district_id" id="district_id" class="form-control select2">
                                    @foreach ($districts as $id => $district)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->district
                                        ? $contactInfo->district->id
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
                                    {{ trans('global.contactInfo.fields.district_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : '' }}">
                                <label class="required" for="municipality_id">
                                    {{ trans('global.contactInfo.fields.municipality_id') }}
                                </label>
                                <select name="municipality_id" id="municipality_id" class="form-control select2">
                                    @foreach ($municipalities as $id => $municipality)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->municipality
                                        ? $contactInfo->municipality->id
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
                                    {{ trans('global.contactInfo.fields.municipality_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('ward_number') ? 'has-error' : '' }}">
                                <label class="required" for="ward_number">
                                    {{ trans('global.contactInfo.fields.ward_number') }}
                                </label>
                                <input type="number" id="ward_number" name="ward_number" class="form-control"
                                    value="{{ old('ward_number', isset($contactInfo) ? $contactInfo->ward_number : '') }}">
                                @if($errors->has('ward_number'))
                                <p class="help-block">
                                    {{ $errors->first('ward_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.ward_number_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('tol') ? 'has-error' : '' }}">
                                <label class="required" for="tol">
                                    {{ trans('global.contactInfo.fields.tol') }}
                                </label>
                                <input type="text" id="tol" name="tol" class="form-control"
                                    value="{{ old('tol', isset($contactInfo) ? $contactInfo->tol : '') }}">
                                @if($errors->has('tol'))
                                <p class="help-block">
                                    {{ $errors->first('tol') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.tol_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                <label class="" for="phone_number">
                                    {{ trans('global.contactInfo.fields.phone_number') }}
                                </label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control"
                                    value="{{ old('phone_number', isset($contactInfo) ? $contactInfo->phone_number : '') }}">
                                @if($errors->has('phone_number'))
                                <p class="help-block">
                                    {{ $errors->first('phone_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.phone_number_helper') }}
                                </p>
                            </div>
                        </div>

                    </div>

                    {{--
                    <hr>

                    <div class="row g-3 p-3">
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('province_id') ? 'has-error' : '' }}">
                                <label class="required" for="province_id">
                                    {{ trans('global.contactInfo.fields.province_id') }}
                                </label>
                                <select name="province_id" id="province_id" class="form-control select2">
                                    @foreach ($provinces as $id => $province)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->province
                                        ? $contactInfo->province->id
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
                                    {{ trans('global.contactInfo.fields.province_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('district_id') ? 'has-error' : '' }}">
                                <label class="required" for="district_id">
                                    {{ trans('global.contactInfo.fields.district_id') }}
                                </label>
                                <select name="district_id" id="district_id" class="form-control select2">
                                    @foreach ($districts as $id => $district)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->district
                                        ? $contactInfo->district->id
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
                                    {{ trans('global.contactInfo.fields.district_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('municipality_id') ? 'has-error' : '' }}">
                                <label class="required" for="municipality_id">
                                    {{ trans('global.contactInfo.fields.municipality_id') }}
                                </label>
                                <select name="municipality_id" id="municipality_id" class="form-control select2">
                                    @foreach ($municipalities as $id => $municipality)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->municipality
                                        ? $contactInfo->municipality->id
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
                                    {{ trans('global.contactInfo.fields.municipality_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('tol') ? 'has-error' : '' }}">
                                <label class="required" for="tol">
                                    {{ trans('global.contactInfo.fields.tol') }}
                                </label>
                                <input type="text" id="tol" name="tol" class="form-control"
                                    value="{{ old('tol', isset($contactInfo) ? $contactInfo->tol : '') }}">
                                @if($errors->has('tol'))
                                <p class="help-block">
                                    {{ $errors->first('tol') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.tol_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('ward_number') ? 'has-error' : '' }}">
                                <label class="required" for="ward_number">
                                    {{ trans('global.contactInfo.fields.ward_number') }}
                                </label>
                                <input type="number" id="ward_number" name="ward_number" class="form-control"
                                    value="{{ old('ward_number', isset($contactInfo) ? $contactInfo->ward_number : '') }}">
                                @if($errors->has('ward_number'))
                                <p class="help-block">
                                    {{ $errors->first('ward_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.ward_number_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                <label class="required" for="phone_number">
                                    {{ trans('global.contactInfo.fields.phone_number') }}
                                </label>
                                <input type="text" id="phone_number" name="phone_number" class="form-control"
                                    value="{{ old('phone_number', isset($contactInfo) ? $contactInfo->phone_number : '') }}">
                                @if($errors->has('phone_number'))
                                <p class="help-block">
                                    {{ $errors->first('phone_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.phone_number_helper') }}
                                </p>
                            </div>
                        </div>
                    </div> --}}
                </div>

            </div>

            <div class="card-section">
                <h3>
                    {{ trans('global.contactInfo.category.fields.familyDetails') }}
                </h3>

                <div class="p3">
                    <div class="row g-2 m-3">

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('father_name') ? 'has-error' : '' }}">
                                <label class="required" for="father_name">
                                    {{ trans('global.contactInfo.fields.father_name') }}
                                </label>
                                <input type="text" id="father_name" name="father_name" class="form-control"
                                    value="{{ old('father_name', isset($contactInfo) ? $contactInfo->father_name : '') }}">
                                @if($errors->has('father_name'))
                                <p class="help-block">
                                    {{ $errors->first('father_name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.father_name_helper') }}
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-md-3">
                            <div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
                                <label class="required" for="country_id">
                                    {{ trans('global.contactInfo.fields.country_id') }}
                                </label>
                                <select name="country_id" id="country_id" class="form-control select2">
                                    @foreach ($countries as $id => $country)
                                    <option value="{{ $id }}" {{ (isset($contactInfo) && $contactInfo->country
                                        ? $contactInfo->country->id
                                        : old('country_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $country }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('country_id'))
                                <p class="help-block">
                                    {{ $errors->first('country_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.country_id_helper') }}
                                </p>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('mother_name') ? 'has-error' : '' }}">
                                <label class="required" for="mother_name">
                                    {{ trans('global.contactInfo.fields.mother_name') }}
                                </label>
                                <input type="text" id="mother_name" name="mother_name" class="form-control"
                                    value="{{ old('mother_name', isset($contactInfo) ? $contactInfo->mother_name : '') }}">
                                @if($errors->has('mother_name'))
                                <p class="help-block">
                                    {{ $errors->first('mother_name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.mother_name_helper') }}
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-md-3">
                            <div class="form-group {{ $errors->has('mother_citizenship') ? 'has-error' : '' }}">
                                <label class="required" for="mother_citizenship">
                                    {{ trans('global.contactInfo.fields.mother_citizenship') }}
                                </label>
                                <input type="text" id="mother_citizenship" name="mother_citizenship"
                                    class="form-control"
                                    value="{{ old('mother_citizenship', isset($contactInfo) ? $contactInfo->mother_citizenship : '') }}">
                                @if($errors->has('mother_citizenship'))
                                <p class="help-block">
                                    {{ $errors->first('mother_citizenship') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.mother_citizenship_helper') }}
                                </p>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('grandfather_name') ? 'has-error' : '' }}">
                                <label class="required" for="grandfather_name">
                                    {{ trans('global.contactInfo.fields.grandfather_name') }}
                                </label>
                                <input type="text" id="grandfather_name" name="grandfather_name" class="form-control"
                                    value="{{ old('grandfather_name', isset($contactInfo) ? $contactInfo->grandfather_name : '') }}">
                                @if($errors->has('grandfather_name'))
                                <p class="help-block">
                                    {{ $errors->first('grandfather_name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.grandfather_name_helper') }}
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-md-3">
                            <div class="form-group {{ $errors->has('grandfather_citizenship') ? 'has-error' : '' }}">
                                <label class="required" for="grandfather_citizenship">
                                    {{ trans('global.contactInfo.fields.grandfather_citizenship') }}
                                </label>
                                <input type="text" id="grandfather_citizenship" name="grandfather_citizenship"
                                    class="form-control"
                                    value="{{ old('grandfather_citizenship', isset($contactInfo) ? $contactInfo->grandfather_citizenship : '') }}">
                                @if($errors->has('grandfather_citizenship'))
                                <p class="help-block">
                                    {{ $errors->first('grandfather_citizenship') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.grandfather_citizenship_helper') }}
                                </p>
                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('spouse_name') ? 'has-error' : '' }}">
                                <label class="" for="spouse_name">
                                    {{ trans('global.contactInfo.fields.spouse_name') }}
                                    <i class="text-danger">{{ trans('global.contactInfo.info.spouseInfo') }}</i>
                                </label>

                                <input type="text" id="spouse_name" name="spouse_name" class="form-control"
                                    value="{{ old('spouse_name', isset($contactInfo) ? $contactInfo->spouse_name : '') }}">
                                @if($errors->has('spouse_name'))
                                <p class="help-block">
                                    {{ $errors->first('spouse_name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.spouse_name_helper') }}
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-md-3">
                            <div class="form-group {{ $errors->has('spouse_citizenship') ? 'has-error' : '' }}">
                                <label class="required" for="spouse_citizenship">
                                    {{ trans('global.contactInfo.fields.spouse_citizenship') }}
                                </label>
                                <input type="text" id="spouse_citizenship" name="spouse_citizenship"
                                    class="form-control"
                                    value="{{ old('spouse_citizenship', isset($contactInfo) ? $contactInfo->spouse_citizenship : '') }}">
                                @if($errors->has('spouse_citizenship'))
                                <p class="help-block">
                                    {{ $errors->first('spouse_citizenship') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.contactInfo.fields.spouse_citizenship_helper') }}
                                </p>
                            </div>
                        </div> --}}

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-secondary" href="{{ route('personalDetail') }}">
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