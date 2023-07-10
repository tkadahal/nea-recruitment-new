@extends('user.home')

@section('content')

<div role="tabpanel" class="tab-pane {{ request()->routeIs('educationDetail') ? 'active' : '' }}" id="educationDetail">

    <div class="card">

        <div class="card-body">

            @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
            @endif
            <form class="wizard-box" action="{{ route('application.update', $application) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-section">
                    <h3>विज्ञापन विवरण</h3>
                    <div class="p-3">
                        <div class="row g-3 m-2">
                            <div class="col-md-4">
                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    विज्ञापन नं :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement_num }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    सेवा / समूह / उपसमूह :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->category->title }} / {{ $application->group->title }} / {{
                                    $application->subGroup->title }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    योग्यता :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->qualification->title }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    विज्ञापन नं :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement_num }}
                                </p>
                            </div>
                            <div class="col-md-8">
                                <p class="text-danger" style="font-size: 1.2em;">
                                    विज्ञापनमा दरखास्त पेश गर्दा, आफूले भर्ने समाबेशी समूह राम्रो संग एकिन गरि मात्र
                                    दरखास्त पेश गर्नुहोला।
                                </p>

                                <div id="samabeshiGroupsContainer" data-advertisement-id="{{ $application->id }}">
                                    <div class="row">
                                        <p style="color:#990000" style="font-size: 1.2em;"><i>
                                                <label class="form-check-label" for="">
                                                    परिक्षा दस्तुर
                                                </label>
                                                <input type="text" name="advAmount" id="advAmount" readonly value="0"
                                                    style="background:rgba(0,0,0,0); border: none; " />
                                            </i>
                                        </p>
                                        <div class="col">
                                            @foreach($samabeshiGroups as $id => $samabeshiGroup)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="{{ $samabeshiGroup['id'] }}" id="{{ $samabeshiGroup['id'] }}"
                                                    name="samabeshi_groups[]"
                                                    style="width: 20px; height: 20px; border: var(--bs-border-width) solid #0d0d0d; margin-bottom: 10px">
                                                <label class="form-check-label" for="{{ $samabeshiGroup['id'] }}"
                                                    style="font-size: 1.2em; margin-left: 5px">
                                                    {{ $samabeshiGroup['title'] }}
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
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('input[name="samabeshi_groups[]"]').change(function() {
            var selectedGroups = $('input[name="samabeshi_groups[]"]:checked').map(function() {
                return this.value;
            }).get();


            var numSelectedGroups = selectedGroups.length;
            var advertisementId = $('#samabeshiGroupsContainer').data('advertisement-id');

            // Send AJAX request to update advAmount
            $.ajax({
                url: '/update_advAmount', // Replace with the actual URL to the server-side script
                type: 'POST', // Use 'POST' or 'GET' depending on your server-side configuration
                data: {
                    _token: csrfToken,
                    advertisementId: advertisementId,
                    samabeshiGroups: selectedGroups
                },
                success: function(response) {
                    var fee = response;
                    $('#advAmount').val(fee === 0 ? '0' : fee);
                },
                error: function(xhr, status, error) {
                    // Handle errors, if any
                    console.error(error);
                }
            });
        });
    });
</script>

@endsection