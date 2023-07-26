@extends('layouts.app')

@section('content')
    <div class="card-body {{ request()->routeIs('experience') ? 'active' : '' }}" id="experience">

        <form class="wizard-box" action="{{ route('experience.update', $experience) }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            @method('put')

            <div class="card-section">
                <h3>
                    {{ trans('global.experience.title_singular') }}
                </h3>

                <div class="p3">

                    <div class="row g-3 m-3">

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('office') ? 'has-error' : '' }}">
                                <label class="required" for="office">
                                    {{ trans('global.experience.fields.office') }}
                                </label>
                                <input type="text" id="office" name="office" class="form-control"
                                    value="{{ old('office', isset($experience) ? $experience->office : '') }}">
                                @if ($errors->has('office'))
                                    <p class="help-block">
                                        {{ $errors->first('office') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.office_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('post') ? 'has-error' : '' }}">
                                <label class="required" for="post">
                                    {{ trans('global.experience.fields.post') }}
                                </label>
                                <input type="text" id="post" name="post" class="form-control"
                                    value="{{ old('post', isset($experience) ? $experience->post : '') }}">
                                @if ($errors->has('post'))
                                    <p class="help-block">
                                        {{ $errors->first('post') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.post_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('level') ? 'has-error' : '' }}">
                                <label class="required" for="level">
                                    {{ trans('global.experience.fields.level') }}
                                </label>
                                <input type="number" min="1" id="level" name="level" class="form-control"
                                    value="{{ old('level', isset($experience) ? $experience->level : '') }}">
                                @if ($errors->has('level'))
                                    <p class="help-block">
                                        {{ $errors->first('level') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.level_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('recruitment_type_id') ? 'has-error' : '' }}">
                                <label class="required" for="recruitment_type_id">
                                    {{ trans('global.experience.fields.recruitment_type_id') }}
                                </label>
                                <select name="recruitment_type_id" id="recruitment_type_id" class="form-control select2">
                                    @foreach ($recruitmentTypes as $id => $recruitmentType)
                                        <option value="{{ $id }}"
                                            {{ (isset($experience) && $experience->recruitmentType
                                                ? $experience->recruitmentType->id
                                                : old('recruitment_type_id')) == $id
                                                ? 'selected'
                                                : '' }}>
                                            {{ $recruitmentType }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('recruitment_type_id'))
                                    <p class="help-block">
                                        {{ $errors->first('recruitment_type_id') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.recruitment_type_id_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="radio-buttons">
                                <label>
                                    <input type="radio" name="date_format" value="BS"
                                        {{ isset($experience) && $experience->date_format == 'BS' ? 'checked' : '' }}>
                                    {{ trans('global.experience.fields.bs') }}
                                </label>
                                <label>
                                    <input type="radio" name="date_format" value="AD"
                                        {{ isset($experience) && $experience->date_format == 'AD' ? 'checked' : '' }}>
                                    {{ trans('global.experience.fields.ad') }}
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}">
                                <label class="required" for="start_date">
                                    {{ trans('global.experience.fields.start_date') }}
                                </label>
                                <div class="input-group">
                                    <input type="text" id="start_date" name="start_date" class="form-control"
                                        value="{{ old('start_date', isset($experience) ? $experience->start_date : '') }}">
                                    <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    <input type="hidden" id="ad_experience_from" name="ad_experience_from"
                                        value="{{ old('ad_experience_from', isset($experience) ? $experience->ad_experience_from : '') }}">
                                </div>
                                @if ($errors->has('start_date'))
                                    <p class="help-block">
                                        {{ $errors->first('start_date') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.start_date_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}">
                                <label class="required" for="end_date">
                                    {{ trans('global.experience.fields.end_date') }}
                                </label>
                                <div class="input-group">
                                    <input type="text" id="end_date" name="end_date" class="form-control"
                                        value="{{ old('end_date', isset($experience) ? $experience->end_date : '') }}">
                                    <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                    <input type="hidden" id="ad_experience_to" name="ad_experience_to"
                                        value="{{ old('ad_experience_from', isset($experience) ? $experience->ad_experience_to : '') }}">
                                </div>
                                @if ($errors->has('end_date'))
                                    <p class="help-block">
                                        {{ $errors->first('end_date') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('global.experience.fields.end_date_helper') }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <hr>
                            <div class="col-6">
                                <div class="form-group {{ $errors->has('experience_certificate') ? 'has-error' : '' }}">
                                    <label class="required" for="experience_certificate">
                                        {{ trans('global.experience.fields.experience_certificate') }}
                                    </label>
                                    <span class="text-primary">
                                        <em class="text-decoration-italic">
                                            (Update or Replace)
                                        </em>
                                    </span>
                                    <input type="file" class="form-control" id="experience_certificate"
                                        name="experience_certificate"
                                        value="{{ old('experience_certificate', isset($experience) ? $experience->experience_certificate : '') }}"
                                        style="display: block; border-color:#ccc">
                                    @if ($errors->has('experience_certificate'))
                                        <p class="help-block">
                                            {{ $errors->first('experience_certificate') }}
                                        </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.experience.fields.experience_certificate_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-6 d-flex justify-content-end" style="align-items: center;">
                                @if (isset($experience) && $experience->media->where('media_type_id', 9)->isNotEmpty())
                                    <a target="_blank"
                                        href="{{ $experience->media->where('media_type_id', 9)->first()->short_url }}"
                                        style="display: flex; align-items: center;">
                                        <i class="fas fa-file-pdf fa-3x text-primary" aria-hidden="true"></i>
                                        <input type="hidden" name="old_experience_certificate"
                                            value="{{ $experience->media->where('media_type_id', 9)->first()->short_url }}">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
            var experienceDateInput = $('#start_date, #end_date');
            var selectedDateFormat = $('input[name="date_format"]:checked').val();

            if (selectedDateFormat === 'BS') {
                experienceDateInput.nepaliDatePicker({
                    ndpYear: true,
                    ndpMonth: true,
                    ndpYearCount: 100,
                    onChange: updateEquivalentAD,
                    disableAfter: current_nepali_date
                });
            } else if (selectedDateFormat === 'AD') {
                experienceDateInput.datepicker({
                    changeYear: true,
                    changeMonth: true,
                    dateFormat: "yy-mm-dd",
                    autoclose: true,
                    maxDate: 'today',
                    yearRange: '-100:+0',
                });
            }

            $('#start_date, #end_date').on('input', updateEquivalentAD);

            function updateEquivalentAD() {
                var selectedDate = $('#start_date').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#ad_experience_from').val(equivalentAD);

                var selectedDate = $('#end_date').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#ad_experience_to').val(equivalentAD);
            }

            $('input[name="date_format"]').on('change', function() {
                var selectedValue = $(this).val();

                if (selectedValue === 'BS') {
                    experienceDateInput.removeClass('hasDatepicker');
                    experienceDateInput.removeAttr('id');
                    experienceDateInput.val('');
                    experienceDateInput.nepaliDatePicker({
                        ndpYear: true,
                        ndpMonth: true,
                        ndpYearCount: 100,
                        disableAfter: current_nepali_date
                    });
                } else if (selectedValue === 'AD') {
                    experienceDateInput.removeClass('hasDatepicker');
                    experienceDateInput.removeAttr('id');
                    experienceDateInput.val('');
                    experienceDateInput.datepicker({
                        changeYear: true,
                        changeMonth: true,
                        dateFormat: "yy-mm-dd",
                        autoclose: true,
                        maxDate: 'today',
                        yearRange: '-100:+0',
                    });
                }
            });
        });
    </script>
@endsection
