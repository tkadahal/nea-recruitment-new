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
                                        <div id="payment-container">
                                            @foreach ($applications as $key => $application)
                                                <div class="payment-block" id="payment-block">
                                                    <div class="card-body">
                                                        <div class="row mb-2">
                                                            <div class="col-md-3 col-12">
                                                                <b>
                                                                    <u>
                                                                        {{ trans('global.advertisement.fields.advertisement_num') }}
                                                                    </u>
                                                                </b>
                                                            </div>

                                                            <div class="col-md-3 col-12">
                                                                <b>
                                                                    <u>
                                                                        {{ trans('global.advertisement.fields.level_id') }}
                                                                    </u>
                                                                </b>
                                                            </div>

                                                            <div class="col-md-3 col-12">
                                                                <b>
                                                                    <u>
                                                                        Amount
                                                                    </u>
                                                                </b>
                                                            </div>

                                                            <div class="col-md-3 col-12">

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3 col-12">
                                                                <p>{{ $application->advertisement->advertisement_num ?? '' }}
                                                                </p>
                                                            </div>

                                                            <div class="col-md-3 col-12">
                                                                <p>{{ $application->advertisement->level->title ?? '' }}</p>
                                                            </div>

                                                            <div class="col-md-3 col-12">
                                                                <p>{{ $application->applicationFee ?? '' }}</p>
                                                            </div>

                                                            <div class="col-md-3 col-12 text-center">
                                                                @if (isset($application->payments) && count($application->payments) > 0)
                                                                    @foreach ($application->payments as $payment)
                                                                        @if (isset($payment->payment_status) && $payment->payment_status == 1)
                                                                            @if ($payment->paymentVerification && $payment->paymentVerification->is_approved)
                                                                                <h5>
                                                                                    <span class="badge bg-success">
                                                                                        Application Verified
                                                                                    </span>
                                                                                </h5>
                                                                            @else
                                                                                <h5>
                                                                                    <span class="badge bg-warning">
                                                                                        Verification Pending
                                                                                    </span>
                                                                                </h5>
                                                                            @endif
                                                                        @else
                                                                            <a href="{{ route('payment.show', $application->id) }}"
                                                                                class="btn btn-block btn-outline-success">
                                                                                Make Payment
                                                                            </a>
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                    <a href="{{ route('payment.show', $application->id) }}"
                                                                        class="btn btn-block btn-outline-success">
                                                                        Make Payment
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div>
                                                        @if (isset($application->payments) && count($application->payments) > 0)
                                                            <div class="flex-container">
                                                                @foreach ($application->payments as $payment)
                                                                    @if (isset($payment->payment_status) && $payment->payment_status == 1)
                                                                        <span class="badge bg-success">
                                                                            <i class="fas fa-check"></i>
                                                                            Payment Successful
                                                                        </span>
                                                                    @endif
                                                                    @if ($payment->paymentVerification && $payment->paymentVerification->is_approved)
                                                                        <span class="badge bg-success">
                                                                            <i class="fas fa-check"></i>
                                                                            Application Verified
                                                                        </span>
                                                                    @endif
                                                                    <span style="margin-left: 10px;">Payment Status</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
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
        .payment-block {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #e9e9e9;
            border-radius: 5px;
            background-color: #ffffff;
        }

        .payment-block .row {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .payment-block .row>div {
            flex: 1;
        }

        .payment-block .row h5 {
            flex: 1;
            text-align: center;
        }

        .badge {
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 12px;
        }

        @media (max-width: 576px) {
            .badge {
                padding: 8px 16px;
                /* Adjust padding for smaller screens */
                margin-right: 5px;
                /* Adjust gap for smaller screens */
                font-size: 10px;
                /* Adjust font size for smaller screens */
            }

            .flex-container {
                flex-direction: column;
                /* Stack elements vertically on smaller screens */
                align-items: flex-start;
                /* Align items to the left in vertical layout */
            }
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
