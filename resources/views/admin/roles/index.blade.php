@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>{{ trans('global.role.title') }} </strong> {{ trans('global.list') }}

        @can('role_create')
        <a href="{{ route('admin.role.create') }}" class="btn btn-outline-success d-inline-block float-right">
            {{ trans('global.add') }} {{ trans('global.role.title_singular') }}
        </a>
        @endcan
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Role">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.role.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.role.fields.title') }}
                        </th>
                        <th>
                            {{ trans('global.role.fields.permissions') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $key => $role)
                    <tr data-entry-id="{{ $role->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $role->id ?? '' }}
                        </td>
                        <td>
                            {{ $role->title ?? '' }}
                        </td>
                        <td>
                            @foreach($role->permissions as $key => $item)
                            <span class=" badge badge-info">
                                {{ $item->title }}
                            </span>
                            @endforeach
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Role Functions">

                                @can('role_show')
                                <a class="btn btn-xs btn-primary btn-sm" href="{{ route('admin.role.show', $role) }}">
                                    {{ trans('global.show') }}
                                </a>
                                @endcan

                                @can('role_edit')
                                <a class="btn btn-xs btn-info btn-sm" href="{{ route('admin.role.edit', $role) }}">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan

                                @can('role_delete')
                                <form action="{{ route('admin.role.destroy', $role) }}" method="POST"
                                    onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-xs btn-danger btn-sm"
                                        value="{{ trans('global.delete') }}">
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
@can('role_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.roles.massDestroy') }}",
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
  $('.datatable-Role:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection