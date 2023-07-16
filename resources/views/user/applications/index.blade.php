@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <div role="tabpanel" class="tab-pane {{ request()->routeIs('application.*') ? 'active' : '' }}" id="educationDetail">

        <div class="card">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2" style="border-bottom: none;">
                    <li class="breadcrumb-item">
                        <span>
                            <a href="{{ route('application.index') }}"
                                style="{{ request('show_applied') == 1 ? '' : 'font-weight: 700' }}">
                                All Applications
                            </a>
                        </span>
                    </li>
                    <li class="breadcrumb-item">
                        <span>
                            <a class="text-danger" href="{{ route('application.index', ['show_applied' => 1]) }}"
                                style="{{ request('show_applied') == 1 ? 'font-weight: 700' : '' }}">
                                Applied Applications
                            </a>
                        </span>
                    </li>
                </ol>
            </nav>

            <div class="card-body">
                <div class="wizard-box">
                    @if (count($advertisements))
                        <div class="card-section @if (request('show_applied') != 1) dt-select @endif">

                            <div class="p-3">
                                <div class="row">
                                    <div class="col">
                                        @foreach ($advertisements as $key => $advertisement)
                                            <div class="application-block">
                                                <div class="row justify-center">
                                                    <div class="col-md-3">

                                                        <p class="mt-0">
                                                            <b>
                                                                {{ $advertisement->advertisement_num ?? '' }}
                                                            </b>
                                                        </p>
                                                    </div>

                                                    <div class="col-md-3">

                                                        {{ $advertisement->category->title }} /
                                                        {{ $advertisement->group->title }} /
                                                        {{ $advertisement->subGroup->title }}
                                                    </div>

                                                    <div class="col-md-3">
                                                        {{ $advertisement->qualification->title }}
                                                    </div>

                                                    <div class="col-md-3">
                                                        @if (request('show_applied') == 1)
                                                            @foreach ($advertisement->applications as $application)
                                                                @php
                                                                    $makePayment = true;
                                                                @endphp
                                                                @foreach ($application->payments as $payment)
                                                                    @if ($payment->payment_status == 1)
                                                                        Payment Successful
                                                                        @php
                                                                            $makePayment = false;
                                                                        @endphp
                                                                    @break
                                                                @endif
                                                            @endforeach
                                                            @if ($makePayment)
                                                                <a href="{{ route('application.payment', $application->id) }}"
                                                                    class="btn btn-block btn-outline-success">
                                                                    Make Payment
                                                                </a>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <a href="{{ route('application.show', $advertisement->id) }}"
                                                            class="btn btn-block btn-outline-success">
                                                            Apply For Application
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
</style>
@endsection
