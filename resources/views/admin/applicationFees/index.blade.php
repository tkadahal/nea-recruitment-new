@extends('layouts.admin')

@section('content')

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>{{ trans('global.applicationFee.title') }} </strong> {{ trans('global.list') }}

        @can('applicationFee_create')
        <a href="{{ route('admin.applicationFee.create') }}" class="btn btn-outline-success d-inline-block float-right">
            {{ trans('global.add') }} {{ trans('global.applicationFee.title_singular') }}
        </a>
        @endcan

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-applicationFee">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.title') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.open') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.female') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.janajati') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.madhesi') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.dalit') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.disabled') }}
                        </th>
                        <th>
                            {{ trans('global.applicationFee.fields.rural') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applicationFees as $key => $applicationFee)
                    <tr data-entry-id="{{ $applicationFee->id }}">
                        <td>

                        </td>
                        <td>
                            {{ $applicationFee->id ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->title ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->open ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->female ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->janajati ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->madhesi ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->dalit ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->disabled ?? '' }}
                        </td>
                        <td>
                            {{ $applicationFee->rural ?? '' }}
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="applicationFee Functions">

                                @can('applicationFee_show')
                                <a href="{{ route('admin.applicationFee.show', $applicationFee) }}"
                                    class="btn btn-primary btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                                @endcan

                                @can('applicationFee_edit')
                                <a href="{{ route('admin.applicationFee.edit', $applicationFee) }}"
                                    class="btn btn-info btn-sm">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan

                                @can('applicationFee_delete')
                                <form action="{{ route('admin.applicationFee.destroy', $applicationFee) }}"
                                    method="POST" style="display: inline-block">
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
@can('applicationFee_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.applicationFees.massDestroy') }}",
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
  $('.datatable-applicationFee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection