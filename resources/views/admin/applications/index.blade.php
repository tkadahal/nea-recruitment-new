@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong> </strong> मा परेका आबेदनका सूचीहरु

        </div>

        <div class="card-body">
            <div class="row">
                @foreach ($applications as $application)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white" style="background-color: {{ $application->color ?? '#7CB9E8' }}">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4 fw-semibold">
                                        <a href="{{ route('admin.application.show', $application->id) }}"
                                            style="color: white;">
                                            {{ $application->title ?? '' }}
                                        </a>
                                    </div>
                                    <hr>
                                    <div class="pt-4 fs-4">
                                        Total Advertisements: {{ $application->advertisements_count ?? '0' }}
                                    </div>
                                    {{-- <div class="pt-4 fs-4">
                                Total Checked: {{ $application->payment_verifications_checked_count ?? '0' }}
                            </div>
                            <div class="pt-4 fs-4">
                                Total Approved: {{ $application->advertisements_count ?? '0' }}
                            </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class=" table-responsive">
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
                                <a href="{{ route('admin.application.show', $application['id']) }}"
                                    class="btn btn-primary btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> --}}
        </div>
    </div>
@endsection

{{-- @section('scripts')
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
@endsection --}}
