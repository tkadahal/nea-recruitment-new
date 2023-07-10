@extends('layouts.admin')

@section('content')

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

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        <strong>{{ trans('global.tippani.title') }} </strong> {{ trans('global.list') }}

        @can('tippani_create')
        <a href="{{ route('admin.tippani.create') }}" class="btn btn-outline-success d-inline-block float-right">
            {{ trans('global.add') }} {{ trans('global.tippani.title_singular') }}
        </a>
        @endcan

    </div>

    <div class="card-body">
        {{-- <div class="panel panel-default">
            <div class="panel-body">
                <div class="row g-3">
                    <div class="col-sm">
                        <label class="form-label" for="directorate_id">
                            {{ trans('global.tippani.fields.fiscal_year_id') }}
                        </label>

                        <select name="fiscal_year_id" id="fiscal_year_id" class="form-control select2">
                            @foreach($fiscalYears as $fiscalYear)
                            <option value="{{ $fiscalYear->id }}">{{ $fiscalYear->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm">
                        <label class="form-label" for="business_id">
                            {{ trans('global.tippani.fields.user') }}
                        </label>

                        <select name="user_id" id="user_id" class="form-control select2">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm">
                        <label class="form-label" for="business_id">
                            Status
                        </label>

                        <select name="status_id" id="status_id" class="form-control select2">
                            @foreach($statuses as $status)
                            <option value="{{ $status->id }}">{{ $status->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <br> --}}
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-tippani text-center">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.tippani.fields.id') }}
                        </th>
                        <th>
                            {{ trans('global.tippani.fields.user') }}
                        </th>
                        <th>
                            {{ trans('global.tippani.fields.holding_user') }}
                        </th>
                        <th>
                            {{ trans('global.tippani.fields.category_id') }}
                        </th>
                        <th>
                            {{ trans('global.tippani.fields.title') }}
                        </th>
                        <th>
                            {{ trans('global.tippani.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tippanis as $key => $tippani)
                    <tr data-entry-id="{{ $tippani->id }}">
                        <td width="10">

                        </td>
                        <td>
                            {{ $tippani->id ?? '' }}
                        </td>
                        <td>
                            {{ $tippani->user->name ?? '' }}
                        </td>
                        <td>
                            {{ optional($tippani->tippaniApprovals->last())->approverOffice->OFFICE_DESC ??
                            $tippani->user->name }}
                        </td>
                        <td>
                            {{ $tippani->category->title ?? '' }}
                        </td>
                        <td>
                            {{ $tippani->title ?? '' }}
                        </td>
                        <td>
                            <span class="badge me-1 text-white"
                                style="background-color: {{ optional($tippani->tippaniApprovals->last())->status ? optional($tippani->tippaniApprovals->last())->status->color : '#441ce6' }}; color: #441ce6;">
                                {{ optional($tippani->tippaniApprovals->last())->status ?
                                optional($tippani->tippaniApprovals->last())->status->title : 'Pending' }}
                            </span>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="tippani Functions">

                                @can('tippani_show')
                                <a href="{{ route('admin.tippani.show', $tippani) }}" class="btn btn-primary btn-sm">
                                    {{ trans('global.show') }}
                                </a>
                                @endcan

                                @if($tippani->show_edit_delete_button)
                                @can('tippani_edit')
                                <a href="{{ route('admin.tippani.edit', $tippani) }}" class="btn btn-info btn-sm">
                                    {{ trans('global.edit') }}
                                </a>
                                @endcan

                                @can('tippani_delete')
                                <form action="{{ route('admin.tippani.destroy', $tippani) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        {{ trans('global.delete') }}
                                    </button>
                                </form>
                                @endcan
                                @endif
                                @if($tippani->show_action_button)
                                <a href="{{ route('admin.tippani.sendForAction', $tippani->id) }}"
                                    class="btn btn-warning btn-sm">
                                    {{ trans('global.action') }}
                                </a>
                                @endif

                                {{-- @if($tippani->show_send_for_approval_button)
                                <a href="{{ route('admin.tippani.sendForAction', ['action' => 'approval', 'id' => $tippani->id]) }}"
                                    class="btn btn-secondary btn-sm">
                                    Send For Approval
                                </a>
                                @endif

                                @if($user->id != $tippani->user_id && $tippani->show_send_for_modification_button)
                                <a href="{{ route('admin.tippani.sendForAction', ['action' => 'modification', 'id' => $tippani->id]) }}"
                                    class="btn btn-warning btn-sm">
                                    Send For Modification
                                </a>
                                @endif

                                @if($user->id != $tippani->user_id && $tippani->show_rejection_button)
                                <a href="{{ route('admin.tippani.sendForAction', ['action' => 'rejection', 'id' => $tippani->id]) }}"
                                    class="btn btn-danger btn-sm">
                                    Reject
                                </a>
                                @endif --}}
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
@can('tippani_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.tippanis.massDestroy') }}",
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
  $('.datatable-tippani:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endsection