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
                                    <div class="card application-block" id="application-block">
                                        <div class="card-body">
                                            <div class="row">
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
                                                            {{ trans('global.advertisement.fields.level_id')}}
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
                                                    <p>{{ $application->advertisement->advertisement_num ?? '' }}</p>
                                                </div>

                                                <div class="col-md-3 col-12">
                                                    <p>{{ $application->advertisement->level->title ?? '' }}</p>
                                                </div>

                                                <div class="col-md-3 col-12">
                                                    <p>{{ $application->applicationFee ?? '' }}</p>
                                                </div>

                                                <div class="col-md-3 col-12 text-center">
                                                    @if (isset($application->payments) && count($application->payments)
                                                    > 0)
                                                    @foreach ($application->payments as $payment)
                                                    @if (isset($payment->payment_status) && $payment->payment_status ==
                                                    1)
                                                    <h5>
                                                        <span class="badge bg-primary">
                                                            Payment Successful
                                                        </span>
                                                    </h5>
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
                                        <div class="card-footer mt-2">
                                            <span>Payment</span>
                                            <span>Payment</span>
                                            <span>Payment</span>
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
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        padding: 5px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-footer {
        background-color: rgb(22, 207, 231);
        border-top: 1px solid rgb(238, 10, 10);
        padding-top: 20px;
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
