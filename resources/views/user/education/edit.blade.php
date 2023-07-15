@extends('layouts.app')

@section('content')
<div role="tabpanel" class="tab-pane {{ request()->routeIs('education') ? 'active' : '' }}" id="education">

    <div class="card">

        @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif

        <div class="card-body">

            <form class="wizard-box" action="{{ route('education.update', $education) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-section">
                    <h3>
                        {{ trans('global.education.title_singular') }}
                    </h3>
                    <div class="p3">

                        <div class="row g-3 m-3">

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('qualification_id') ? 'has-error' : '' }}">
                                    <label class="required" for="qualification_id">
                                        {{ trans('global.education.fields.qualification_id') }}
                                    </label>
                                    <select name="qualification_id" id="qualification_id" class="form-control select2">
                                        @foreach ($qualifications as $id => $qualification)
                                        <option value="{{ $id }}" {{ (isset($education) && $education->qualification ?
                                            $education->qualification->id : old('qualification_id')) ==
                                            $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $qualification }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('qualification_id'))
                                    <p class="help-block">
                                        {{ $errors->first('qualification_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.qualification_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('university_id') ? 'has-error' : '' }}">
                                    <label class="required" for="university_id">
                                        {{ trans('global.education.fields.university_id') }}
                                    </label>
                                    <select name="university_id" id="university_id" class="form-control select2">
                                        @foreach ($universities as $id => $university)
                                        <option value="{{ $id }}" {{ (isset($education) && $education->university ?
                                            $education->university->id : old('university_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $university }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('university_id'))
                                    <p class="help-block">
                                        {{ $errors->first('university_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.university_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('institution') ? 'has-error' : '' }}">
                                    <label class="required" for="institution">
                                        {{ trans('global.education.fields.institution') }}
                                    </label>
                                    <input type="text" id="institution" name="institution" class="form-control"
                                        value="{{ old('institution', isset($education) ? $education->institution : '') }}">
                                    @if ($errors->has('institution'))
                                    <p class="help-block">
                                        {{ $errors->first('institution') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.institution_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('division_id') ? 'has-error' : '' }}">
                                    <label class="required" for="division_id">
                                        {{ trans('global.education.fields.division_id') }}
                                    </label>
                                    <select name="division_id" id="division_id" class="form-control select2">
                                        @foreach ($divisions as $id => $division)
                                        <option value="{{ $id }}" {{ (isset($education) && $education->division ?
                                            $education->division->id : old('division_id')) == $id
                                            ? 'selected'
                                            : '' }}>
                                            {{ $division }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('division_id'))
                                    <p class="help-block">
                                        {{ $errors->first('division_id') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.division_id_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('percentage') ? 'has-error' : '' }}">
                                    <label class="required" for="percentage">
                                        {{ trans('global.education.fields.percentage') }}
                                    </label>
                                    <input type="text" id="percentage" name="percentage" class="form-control"
                                        autocomplete="off"
                                        value="{{ old('percentage', isset($education) ? $education->percentage : '') }}">
                                    @if ($errors->has('percentage'))
                                    <p class="help-block">
                                        {{ $errors->first('percentage') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.percentage_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group {{ $errors->has('pass_year') ? 'has-error' : '' }}">
                                    <label class="required" for="pass_year">
                                        {{ trans('global.education.fields.pass_year') }}
                                    </label>
                                    <input type="number" id="pass_year" name="pass_year" class="form-control"
                                        autocomplete="off" min="0" max="9999"
                                        oninput="javascript: if (this.value.length > 4) this.value = this.value.slice(0, 4);"
                                        value="{{ old('pass_year', isset($education) ? $education->pass_year : '') }}">
                                    @if ($errors->has('pass_year'))
                                    <p class="help-block">
                                        {{ $errors->first('pass_year') }}
                                    </p>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('global.education.fields.pass_year_helper') }}
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div
                                        class="form-group {{ $errors->has('transcript_issue_date') ? 'has-error' : '' }}">
                                        <label class="required">
                                            {{ trans('global.education.fields.transcript_issue_date') }}
                                        </label>
                                        <div class="radio-buttons">
                                            <label>
                                                <input type="radio" name="date_format" value="BS" {{ isset($education)
                                                    && $education->date_format == 'BS' ? 'checked' : '' }}>
                                                {{ trans('global.education.fields.bs') }}
                                            </label>
                                            <label>
                                                <input type="radio" name="date_format" value="AD" {{ isset($education)
                                                    && $education->date_format == 'AD' ? 'checked' : '' }}>
                                                {{ trans('global.education.fields.ad') }}
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <input type="text" id="transcript_issue_date" name="transcript_issue_date"
                                                class="form-control"
                                                value="{{ old('transcript_issue_date', isset($education) ? $education->transcript_issue_date : '') }}">
                                            <i class="date-icon fa fa-calendar" aria-hidden="true"></i>
                                        </div>
                                        @if ($errors->has('transcript_issue_date'))
                                        <p class="help-block">
                                            {{ $errors->first('transcript_issue_date') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.education.fields.transcript_issue_date_helper') }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <hr>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('transcript') ? 'has-error' : '' }}">
                                        <label class="required" for="transcript">
                                            {{ trans('global.education.fields.transcript') }}
                                        </label>
                                        <span class="text-primary">
                                            <em class="text-decoration-italic">
                                                (Update or Replace)
                                            </em>
                                        </span>
                                        <input type="file" class="form-control" id="transcript" name="transcript"
                                            value="{{ old('transcript', isset($education) ? $education->transcript : '') }}"
                                            style="display: block; border-color:#ccc">
                                        @if ($errors->has('transcript'))
                                        <p class="help-block">
                                            {{ $errors->first('transcript') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.education.fields.transcript_helper') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 d-flex justify-content-end" style="align-items: center;">
                                    @if (isset($education) && $education->media->where('media_type_id',
                                    7)->isNotEmpty())
                                    <a target="_blank"
                                        href="{{ $education->media->where('media_type_id', 7)->first()->short_url }}"
                                        style="display: flex; align-items: center;">
                                        <i class="fas fa-file-pdf fa-3x text-primary" aria-hidden="true"></i>
                                        <input type="hidden" name="old_transcript"
                                            value="{{ $education->media->where('media_type_id', 7)->first()->short_url }}">
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <hr>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('character') ? 'has-error' : '' }}">
                                        <label class="required" for="character">
                                            {{ trans('global.education.fields.character') }}
                                        </label>
                                        <span class="text-primary">
                                            <em class="text-decoration-italic">
                                                (Update or Replace)
                                            </em>
                                        </span>
                                        <input type="file" class="form-control" id="character" name="character"
                                            value="{{ old('character', isset($education) ? $education->character : '') }}"
                                            style="display: block; border-color:#ccc">
                                        @if ($errors->has('character'))
                                        <p class="help-block">
                                            {{ $errors->first('character') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.education.fields.character_helper') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 d-flex justify-content-end" style="align-items: center;">
                                    @if (isset($education) && $education->media->where('media_type_id',
                                    6)->isNotEmpty())
                                    <a target="_blank"
                                        href="{{ $education->media->where('media_type_id', 6)->first()->short_url }}"
                                        style="display: flex; align-items: center;">
                                        <i class="fas fa-file-pdf fa-3x text-primary" aria-hidden="true"></i>
                                        <input type="hidden" name="old_character"
                                            value="{{ $education->media->where('media_type_id', 6)->first()->short_url }}">
                                    </a>
                                    @endif
                                </div>
                            </div>

                            @if ($education->media->where('media_type_id', 11)->isNotEmpty())
                            <div class="row">
                                <hr>
                                <div class="col-6">
                                    <div class="form-group {{ $errors->has('council') ? 'has-error' : '' }}">
                                        <label class="required" for="council">
                                            {{ trans('global.education.fields.council') }}
                                        </label>
                                        <span class="text-primary">
                                            <em class="text-decoration-italic">
                                                (Update or Replace)
                                            </em>
                                        </span>
                                        <input type="file" class="form-control" id="council" name="council"
                                            value="{{ old('council', isset($education) ? $education->council : '') }}"
                                            style="display: block; border-color:#ccc">
                                        @if ($errors->has('council'))
                                        <p class="help-block">
                                            {{ $errors->first('council') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.education.fields.council_helper') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 d-flex justify-content-end" style="align-items: center;">
                                    @if (isset($education) && $education->media->where('media_type_id',
                                    11)->isNotEmpty())
                                    <a target="_blank"
                                        href="{{ $education->media->where('media_type_id', 11)->first()->short_url }}"
                                        style="display: flex; align-items: center;">
                                        <i class="fas fa-file-pdf fa-3x text-primary" aria-hidden="true"></i>
                                        <input type="hidden" name="old_council"
                                            value="{{ $education->media->where('media_type_id', 11)->first()->short_url }}">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            @endif

                            {{-- @if ($education->media->where('media_type_id', 10)->isNotEmpty() ||
                            $errors->has('equivalence')) --}}
                            <div class="row">
                                <hr>
                                <div class="col-md-6" id="equivalence-field" @if ($errors->has('equivalence') ||
                                    $education->media->where('media_type_id', 10)->isNotEmpty()) style="display:
                                    block;"
                                    @else style="display: none;" @endif>
                                    <div class="form-group {{ $errors->has('equivalence') ? 'has-error' : '' }}">
                                        <label class="required" for="equivalence">
                                            {{ trans('global.education.fields.equivalence') }}
                                        </label>
                                        <span class="text-primary">
                                            <em class="text-decoration-italic">
                                                (Update or Replace)
                                            </em>
                                        </span>
                                        <input type="file" class="form-control" id="equivalence" name="equivalence"
                                            value="{{ old('equivalence', isset($education) ? $education->equivalence : '') }}"
                                            style="display: block; border-color:#ccc">
                                        <i class="text-success">{{
                                            trans('global.education.category.info.equivalenceInfo') }}</i>
                                        @if ($errors->has('equivalence'))
                                        <p class="help-block">
                                            {{ $errors->first('equivalence') }}
                                        </p>
                                        @endif
                                        <p class="helper-block">
                                            {{ trans('global.education.fields.equivalence_helper') }}
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6 d-flex justify-content-end">
                                    @if (isset($education) && $education->media->where('media_type_id',
                                    10)->isNotEmpty())
                                    <a target="_blank"
                                        href="{{ $education->media->where('media_type_id', 10)->first()->short_url }}"
                                        style="display: flex; align-items: center;">
                                        <i class="fas fa-file-pdf fa-3x text-primary" aria-hidden="true"></i>
                                        <input type="hidden" name="old_equivalence"
                                            value="{{ $education->media->where('media_type_id', 10)->first()->short_url }}">
                                    </a>
                                    @endif
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .radio-buttons {
        display: flex;
        align-items: center;
    }

    .radio-buttons label {
        margin-right: 10px;
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
            var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
            var transcriptIssueDateInput = $('#transcript_issue_date');
            var selectedDateFormat = $('input[name="date_format"]:checked').val();

            if (selectedDateFormat === 'BS') {
                transcriptIssueDateInput.nepaliDatePicker({
                    ndpYear: true,
                    ndpMonth: true,
                    ndpYearCount: 100,
                    disableAfter: current_nepali_date
                });
            } else if (selectedDateFormat === 'AD') {
                transcriptIssueDateInput.datepicker({
                    changeYear: true,
                    changeMonth: true,
                    dateFormat: "yy-mm-dd",
                    autoclose: true,
                    maxDate: 'today',
                    yearRange: '-100:+0',
                });
            }

            $('input[name="date_format"]').on('change', function() {
                var selectedValue = $(this).val();

                if (selectedValue === 'BS') {
                    transcriptIssueDateInput.removeClass('hasDatepicker');
                    transcriptIssueDateInput.removeAttr('id');
                    transcriptIssueDateInput.val('');
                    transcriptIssueDateInput.nepaliDatePicker({
                        ndpYear: true,
                        ndpMonth: true,
                        ndpYearCount: 100,
                        disableAfter: current_nepali_date
                    });
                } else if (selectedValue === 'AD') {
                    transcriptIssueDateInput.removeClass('hasDatepicker');
                    transcriptIssueDateInput.removeAttr('id');
                    transcriptIssueDateInput.val('');
                    transcriptIssueDateInput.datepicker({
                        changeYear: true,
                        changeMonth: true,
                        dateFormat: "yy-mm-dd",
                        autoclose: true,
                        maxDate: 'today',
                        yearRange: '-100:+0',
                    });
                }
            });

            var selectedUniversityId = $('#university_id').val();
            var equivalenceField = $('#equivalence-field');

            if (selectedUniversityId == 15) {
                equivalenceField.show();
            } else {
                equivalenceField.hide();
            }

            $('#university_id').on('change', function() {
                var selectedUniversityId = $(this).val();
                if (selectedUniversityId == 15) {
                    equivalenceField.show();
                } else {
                    equivalenceField.hide();
                }
            });
        });
</script>
@endsection
