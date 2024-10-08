@extends('layouts.app')

@section('content')
    <div class="card-body {{ request()->routeIs('application.*') ? 'active' : '' }}" id="application">

        @if ($errors->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ $errors->first('error') }}
            </div>
        @endif

        <form class="wizard-box" action="{{ route('application.update', $application->advertisement->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="card-section">
                <h3>
                    {{ trans('global.application.fields.advertisement_detail') }}
                </h3>
                <div class="p-3">
                    <div class="row g-3 m-2">
                        <input type="hidden" name="application_id" id="application_id" value="{{ $application->id }}">
                        <div class="col-md-4">
                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.advertisement_num') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->advertisement_num ?? '' }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.category_id') }}
                                / {{ trans('global.application.fields.group_id') }}
                                / {{ trans('global.application.fields.sub_group_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->category->title ?? '' }} /
                                {{ $application->advertisement->group->title ?? '' }} /
                                {{ $application->advertisement->subGroup->title ?? '' }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.level_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->level->title ?? '' }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                {{ trans('global.application.fields.qualification_id') }} :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement->qualification->title ?? '' }}
                            </p>

                            <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                विज्ञापन नं :
                            </h6>
                            <p class="mt-0">
                                {{ $application->advertisement_num ?? '' }}
                            </p>
                        </div>
                        <div class="col-md-8">
                            <p class="text-danger" style="font-size: 1.2em;">
                                {{ trans('global.application.info.samabeshiGroupSelectionInfo') }}
                            </p>

                            <div id="samabeshiGroupsContainer"
                                data-advertisement-id="{{ $application->advertisement->id }}">
                                <div class="row">
                                    <p style="color:#990000" style="font-size: 1.2em;"><i>
                                            <label class="form-check-label" for="">
                                                {{ trans('global.application.fields.exam_fee') }} :
                                            </label>
                                            <input type="text" name="advAmount" id="advAmount" readonly
                                                value="{{ $amount ?? '0' }}"
                                                style="background:rgba(0,0,0,0); border: none; " />
                                        </i>
                                    </p>
                                    <div class="col">
                                        @foreach ($samabeshiGroups as $id => $samabeshiGroup)
                                            <div class="alert alert-primary d-none" id="custom-error" role="alert">
                                                {{ trans('global.application.info.ladiesErrorInfo') }}
                                            </div>

                                            <div class="form-check" style="margin-bottom: 10px;">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $samabeshiGroup['id'] }}" id="{{ $samabeshiGroup['id'] }}"
                                                    name="samabeshi_groups[]"
                                                    style="width: 20px; height: 20px; border: var(--bs-border-width) solid #0d0d0d;"
                                                    @if ($samabeshiGroup['applied']) checked @endif>
                                                <label class="form-check-label" for="{{ $samabeshiGroup['id'] }}"
                                                    style="font-size: 1.2em; margin-left: 5px;">
                                                    <span>{{ $samabeshiGroup['title'] }}</span>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" id="save-next-btn">Save & Next</button>
            </div>
        </form>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            var userSamabeshiMedia = {!! $userSamabeshiMedia->toJson() !!};

            // Function to handle error checks
            function handleErrors(selectedGroups) {
                var customErrorDiv = $('#custom-error');
                var saveNextBtn = $('#save-next-btn');
                var isLadiesChecked = selectedGroups.includes('2');
                var isMaleUser = {{ auth()->user()->gender_id }} === 1;
                var hasSamabeshiDocument = userSamabeshiMedia.length > 0;

                if (isLadiesChecked && isMaleUser) {
                    customErrorDiv.text('{{ trans('global.application.info.ladiesErrorInfo') }}');
                    customErrorDiv.removeClass('d-none');
                    saveNextBtn.prop('disabled', true);
                } else if (selectedGroups.some(function(group) {
                        return group !== '1' && group !== '2';
                    }) && !hasSamabeshiDocument) {
                    customErrorDiv.text('{{ trans('global.application.info.samabeshiErrorInfo') }}');
                    customErrorDiv.removeClass('d-none');
                    saveNextBtn.prop('disabled', true);
                } else {
                    customErrorDiv.addClass('d-none');
                    saveNextBtn.prop('disabled', false);
                }
            }

            $('input[name="samabeshi_groups[]"]').change(function() {
                var selectedGroups = $('input[name="samabeshi_groups[]"]:checked').map(function() {
                    return this.value;
                }).get();

                var numSelectedGroups = selectedGroups.length;
                var advertisementId = $('#samabeshiGroupsContainer').data('advertisement-id');
                var customErrorDiv = $('#custom-error');
                var saveNextBtn = $('#save-next-btn');

                $.ajax({
                    url: '/update_advAmount',
                    type: 'POST',
                    data: {
                        _token: csrfToken,
                        advertisementId: advertisementId,
                        samabeshiGroups: selectedGroups
                    },
                    success: function(response) {
                        var fee = response;
                        $('#advAmount').val(fee === 0 ? '0' : fee);
                        // Call the error check function after updating the amount
                        handleErrors(selectedGroups);
                    },
                    error: function(xhr, status, error) {
                        $('#advAmount').val('0');
                        // console.error(error);
                    }
                });

                // Call the error check function when checkboxes change
                handleErrors(selectedGroups);
            });
        });
    </script>
@endsection
