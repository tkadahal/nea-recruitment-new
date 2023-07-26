@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>{{ trans('global.fiscalYear.title') }} </strong> {{ trans('global.list') }}

            @can('fiscalYear_create')
                <a href="{{ route('admin.fiscalYear.create') }}" class="btn btn-outline-success d-inline-block float-right">
                    {{ trans('global.add') }} {{ trans('global.fiscalYear.title_singular') }}
                </a>
            @endcan

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-fiscalYear">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('global.fiscalYear.fields.id') }}
                            </th>
                            <th>
                                {{ trans('global.fiscalYear.fields.title') }}
                            </th>
                            <th>
                                {{ trans('global.fiscalYear.fields.color') }}
                            </th>
                            <th>
                                {{ trans('global.published') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fiscalYears as $key => $fiscalYear)
                            <tr data-entry-id="{{ $fiscalYear->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $fiscalYear->id ?? '' }}
                                </td>
                                <td>
                                    {{ $fiscalYear->title ?? '' }}
                                </td>
                                <td>
                                    @livewire(
                                        'toggle-button',
                                        [
                                            'model' => $fiscalYear,
                                            'field' => 'active',
                                        ],
                                        key($fiscalYear->id)
                                    )
                                </td>
                                <td style="background-color:{{ $fiscalYear->color ?? '#FFFFFF' }}"></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="fiscalYear Functions">

                                        @can('fiscalYear_show')
                                            <a href="{{ route('admin.fiscalYear.show', $fiscalYear) }}"
                                                class="btn btn-primary btn-sm">
                                                {{ trans('global.show') }}
                                            </a>
                                        @endcan

                                        @can('fiscalYear_edit')
                                            <a href="{{ route('admin.fiscalYear.edit', $fiscalYear) }}"
                                                class="btn btn-info btn-sm">
                                                {{ trans('global.edit') }}
                                            </a>
                                        @endcan

                                        @can('fiscalYear_delete')
                                            <form action="{{ route('admin.fiscalYear.destroy', $fiscalYear) }}" method="POST"
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('fiscalYear_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.fiscalYears.massDestroy') }}",
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
            $('.datatable-fiscalYear:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
