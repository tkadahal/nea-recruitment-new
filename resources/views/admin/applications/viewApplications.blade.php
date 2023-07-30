@extends('layouts.admin')

@section('content')
<div class="form-group d-flex justify-content-between">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
    @if(auth('admin')->user()->is_approver && \Illuminate\Support\Str::afterLast(request()->url(), '/') === '_approved')
    {{-- @if(auth('admin')->user()->is_approver)
    @php
    $action = \Illuminate\Support\Str::afterLast(request()->url(), '/');
    @endphp
    @if ($action === '_approved') --}}
    <div class="d-flex align-items-center">
        <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
            @csrf
            <input type="hidden" name="action" value="reject">
            <button type="submit" class="btn btn-danger ml-2">
                Generate Roll No
            </button>
        </form>

        <form method="POST" action="{{ route('admin.paymentVerification.store') }}" class="d-inline-block">
            @csrf
            <input type="hidden" name="action" value="verify">
            <button type="submit" class="btn btn-success ml-2">
                Generate CV
            </button>
        </form>

        <form method="get" action="{{ route('admin.generateCardForExamCenter', $advertisementId) }}"
            class="d-inline-block">
            <button type="submit" class="btn btn-success ml-2">
                Generate Card For Exam Center
            </button>
        </form>
    </div>
    {{-- @endif --}}
    @endif
</div>

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong> {{ $advertisementNum }} </strong> मा परेका आबेदनका सूचीहरु

    </div>

    <div class="card-body">
        <div class=" table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-applications">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Applicant Name
                        </th>
                        <th>
                            Payable Amount
                        </th>
                        <th>
                            Paid Amount
                        </th>
                        <th>
                            Payment Gateway
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $key => $application)
                    <tr data-entry-id="{{ $application['id'] }}">
                        <td></td>
                        <td>
                            {{ $application['name'] ?? '' }}
                        </td>
                        <td>
                            {{ $application['payable_amount'] ?? '' }}
                        </td>
                        <td>
                            {{ $application['paid_amount'] ?? '' }}
                        </td>
                        <td>
                            {{ $application['payment_gateway'] ?? '' }}
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="applications Functions">
                                <a href="{{ route('admin.application.viewUserDetail', $application['id']) }}"
                                    class="btn btn-info btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@parent
<script>
    $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-applications:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
</script>
@endsection
