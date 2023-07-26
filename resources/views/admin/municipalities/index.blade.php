@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>{{ trans('global.municipality.title') }} </strong> {{ trans('global.list') }}

            @can('municipality_create')
                <a href="{{ route('admin.municipality.create') }}" class="btn btn-outline-success d-inline-block float-right">
                    {{ trans('global.add') }} {{ trans('global.municipality.title_singular') }}
                </a>
            @endcan

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-municipality">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('global.municipality.fields.id') }}
                            </th>
                            <th>
                                {{ trans('global.municipality.fields.district_id') }}
                            </th>
                            <th>
                                {{ trans('global.municipality.fields.title') }}
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
                        @foreach ($municipalities as $key => $municipality)
                            <tr data-entry-id="{{ $municipality->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $municipality->id ?? '' }}
                                </td>
                                <td>
                                    {{ $municipality->district->title ?? '' }}
                                </td>
                                <td>
                                    {{ $municipality->title ?? '' }}
                                </td>
                                <td>
                                    @livewire(
                                        'toggle-button',
                                        [
                                            'model' => $municipality,
                                            'field' => 'active',
                                        ],
                                        key($municipality->id)
                                    )
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="municipality Functions">

                                        @can('municipality_show')
                                            <a href="{{ route('admin.municipality.show', $municipality) }}"
                                                class="btn btn-primary btn-sm">
                                                {{ trans('global.show') }}
                                            </a>
                                        @endcan

                                        @can('municipality_edit')
                                            <a href="{{ route('admin.municipality.edit', $municipality) }}"
                                                class="btn btn-info btn-sm">
                                                {{ trans('global.edit') }}
                                            </a>
                                        @endcan

                                        @can('municipality_delete')
                                            <form action="{{ route('admin.municipality.destroy', $municipality) }}"
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
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('municipality_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.municipalities.massDestroy') }}",
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
            $('.datatable-municipality:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
