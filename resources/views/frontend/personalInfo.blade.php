@extends('layouts.app')

@section('content')

<style>
    .choice-title {
        margin-left: 0.6rem;
        margin-bottom: 1.8rem;

        h4 {
            color: $text-color;
            font-weight: 500;
            letter-spacing: 2px;
            font-size: 1rem;
            margin-bottom: 6px;
            margin-left: 7px;
        }

        label {
            color: $change-color;
            padding: 9px 1rem 10px;
            border-radius: 8px;
            border: 1px solid $change-color;
            cursor: pointer;
            display: inline-block;
            letter-spacing: 2px;
            margin: 7px;
        }

        input[type="radio"] {
            display: none;
            transition: all 200ms ease-out;

            &:hover+label {
                opacity: 0.8;
                border: 1px solid $change-color;
                color: $change-color;
            }

            &:checked+label {
                background-color: $change-color;
                color: white;
            }
        }
    }

    .genericForm-group {
        width: 100%;
    }

    .inline-form-group {
        display: flex;
        flex-direction: row;
        align-items: center;
        max-width: 600px;
        width: 600px;
    }

    .badges {
        background: #dedede;
        color: #333232;
        padding: 0.25rem 1rem;
        height: 2rem;
        font-size: 13px;
        display: flex;
        align-items: center;
        cursor: default;
        border-radius: 20px;
        margin: 5px 0;
    }

    .badges.left-icon {
        padding: 0.25rem 1rem 0.25rem 0.25rem;
    }

    .mr-md {
        margin-right: 1.5rem !important;
    }

    .badges-primary {
        background: #2680eb;
        color: #f0f4f8;
    }

    .input-preview-container {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    @media (max-width: 767px) {
        .input-preview-container {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    .input-group {
        position: relative;
        float: left;

        .date-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            /* pointer-events: none; */
            cursor: pointer;
            color: #aaa;
        }
    }

    .custom-radio-buttons label {
        margin-right: 10px;
        /* Adjust the value to increase or decrease the spacing */
    }
</style>

<div class="card" id="personalDetail" style="background-color: #ffffff">

    <div class="card-body">
        <form class="form-horizontal" action="{{ route('personalDetail.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="card-section">
                <h3>
                    {{ trans('global.personalInfo.category.fields.personalDetails') }}
                </h3>

                <div class="p3">
                    <div class="row g-3 m-3">

                        <div class="form-row">
                            <div id="gender" validators="required" class="genericForm-group">
                                <div class="custom-radio-buttons" data-toggle="buttons">
                                    @foreach ($genders as $id => $title)
                                    <label
                                        class="btn btn-secondary{{ (old('gender_id')==$id) || (isset($personalInfo) && $personalInfo->gender_id == $id) ? ' active' : '' }}">
                                        <input class="radio-button" type="radio" name="gender_id" id="{{ $id }}"
                                            autocomplete="off" value="{{ $id }}" {{ (old('gender_id')==$id) ||
                                            (isset($personalInfo) && $personalInfo->gender_id == $id) ? 'checked' : ''
                                        }}>
                                        <i class="fas fa-sharp fa-solid fa-check-circle" style="color: #fff"></i>
                                        {{ $title }}
                                    </label>
                                    @endforeach
                                    @if($errors->has('gender_id'))
                                    <p class="help-block">
                                        {{ $errors->first('gender_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personalInfo.fields.gender_id_helper') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label class="required" for="name">
                                    {{ trans('global.personalInfo.fields.name') }}
                                </label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name', isset($personalInfo) ? $personalInfo->name : '') }}">
                                @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.name_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name_np') ? 'has-error' : '' }}">
                                <label class="required" for="name_np">
                                    {{ trans('global.personalInfo.fields.name_np') }}
                                </label>
                                <input type="text" id="name_np" name="name_np" class="form-control"
                                    value="{{ old('name_np', isset($personalInfo) ? $personalInfo->name_np : '') }}">
                                @if($errors->has('name_np'))
                                <p class="help-block">
                                    {{ $errors->first('name_np') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.name_np_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : '' }}">
                                <label class="required" for="mobile_number">
                                    {{ trans('global.personalInfo.fields.mobile_number') }}
                                </label>
                                <input type="number" id="mobile_number" name="mobile_number" class="form-control"
                                    value="{{ old('mobile_number', isset($personalInfo) ? $personalInfo->mobile_number : '') }}">
                                @if($errors->has('mobile_number'))
                                <p class="help-block">
                                    {{ $errors->first('mobile_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.mobile_number_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label class="required" for="email">
                                    {{ trans('global.personalInfo.fields.email') }}
                                </label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ old('email', isset($personalInfo) ? $personalInfo->email : '') }}">
                                @if($errors->has('email'))
                                <p class="help-block">
                                    {{ $errors->first('email') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.email_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('dob_np') ? 'has-error' : '' }}">
                                <label class="required" for="dob_np">
                                    {{ trans('global.personalInfo.fields.dob_np') }}
                                </label>
                                <div class="input-group">
                                    <input type="text" id="dob_np" name="dob_np" class="form-control"
                                        value="{{ old('dob_np', isset($personalInfo) ? $personalInfo->dob_np : '') }}">
                                    <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                @if($errors->has('dob_np'))
                                <p class="help-block">
                                    {{ $errors->first('dob_np') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.dob_np_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('dob_en') ? 'has-error' : '' }}">
                                <label class="required" for="dob_en">
                                    {{ trans('global.personalInfo.fields.dob_en') }}
                                </label>
                                <div class="input-group">
                                    <input type="text" id="dob_en" name="dob_en" class="form-control datepicker"
                                        value="{{ old('dob_en', isset($personalInfo) ? $personalInfo->dob_en : '') }}"
                                        autocomplete="off">
                                    <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                @if($errors->has('dob_en'))
                                <p class="help-block">
                                    {{ $errors->first('dob_en') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.dob_en_helper') }}
                                </p>
                            </div>
                            <br>
                            <i><span id="age" class="text-danger"></span></i>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                                <label class="required" for="photo">
                                    {{ trans('global.personalInfo.fields.photo') }}
                                </label>
                                <div class="input-group {{ $errors->has('photo') ? 'has-error' : ''}}">
                                    <span class="input-group-btn">
                                        <span class="btn btn-secondary btn-file" style="border-radius: 0%"
                                            style="position: relative; overflow: hidden; display: block">
                                            Browse… <input type="file" id="imgInp" name="photo"
                                                style="position: absolute; top: 0px; right: 0px; min-width: 100%; min-height: 100%; font-size: 100%; text-align: right; filter: alpha(opacity=0); opacity: 0; outline: none; background: white; cursor: inherit; display: block;">
                                        </span>
                                    </span>
                                    @if ($personalInfo->media->where('media_type_id', 1)->isNotEmpty())
                                    <input type="text"
                                        value="{{ $personalInfo->media->where('media_type_id', 1)->first()->file_name }}"
                                        name="photo1" id="photo1" class="form-control" readonly>
                                    @endif
                                </div>
                                @if ($errors->has('photo'))
                                <p class="help-block">
                                    {{ $errors->first('photo') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.photo_helper') }}
                                </p>
                            </div>
                            <div class="image-preview-container">
                                @if ($personalInfo->media->where('media_type_id', 1)->isNotEmpty())
                                {!! $personalInfo->media->where('media_type_id', 1)->first() !!}
                                @endif
                                <img id="preview1" style="max-width:100%; max-height:150px; margin-top:10px;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('sign') ? 'has-error' : '' }}">
                                <label class="required" for="sign">
                                    {{ trans('global.personalInfo.fields.sign') }}
                                </label>
                                <input type="file" class="form-control" id="sign" name="sign"
                                    value="{{ old('sign', isset($personalInfo) ? $personalInfo->sign : '') }}"
                                    style="display: block; border-color:#ccc"
                                    onchange="previewImage(event, 'preview2')">
                                @if ($errors->has('sign'))
                                <p class="help-block">
                                    {{ $errors->first('sign') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.sign_helper') }}
                                </p>
                            </div>
                            <div class="image-preview-container">
                                @if ($personalInfo->media->where('media_type_id', 2)->isNotEmpty())
                                {!! $personalInfo->media->where('media_type_id', 2)->first() !!}
                                @endif
                                <img id="preview2" style="max-width:100%; max-height:150px; margin-top:10px;">
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="card-section">
                <h3>
                    {{ trans('global.personalInfo.category.fields.citizenshipDetails') }}
                </h3>
                <div class="p3">
                    <div class="row g-3 m-3">

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('citizenship_number') ? 'has-error' : '' }}">
                                <label class="required" for="citizenship_number">
                                    {{ trans('global.personalInfo.fields.citizenship_number') }}
                                </label>
                                <input type="text" id="citizenship_number" name="citizenship_number"
                                    class="form-control"
                                    value="{{ old('citizenship_number', isset($personalInfo) ? $personalInfo->citizenship_number : '') }}">
                                @if($errors->has('citizenship_number'))
                                <p class="help-block">
                                    {{ $errors->first('citizenship_number') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.citizenship_number_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('citizenship_issued_date') ? 'has-error' : '' }}">
                                <label class="required" for="citizenship_issued_date">
                                    {{ trans('global.personalInfo.fields.citizenship_issued_date') }}
                                </label>
                                <div class="input-group">
                                    <input type="text" id="citizenship_issued_date" name="citizenship_issued_date"
                                        class="form-control nepali-calendar"
                                        value="{{ old('citizenship_issued_date', isset($personalInfo) ? $personalInfo->citizenship_issued_date : '') }}">
                                    <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                </div>
                                @if($errors->has('citizenship_issued_date'))
                                <p class="help-block">
                                    {{ $errors->first('citizenship_issued_date') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.citizenship_issued_date_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('citizenship_district_id') ? 'has-error' : '' }}">
                                <label class="required" for="citizenship_district_id">
                                    {{ trans('global.personalInfo.fields.citizenship_district_id') }}
                                </label>
                                <select name="citizenship_district_id" id="citizenship_district_id"
                                    class="form-control select2">
                                    @foreach ($citizenshipDistricts as $id => $citizenshipDistrict)
                                    <option value="{{ $id }}" {{ (isset($personalInfo) && $personalInfo->
                                        citizenshipDistrict
                                        ? $personalInfo->citizenshipDistrict->id
                                        : old('citizenship_district_id')) == $id
                                        ? 'selected'
                                        : '' }}>
                                        {{ $citizenshipDistrict }}
                                    </option>
                                    @endforeach
                                </select>
                                @if($errors->has('citizenship_district_id'))
                                <p class="help-block">
                                    {{ $errors->first('citizenship_district_id') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.citizenship_district_id_helper') }}
                                </p>
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group {{ $errors->has('citizenship_front') ? 'has-error' : '' }}">
                                <label class="required" for="citizenship_front">
                                    {{ trans('global.personalInfo.fields.citizenship_front') }}
                                </label>
                                <input type="file" class="form-control" id="citizenship_front" name="citizenship_front"
                                    value="{{ old('citizenship_front', isset($personalInfo) ? $personalInfo->citizenship_front : '') }}"
                                    style="display: block; border-color:#ccc"
                                    onchange="previewImage(event, 'preview3')">
                                @if ($errors->has('citizenship_front'))
                                <p class="help-block">
                                    {{ $errors->first('citizenship_front') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.citizenship_front_helper') }}
                                </p>
                            </div>
                            <div class="image-preview-container">
                                @if ($personalInfo->media->where('media_type_id', 3)->isNotEmpty())
                                {!! $personalInfo->media->where('media_type_id', 3)->first() !!}
                                @endif
                                <img id="preview3" style="max-width:100%; max-height:150px; margin-top:10px;">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('citizenship_back') ? 'has-error' : '' }}">
                                <label class="required" for="citizenship_back">
                                    {{ trans('global.personalInfo.fields.citizenship_back') }}
                                </label>
                                <input type="file" class="form-control" id="citizenship_back" name="citizenship_back"
                                    value="{{ old('citizenship_back', isset($personalInfo) ? $personalInfo->citizenship_back : '') }}"
                                    style="display: block; border-color:#ccc"
                                    onchange="previewImage(event, 'preview4')">
                                @if ($errors->has('citizenship_back'))
                                <p class="help-block">
                                    {{ $errors->first('citizenship_back') }}
                                </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.personalInfo.fields.citizenship_back_helper') }}
                                </p>
                            </div>
                            <div class="image-preview-container">
                                @if ($personalInfo->media->where('media_type_id', 4)->isNotEmpty())
                                {!! $personalInfo->media->where('media_type_id', 4)->first() !!}
                                @endif
                                <img id="preview4" style="max-width:100%; max-height:150px; margin-top:10px;">
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save & Next</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
        $('.nepali-calendar').nepaliDatePicker({
            ndpYear: true
            , ndpMonth: true
            , ndpYearCount: 100
        , });

        $('#dob_np').nepaliDatePicker({
            ndpYear: true
            , ndpMonth: true
            , ndpYearCount: 100
            , onChange: updateEquivalentAD
        });

        $('#dob_np').on('input', updateEquivalentAD);

        function updateEquivalentAD() {
            var selectedDate = $('#dob_np').val();
            var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
            $('#dob_en').val(equivalentAD);

            var dateOfBirth = equivalentAD; // Use equivalentAD instead of $('#dob_en').val()
            var age = calculateAge(dateOfBirth);
            var ageText = age.years + " years, " + age.months + " months, " + age.days + " days";
            $('#age').text(ageText);
        }

        $('#dob_en').datepicker({
            changeYear: true
            , changeMonth: true
            , dateFormat: "yy-mm-dd"
            , autoclose: true
            , maxDate: 'today'
            , yearRange: '-100:+0'
            , onSelect: function(dateText) {
                convertADtoBS(dateText);
            }
            , onClose: function(dateText) {
                convertADtoBS(dateText);
            }
        , });

        function convertADtoBS(dateText) {
            var selectedDate = new Date(dateText);
            var selectedDateAd = {
                year: selectedDate.getFullYear()
                , month: selectedDate.getMonth() + 1
                , day: selectedDate.getDate()
            , };

            var equivalentBS = NepaliFunctions.AD2BS(selectedDateAd);

            var year = equivalentBS.year;
            var month = equivalentBS.month;
            var day = equivalentBS.day;

            if (month < 10) month = '0' + month;
            if (day < 10) day = '0' + day;
            $('#dob_np').val([year, month, day].join('-'));

            var dateOfBirth = $('#dob_en').val();
            var age = calculateAge(dateOfBirth);
            var ageText = age.years + " years, " + age.months + " months, " + age.days + " days";
            $('#age').text(ageText);

        }

        var dateOfBirth = $('#dob_en').val();
        if (dateOfBirth) {
            var age = calculateAge(dateOfBirth);
            var ageText = age.years + " years, " + age.months + " months, " + age.days + " days";
            $('#age').text(ageText);
        }

        $('.radio-button').on('change', function() {
            $('label.btn').removeClass('active');
            $(this).closest('label.btn').addClass('active');
        });

        function calculateAge(dateOfBirth) {
            var today = new Date();
            var birthDate = new Date(dateOfBirth);

            var years = today.getFullYear() - birthDate.getFullYear();
            var months = today.getMonth() - birthDate.getMonth();
            var days = today.getDate() - birthDate.getDate();

            if (months < 0 || (months === 0 && days < 0)) {
                years--;
                months += 12;
            }

            if (days < 0) {
                var monthDays = new Date(today.getFullYear(), today.getMonth(), 0).getDate();
                days += monthDays;
                months--;
            }

            return {
                years: years
                , months: months
                , days: days
            };
        }

    });

    function previewImage(event, previewId) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById(previewId);
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    document.getElementById('nav-icon').addEventListener('click', function() {
        var navTabs = document.getElementById('myNav');
        navTabs.classList.toggle('show');
    });

    function updateFileName(event) {
        var input = event.target;
        var fileName = input.files[0].name;
        document.getElementById('file-name').textContent = fileName;
    }

</script>
@endsection

{{-- <script>
    function previewImage(event, previewId) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById(previewId);
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script> --}}