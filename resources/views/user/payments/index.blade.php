@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <div role="tabpanel" class="tab-pane {{ request()->routeIs('payment.*') ? 'active' : '' }}" id="paymentDetail">

        <div class="card">

            <div class="card-body">
                <div class="wizard-box">
                    @if (count($applications))
                        <div class="card-section">
                            <div class="p-3">
                                <div class="row">
                                    <div class="col">
                                        <div id="application-container">
                                            @foreach ($applications as $key => $application)
                                                <div class="application-block">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <b>
                                                                {{ $application->advertisement->advertisement_num ?? '' }}
                                                            </b>
                                                        </div>

                                                        <div class="col-md-3">
                                                            {{ $application->advertisement->category->title ?? '' }} /
                                                            {{ $application->advertisement->group->title ?? '' }} /
                                                            {{ $application->advertisement->subGroup->title ?? '' }}
                                                        </div>

                                                        <div class="col-md-3">
                                                            {{ $application->advertisement->level->title ?? '' }}
                                                        </div>

                                                        <div class="col-md-3">
                                                            {{ $application->advertisement->qualification->title ?? '' }}
                                                        </div>

                                                        <div class="col-md-3 text-center">
                                                            @if (isset($application->payments) && count($application->payments) > 0)
                                                                @foreach ($application->payments as $payment)
                                                                    @if (isset($payment->payment_status) && $payment->payment_status == 1)
                                                                        <h5>
                                                                            <span class="badge bg-primary">
                                                                                Payment Successful
                                                                            </span>
                                                                        </h5>
                                                                    @else
                                                                        <a href=""
                                                                            class="btn btn-block btn-outline-success">
                                                                            Make Payment
                                                                        </a>
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                <a href="" class="btn btn-block btn-outline-success">
                                                                    Make Payment
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .application-block {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .application-block .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .application-block .row>div {
            flex: 1;
        }

        .application-block .row h5 {
            flex: 1;
            text-align: center;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('change', '#category', function() {
                var typeValue = $(this).val();
                var examCenterDropdown = $('#examCenter');

                examCenterDropdown.val('').prop('disabled', true);

                if (typeValue === '1') {
                    examCenterDropdown.prop('disabled', false);
                }

                loadApplications();
            });

            function loadApplications() {
                var category = $('#category').val();
                var examCenter = $('#examCenter').val();

                $.ajax({
                    url: "{{ route('load.applications') }}",
                    method: "GET",
                    data: {
                        category: category,
                        examCenter: examCenter,
                    },
                    success: function(data) {
                        $('#advertisement-container').html(data);
                        isContentLoaded = true;
                    },
                    error: function() {
                        alert('Failed to load applications.');
                    }
                });
            }

            $(document).on('change', '#examCenter', function() {
                loadApplications();
            });
        });
    </script>
@endsection
