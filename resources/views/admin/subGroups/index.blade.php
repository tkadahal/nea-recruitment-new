@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>{{ trans('global.subGroup.title') }} </strong> {{ trans('global.list') }}

        @can('subGroup_create')
        <a href="{{ route('admin.subGroup.create') }}" class="btn btn-outline-success d-inline-block float-right">
            {{ trans('global.add') }} {{ trans('global.subGroup.title_singular') }}
        </a>
        @endcan

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-subGroup">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.subGroup.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.subGroup.fields.group_id') }}
                        </th>
                        <th>
                            {{ trans('global.subGroup.fields.title') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subGroups as $key => $subGroup)
                    <tr data-entry-id="{{ $subGroup->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $subGroup->id ?? '' }}
                        </td>
                        <td>
                            {{ $subGroup->group->title ?? '' }}
                        </td>
                        <td>
                            {{ $subGroup->title ?? '' }}
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="subGroup Functions">

                                @can('subGroup_show')
                                <a href="{{ route('admin.subGroup.show', $subGroup) }}" class="btn btn-primary btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                                @endcan

                                @can('subGroup_edit')
                                <a href="{{ route('admin.subGroup.edit', $subGroup) }}" class="btn btn-info btn-sm">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan

                                @can('subGroup_delete')
                                <form action="{{ route('admin.subGroup.destroy', $subGroup) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ trans('global.delete') }}
                                    </button>
                                </form>
                                @endcan

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
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('subGroup_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.subGroups.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')
        return
      }
      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-subGroup:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection