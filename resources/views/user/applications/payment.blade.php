@extends('user.home')

@section('content')

<style>
    .bill-medium {
        display: flex;
        flex-wrap: wrap;
        gap: 70px;
    }

    .bill-item {
        display: flex;
        flex-direction: column;
        gap: 14px;
        align-items: center;
        position: relative;
    }

    .bill-item img {
        padding: 22px;
        border: 1px solid #E6E6E6;
        border-radius: 100%;
        max-width: 100px;
        transition: 0.3s ease-in-out;
    }

    @media only screen and (max-width: 600px) {
        .payment-text-info {
            font-size: small !important;
            text-align: left !important;
            margin-left: 0;
        }
    }
</style>

<div role="tabpanel" class="tab-pane {{ request()->routeIs('educationDetail') ? 'active' : '' }}" id="educationDetail">

    <div class="card">

        <div class="card-body">

            @if(\Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show" id="msg">
                <p>
                    {{ \Session::get('message')}}
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if(\Session::get('error_message'))
            <div class="alert alert-danger alert-dismissible fade show" id="msg">
                <p>
                    {{ \Session::get('error_message')}}
                </p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($errors->has('error'))
            <div class="alert alert-danger">
                {{ $errors->first('error') }}
            </div>
            @endif
            <div class="wizard-box">
                <div class="card-section">
                    <h3>शुल्क भुक्तानी</h3>
                    <div class="p-3">
                        <div class="row g-3 m-2">
                            <div class="col-md-4">
                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    विज्ञापन नं :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement->advertisement_num }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    सेवा / समूह / उपसमूह :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement->category->title }} / {{
                                    $application->advertisement->group->title }} / {{
                                    $application->advertisement->subGroup->title }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    योग्यता :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement->qualification->title }}
                                </p>

                                <h6 class="mb-1" style="font-weight: bold; text-decoration: underline;">
                                    विज्ञापन नं :
                                </h6>
                                <p class="mt-0">
                                    {{ $application->advertisement->advertisement_num }}
                                </p>
                            </div>
                            <div class="col-md-8">
                                <p class="text-primary" style="font-size: 1.2em;">
                                    सम्मिलित हुन छनोट गर्नु भएको समुह
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="samabeshiGroupsContainer"
                                            data-advertisement-id="{{ $application->id }}">
                                            <div class="col" style="display: flex; align-items: center;">
                                                <div style="flex: 1;">
                                                    @foreach($samabeshiGroups as $id => $samabeshiGroup)
                                                    <div class="form-check" style="margin-bottom: 10px;">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $samabeshiGroup['id'] }}"
                                                            id="{{ $samabeshiGroup['id'] }}" name="samabeshi_groups[]"
                                                            style="width: 20px; height: 20px; border: var(--bs-border-width) solid #0d0d0d;"
                                                            @if($samabeshiGroup['applied']) checked
                                                            onclick="return false;" @else disabled @endif>
                                                        <label class="form-check-label"
                                                            for="{{ $samabeshiGroup['id'] }}"
                                                            style="font-size: 1.2em; margin-left: 5px;">
                                                            <span>{{ $samabeshiGroup['title'] }}</span>
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="payment-text-info"
                                            style="font-size: 2em; text-align: justify; text-align-last: end; margin-left: 10px;">
                                            <i>
                                                <label class="form-check-label" for="">
                                                    जम्मा आवेदन शुल्क:
                                                </label>
                                                {{ $application->payable_amount }}
                                            </i>
                                        </p>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row mt-3">
                                        <p class="text-danger" style="font-size: 1.2em;">
                                            शुल्क भुक्तानी गर्न कुनै एक माध्यम छान्नुहोस्
                                        </p>
                                        <div class="bill-medium">
                                            <div class="bill-item">
                                                <a href="{{ route('imepay.payments', $application->uuid) }}">
                                                    <img src="{{ asset('storage/logos/paymentVendors/imePay.svg') }}"
                                                        style="width: 100px; height: 100px;">
                                                </a>
                                                <p>IME Pay</p>
                                                {{-- <img src="{{ asset('storage/logos/paymentVendors/imePay.svg') }}"
                                                    style="width: 100px">
                                                <p>Ime Pay</p> --}}
                                            </div>
                                            <div class="bill-item">
                                                <a href="{{ route('connectips.payments', [$application->uuid]) }}">
                                                    <img src="{{ asset('storage/logos/paymentVendors/connectIps.svg') }}"
                                                        style="width: 100px">
                                                </a>
                                                <p>Connect Ips</p>
                                            </div>
                                            <div class="bill-item">
                                                <a href="{{ route('esewa.payments', $application->uuid) }}">
                                                    <img src="{{ asset('storage/logos/paymentVendors/esewa.svg') }}"
                                                        style="width: 100px">
                                                </a>
                                                <p>Esewa</p>
                                            </div>
                                            <div class="bill-item">
                                                <form action="{{ route('khalti.payments', $application->uuid) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-link">
                                                        <img src="{{ asset('storage/logos/paymentVendors/khalti.svg') }}"
                                                            style="width: 100px">
                                                    </button>
                                                </form>
                                                <p>Khalti</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save & Next</button>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('scripts')
<script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
<script>
    $(document).on('click', '.btnKhaltiPayment', function() {
        var applicationRefID = $(this).data('reference-id');
        var applicationID = $(this).data('id');
        var currentUrl = '/application/payment/' + applicationID;
        alert(currentUrl);
        if (applicationRefID) {
                $.ajax({
                    url: '/khalti/payments/' + applicationRefID,
                    type: 'GET',
                    dataType: 'json',
                    success: function(responseKhalti) {
                        console.log(responseKhalti);                        
                        if ( responseKhalti.status == 'success' ) {                        
                            var khaltiConfig = {
                                "publicKey": responseKhalti.khaltiParams.publicKey,
                                "productIdentity": responseKhalti.khaltiParams.productIdentity,
                                "productName": responseKhalti.khaltiParams.productName,
                                "productUrl": currentUrl,
                                "paymentPreference": [
                                    "KHALTI",
                                ],
                                "eventHandler": {
                                    onSuccess (payload) {
                                        $.ajax({
                                            url: "{{ route('khalti.payments-verification') }}",
                                            type: 'POST',
                                            data: {
                                                _token: '{{ csrf_token() }}',
                                                idx: typeof payload.idx !== 'undefined' ? payload.idx : false,
                                                token: typeof payload.token !== 'undefined' ? payload.token : false,
                                                amount: typeof payload.amount !== 'undefined' ? payload.amount : false,
                                                mobile: typeof payload.mobile !== 'undefined' ? payload.mobile : false,
                                                product_identity: typeof payload.product_identity !== 'undefined' ? payload.product_identity : false,
                                                product_name: typeof payload.product_name !== 'undefined' ? payload.product_name : false,
                                                product_url: typeof payload.product_url !== 'undefined' ? payload.product_url : false,
                                                widget_id: typeof payload.widget_id !== 'undefined' ? payload.widget_id : false,
                                            },
                                            success: function(response)
                                            {
                                                if ( response.status == 'success' ) {
                                                    window.location.href = currentUrl + '?payment_status=success';
                                                    return true;
                                                }
                                                window.location.href = currentUrl + '?payment_status=failed';
                                            },
                                            error: function(response)
                                            {
                                                window.location.href = currentUrl + '?payment_status=failed';
                                            }
                                        });
                                    
                                    },
                                    onError (error) {
                                        window.location.replace(currentUrl + '?payment_status=failed');
                                    },
                                    onClose () {
                                        console.log('widget is closing');
                                    }
                                }
                            };
                            
                            var checkout = new KhaltiCheckout(khaltiConfig);
                            checkout.show({
                                amount: responseKhalti.khaltiParams.productAmount
                            });
                        
                        } else {
                            window.location.replace(currentUrl + '?payment_status=failed');
                        }
                    }
                    , error: function() {
                        window.location.replace(currentUrl + '?payment_status=failed');
                    }
                });
        } else {
            return false;
        }
    });
</script>
@endsection --}}