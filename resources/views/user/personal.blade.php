@extends('user.home')

@section('content')

<div role="tabpanel" class="tab-pane {{ request()->routeIs('personal') ? 'active' : '' }}" id="personal">
    <div class="card">

        <div class="card-body">
            <form class="wizard-box" action="{{ route('personal.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-section">
                    <h3>
                        {{ trans('global.personal.category.fields.personalDetails') }}
                    </h3>

                    <div class="p3">
                        <div class="row g-3 m-3">

                            <div class="col-md-6">
                                <div id="gender" validators="required" class="genericForm-group">
                                    <div class="custom-radio-buttons" data-toggle="buttons">
                                        @foreach ($genders as $id => $title)
                                        <label
                                            class="btn btn-secondary{{ old('gender_id') == $id || (isset($personal) && $personal->gender_id == $id) ? ' active' : '' }}">
                                            <input class="radio-button" type="radio" name="gender_id" id="{{ $id }}"
                                                autocomplete="off" value="{{ $id }}" {{ old('gender_id')==$id ||
                                                (isset($personal) && $personal->gender_id == $id) ? 'checked' :
                                            '' }}>
                                            <i class="fas fa-sharp fa-solid fa-check-circle" style="color: #fff"></i>
                                            {{ $title }}
                                        </label>
                                        @endforeach
                                        @if ($errors->has('gender_id'))
                                        <p class="help-block">
                                            {{ $errors->first('gender_id') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.personal.fields.gender_id_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('sanket_num') ? 'has-error' : '' }}">
                                    <label class="" for="sanket_num">
                                        {{ trans('global.personal.fields.sanket_num') }}
                                        <i class="text-success">
                                            (प्राधिकरणमा कार्यरत कर्मचारीलाई मात्र)
                                        </i>
                                    </label>
                                    <input type="text" id="sanket_num" name="sanket_num" class="form-control"
                                        value="{{ old('sanket_num', isset($personal) ? $personal->sanket_num : '') }}">
                                    @if ($errors->has('sanket_num'))
                                    <p class="help-block">
                                        {{ $errors->first('sanket_num') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.sanket_num_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <label class="required" for="name">
                                        {{ trans('global.personal.fields.name') }}
                                    </label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name', isset($personal) ? $personal->name : '') }}">
                                    @if ($errors->has('name'))
                                    <p class="help-block">
                                        {{ $errors->first('name') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.name_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name_np') ? 'has-error' : '' }}">
                                    <label class="required" for="name_np">
                                        {{ trans('global.personal.fields.name_np') }}
                                    </label>
                                    <input type="text" id="name_np" name="name_np" class="form-control"
                                        value="{{ old('name_np', isset($personal) ? $personal->name_np : '') }}">
                                    @if ($errors->has('name_np'))
                                    <p class="help-block">
                                        {{ $errors->first('name_np') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.name_np_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('mobile_number') ? 'has-error' : '' }}">
                                    <label class="required" for="mobile_number">
                                        {{ trans('global.personal.fields.mobile_number') }}
                                    </label>
                                    <input type="number" id="mobile_number" name="mobile_number" class="form-control"
                                        value="{{ old('mobile_number', isset($personal) ? $personal->mobile_number : '') }}">
                                    @if ($errors->has('mobile_number'))
                                    <p class="help-block">
                                        {{ $errors->first('mobile_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.mobile_number_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label class="required" for="email">
                                        {{ trans('global.personal.fields.email') }}
                                    </label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ old('email', isset($personal) ? $personal->email : '') }}">
                                    @if ($errors->has('email'))
                                    <p class="help-block">
                                        {{ $errors->first('email') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.email_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('dob_np') ? 'has-error' : '' }}">
                                    <label class="required" for="dob_np">
                                        {{ trans('global.personal.fields.dob_np') }}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" id="dob_np" name="dob_np" class="form-control"
                                            value="{{ old('dob_np', isset($personal) ? $personal->dob_np : '') }}"
                                            autocomplete="off" placeholder="YYYY-MM-DD">
                                        <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    @if ($errors->has('dob_np'))
                                    <p class="help-block">
                                        {{ $errors->first('dob_np') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.dob_np_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('dob_en') ? 'has-error' : '' }}">
                                    <label class="required" for="dob_en">
                                        {{ trans('global.personal.fields.dob_en') }}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" id="dob_en" name="dob_en" class="form-control datepicker"
                                            value="{{ old('dob_en', isset($personal) ? $personal->dob_en : '') }}"
                                            autocomplete="off" placeholder="YYYY-MM-DD">
                                        <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    @if ($errors->has('dob_en'))
                                    <p class="help-block">
                                        {{ $errors->first('dob_en') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.dob_en_helper') }}
                                    </p>
                                </div>
                                <i><span id="age" class="text-primary"></span></i>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="is_handicapped"
                                        name="is_handicapped" style="border: var(--bs-border-width) solid #0d0d0d;" {{
                                        (old('is_handicapped') || (isset($personal) && $personal->is_handicapped)) ?
                                    'checked' : '' }}>
                                    <input type="hidden" name="is_handicapped" value="0">
                                    <label class="form-check-label" for="is_handicapped">
                                        {{ trans('global.personal.fields.is_handicapped') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section">
                    <h3>
                        {{ trans('global.personal.category.fields.citizenshipDetails') }}
                    </h3>
                    <div class="p3">
                        <div class="row g-3 m-3">

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('citizenship_number') ? 'has-error' : '' }}">
                                    <label class="required" for="citizenship_number">
                                        {{ trans('global.personal.fields.citizenship_number') }}
                                    </label>
                                    <input type="text" id="citizenship_number" name="citizenship_number"
                                        class="form-control"
                                        value="{{ old('citizenship_number', isset($personal) ? $personal->citizenship_number : '') }}">
                                    @if ($errors->has('citizenship_number'))
                                    <p class="help-block">
                                        {{ $errors->first('citizenship_number') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.citizenship_number_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div
                                    class="form-group {{ $errors->has('citizenship_issued_date') ? 'has-error' : '' }}">
                                    <label class="required" for="citizenship_issued_date">
                                        {{ trans('global.personal.fields.citizenship_issued_date') }}
                                    </label>
                                    <div class="input-group">
                                        <input type="text" id="citizenship_issued_date" name="citizenship_issued_date"
                                            class="form-control nepali-calendar"
                                            value="{{ old('citizenship_issued_date', isset($personal) ? $personal->citizenship_issued_date : '') }}"
                                            autocomplete="off" placeholder="YYYY-MM-DD">
                                        <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    @if ($errors->has('citizenship_issued_date'))
                                    <p class="help-block">
                                        {{ $errors->first('citizenship_issued_date') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.citizenship_issued_date_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div
                                    class="form-group {{ $errors->has('citizenship_district_id') ? 'has-error' : '' }}">
                                    <label class="required" for="citizenship_district_id">
                                        {{ trans('global.personal.fields.citizenship_district_id') }}
                                    </label>
                                    <select name="citizenship_district_id" id="citizenship_district_id"
                                        class="form-control select2">
                                        @foreach ($citizenshipDistricts as $id => $citizenshipDistrict)
                                        <option value="{{ $id }}" {{ (isset($personal) && $personal->
                                            citizenshipDistrict
                                            ? $personal->citizenshipDistrict->id
                                            : old('citizenship_district_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $citizenshipDistrict }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('citizenship_district_id'))
                                    <p class="help-block">
                                        {{ $errors->first('citizenship_district_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.personal.fields.citizenship_district_id_helper') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save & Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
            var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');

            $('.nepali-calendar').nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                disableAfter: current_nepali_date
            });

            $('#dob_np').nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                onChange: updateEquivalentAD,
                disableAfter: current_nepali_date
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
                changeYear: true,
                changeMonth: true,
                dateFormat: "yy-mm-dd",
                autoclose: true,
                maxDate: 'today',
                yearRange: '-100:+0',
                onSelect: function(dateText) {
                    convertADtoBS(dateText);
                },
                onClose: function(dateText) {
                    convertADtoBS(dateText);
                },
            });

            function convertADtoBS(dateText) {
                var selectedDate = new Date(dateText);
                var selectedDateAd = {
                    year: selectedDate.getFullYear(),
                    month: selectedDate.getMonth() + 1,
                    day: selectedDate.getDate(),
                };

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
                    years: years,
                    months: months,
                    days: days
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