@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>Applicants List</strong>
        </div>

        <div class="card-body">
            <form class="form-horizontal" action="{{ route('admin.getReportByApplicantsCount') }}" method="GET">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row g-5 mb-4">
                            <div class="col-sm">
                                <label class="form-label" for="date_from">
                                    From
                                </label>
                                <input type="text" id="date_from" name="date_from" class="form-control nepali-calendar"
                                    value="" autocomplete="off" placeholder="YYYY-MM-DD">
                                <input type="hidden" id="date_from_ad" name="date_from_ad" value="">
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="date_to">
                                    To
                                </label>
                                <input type="text" id="date_to" name="date_to" class="form-control nepali-calendar"
                                    value="" autocomplete="off" placeholder="YYYY-MM-DD">
                                <input type="hidden" id="date_to_ad" name="date_to_ad" value="">
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="payment_status">
                                    Payment Status
                                </label>
                                <select name="payment_status" id="payment_status" class="form-control select2">
                                    <option value="">Select One ...</option>
                                    <option value="1">Paid</option>
                                    <option value="2">UnPaid</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="verification_status">
                                    Verification Status
                                </label>

                                <select name="verification_status" id="verification_status" class="form-control select2">
                                    <option value="">Select One ...</option>
                                    <option value="1">Verified</option>
                                    <option value="2">UnVerified</option>
                                    <option value="3">Rejected</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-sm">
                                <label class="form-label" for="advertisement_id">
                                    Advertisements
                                </label>

                                <select name="advertisement_id" id="advertisement_id" class="form-control select2">
                                    @foreach ($advertisements as $id => $advertisement)
                                        <option value="{{ $id }}">
                                            {{ $advertisement }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="payment_vendor_id">
                                    Payment Gateway
                                </label>

                                <select name="payment_vendor_id" id="payment_vendor_id" class="form-control select2">
                                    @foreach ($paymentVendors as $id => $paymentVendor)
                                        <option value="{{ $id }}">
                                            {{ $paymentVendor }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="col-sm">
                                <label class="form-label" for="directorate_id">
                                    {{ trans('cruds.trial.fields.court_id') }}
                                </label>

                                <select name="court_id" id="court_id" class="form-control select2">

                                </select>
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="branch_id">
                                    {{ trans('cruds.trial.fields.office_id') }}
                                </label>
                                <select name="office_id" id="office_id" class="form-control select2">

                                </select>
                            </div>
                            <div class="col-sm">
                                <label class="form-label" for="sub_branch_id">
                                    {{ trans('cruds.trial.fields.employee_id') }}
                                </label>

                                <select name="employee_id" id="employee_id" class="form-control select2">

                                </select>
                            </div> --}}
                        </div>
                        <br>
                        <div class="row" style="justify-content: center">
                            <input type="submit" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-applicants">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Advertisement Num</th>
                            <th>Applicant Id</th>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Payment Verification</th>
                            <th>Application Verification</th>
                            <th>Paid Amount</th>
                            <th>Payment Gateway</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_blocks as $block)
                            @foreach ($block['entries'] as $entry)
                                <tr>
                                    <td></td>
                                    <td>{{ $entry->application->advertisement->advertisement_num ?? '' }}</td>
                                    <td>{{ $entry->application->user->applicant_id ?? '' }}</td>
                                    <td>{{ $entry->paymentVerification->rollno ?? '' }}</td>
                                    <td>{{ $entry->application->user->name ?? '' }}</td>
                                    <td>{{ $entry->application->user->email ?? '' }}</td>
                                    <td>{{ $entry->application->user->mobile_number ?? '' }}</td>
                                    <td>{{ $entry->payment_status == 1 ? $entry->created_at : '' }}</td>
                                    <td>
                                        {{ optional($entry->paymentVerification)->is_approved == true ? optional($entry->paymentVerification)->approved_at : '' }}
                                    </td>
                                    <td>{{ $entry->amount ?? '' }}</td>
                                    <td>{{ $entry->payment_gateway ?? '' }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .panel {
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            border-color: #ddd;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .panel-body {
            padding: 15px;
            box-sizing: border-box;
        }
    </style>
@endsection

@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('province_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.provinces.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });
                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')
                            return
                        }
                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan
            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-applicants:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

        $(document).ready(function() {
            var current_nepali_date = NepaliFunctions.GetCurrentBsDate('YYYY-MM-DD');
            var selectionDateInput = $('#date_from, #date_to');

            selectionDateInput.nepaliDatePicker({
                ndpYear: true,
                ndpMonth: true,
                ndpYearCount: 100,
                onChange: updateEquivalentAD,
                disableAfter: current_nepali_date
            });

            $('#date_from, #date_to').on('input', updateEquivalentAD);

            function updateEquivalentAD() {
                var selectedDate = $('#date_from').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#date_from_ad').val(equivalentAD);

                var selectedDate = $('#date_to').val();
                var equivalentAD = NepaliFunctions.BS2AD(selectedDate);
                $('#date_to_ad').val(equivalentAD);
            }
        });
    </script>
@endsection
