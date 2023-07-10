@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>{{ trans('global.office.title') }} </strong> {{ trans('global.list') }}

        @can('office_create')
        <a href="{{ route('admin.office.create') }}" class="btn btn-outline-success d-inline-block float-right">
            {{ trans('global.add') }} {{ trans('global.office.title_singular') }}
        </a>
        @endcan

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-office">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.office.fields.ID') }}
                        </th>
                        <th>
                            {{ trans('global.office.fields.OFFICE_CD') }}
                        </th>
                        <th>
                            {{ trans('global.office.fields.OFFICE_DESC') }}
                        </th>
                        <th>
                            {{ trans('global.office.fields.UPPER_OFFICE_CD') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($offices as $key => $office)
                    <tr data-entry-id="{{ $office->ID }}">
                        <td>

                        </td>
                        <td>
                            {{ $office->ID ?? '' }}
                        </td>
                        <td>
                            {{ $office->OFFICE_CD ?? '' }}
                        </td>
                        <td>
                            {{ $office->OFFICE_DESC ?? '' }}
                        </td>
                        <td>
                            {{ $office->UPPER_OFFICE_CD ?? '' }}
                        </td>
                        <td>
                            {{-- <div class="btn-group" role="group" aria-label="office Functions">

                                @can('office_show')
                                <a href="{{ route('admin.office.show', $office) }}" class="btn btn-primary btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                                @endcan

                                @can('office_edit')
                                <a href="{{ route('admin.office.edit', $office) }}" class="btn btn-info btn-sm">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan

                                @can('office_delete')
                                <form action="{{ route('admin.office.destroy', $office) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ trans('global.delete') }}
                                    </button>
                                </form>
                                @endcan

                            </div> --}}
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
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-office:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection