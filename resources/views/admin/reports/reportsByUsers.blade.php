@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>
                User
            </strong>
            {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col">
                    @foreach ($list_blocks as $block)
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-users">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Applicant Id</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Mobile Number</th>
                                        <th>Email</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($block['entries'] as $entry)
                                        <tr>
                                            <td></td>
                                            <td>{{ $entry->applicant_id ?? '' }}</td>
                                            <td>{{ $entry->name ?? '' }}</td>
                                            <td>{{ $entry->gender->title ?? '' }}</td>
                                            <td>{{ $entry->mobile_number ?? '' }}</td>
                                            <td>{{ $entry->email ?? '' }}</td>
                                            <td>
                                                @if ($entry->media->where('media_type_id', 1)->isNotEmpty())
                                                    {!! $entry->media->where('media_type_id', 1)->first()->toSmallImageString() !!}
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            $('.datatable-users:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
