@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    <div class="card-body {{ request()->routeIs('payment.*') ? 'active' : '' }}" id="payment">
        @if (\Session::get('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ \Session::get('message') }}
            </div>
        @endif

        @if (\Session::get('error_message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ \Session::get('error_message') }}
            </div>
        @endif

        @if (request()->has('payment_status'))
            @if (request()->get('payment_status') == 'success')
                <div class="alert alert-success alert-dismissible fade show" role="alert"
                    style="background-color: #47eb07;">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p>Payment successful. Please find below the application details.</p>
                </div>
            @else
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <p>Sorry something went wrong processing your payment. Please verify the payment or select other
                        payment options.</p>
                </div>
            @endif
        @endif
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
                                                        @if ($application->latestPayment)
                                                            @if ($application->latestPayment->payment_status == 1)
                                                                @if ($application->latestPayment->paymentVerification && $application->latestPayment->paymentVerification->is_approved)
                                                                    <h5>
                                                                        <span class="badge bg-success">
                                                                            <i class="fas fa-check"></i>
                                                                            Application Verified
                                                                        </span>
                                                                    </h5>
                                                                @else
                                                                    <h5>
                                                                        <span class="badge bg-warning">
                                                                            <i class="fas fa-exclamation"></i>
                                                                            Verification Pending
                                                                        </span>
                                                                    </h5>
                                                                @endif
                                                            @else
                                                                @if ($application->advertisement->penalty_end_date_en < now())
                                                                    <h5>
                                                                        <span class="badge bg-danger">
                                                                            <i class="fas fa-exclamation"></i>
                                                                            Application Expired
                                                                        </span>
                                                                    </h5>
                                                                @else
                                                                    <!-- Display the "Make Payment" button if the latest payment is not successful -->
                                                                    <a href="{{ route('payment.show', $application->id) }}"
                                                                        class="btn btn-block btn-outline-success">
                                                                        Make Payment
                                                                    </a>
                                                                @endif
                                                            @endif
                                                        @else
                                                            @if ($application->advertisement->penalty_end_date_en < now())
                                                                <h5>
                                                                    <span class="badge bg-danger">
                                                                        <i class="fas fa-exclamation"></i>
                                                                        Application Expired
                                                                    </span>
                                                                </h5>
                                                            @else
                                                                <!-- Display the "Make Payment" button if there are no payments -->
                                                                <a href="{{ route('payment.show', $application->id) }}"
                                                                    class="btn btn-block btn-outline-success">
                                                                    Make Payment
                                                                </a>
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div>
                                                <div class="flex-container">
                                                    @if ($application->latestPayment)
                                                        @if ($application->latestPayment->payment_status == 1)
                                                            @if ($application->latestPayment->paymentVerification && $application->latestPayment->paymentVerification->is_approved)
                                                                <span class="badge bg-success">
                                                                    <i class="fas fa-check"></i>
                                                                    Payment Successful
                                                                </span>
                                                                <span class="badge bg-success">
                                                                    <i class="fas fa-check"></i>
                                                                    Application Verified
                                                                </span>
                                                            @else
                                                                <span class="badge bg-success">
                                                                    <i class="fas fa-check"></i>
                                                                    Payment Successful
                                                                </span>
                                                                <span class="badge bg-warning">
                                                                    <i class="fas fa-exclamation"></i>
                                                                    Verification Pending
                                                                </span>
                                                            @endif
                                                        @else
                                                            @if ($application->advertisement->penalty_end_date_en < now())
                                                                <h5>
                                                                    <span class="badge bg-danger">
                                                                        <i class="fas fa-exclamation"></i>
                                                                        Application Expired
                                                                    </span>
                                                                </h5>
                                                            @else
                                                                <span class="badge bg-warning">
                                                                    <i class="fas fa-exclamation"></i>
                                                                    Payment Pending
                                                                </span>
                                                            @endif
                                                        @endif
                                                    @else
                                                        @if ($application->advertisement->penalty_end_date_en < now())
                                                            <h5>
                                                                <span class="badge bg-danger">
                                                                    <i class="fas fa-exclamation"></i>
                                                                    Application Expired
                                                                </span>
                                                            </h5>
                                                        @else
                                                            <span class="badge bg-warning">
                                                                <i class="fas fa-exclamation"></i>
                                                                Payment Pending
                                                            </span>
                                                        @endif
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
                margin-right: 5px;
                font-size: 10px;
            }

            .flex-container {
                flex-direction: column;
                align-items: flex-start;
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
