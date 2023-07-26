@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>{{ trans('global.designation.title') }} </strong> {{ trans('global.list') }}

            @can('designation_create')
                <a href="{{ route('admin.designation.create') }}" class="btn btn-outline-success d-inline-block float-right">
                    {{ trans('global.add') }} {{ trans('global.designation.title_singular') }}
                </a>
            @endcan

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable datatable-designation">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('global.designation.fields.id') }}
                            </th>
                            <th>
                                {{ trans('global.designation.fields.title') }}
                            </th>
                            <th>
                                {{ trans('global.designation.fields.gender_id') }}
                            </th>
                            <th>
                                {{ trans('global.designation.fields.minimum_age') }}
                            </th>
                            <th>
                                {{ trans('global.designation.fields.maximum_age') }}
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
                        @foreach ($designations as $key => $designation)
                            <tr data-entry-id="{{ $designation->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $designation->id ?? '' }}
                                </td>
                                <td>
                                    {{ $designation->title ?? '' }}
                                </td>
                                <td>
                                    {{ $designation->gender->title ?? '' }}
                                </td>
                                <td>
                                    {{ $designation->minimum_age ?? '' }}
                                </td>
                                <td>
                                    {{ $designation->maximum_age ?? '' }}
                                </td>
                                <td>
                                    @livewire(
                                        'toggle-button',
                                        [
                                            'model' => $designation,
                                            'field' => 'active',
                                        ],
                                        key($designation->id)
                                    )
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="designation Functions">

                                        @can('designation_show')
                                            <a href="{{ route('admin.designation.show', $designation) }}"
                                                class="btn btn-primary btn-sm">
                                                {{ trans('global.show') }}
                                            </a>
                                        @endcan

                                        @can('designation_edit')
                                            <a href="{{ route('admin.designation.edit', $designation) }}"
                                                class="btn btn-info btn-sm">
                                                {{ trans('global.edit') }}
                                            </a>
                                        @endcan

                                        @can('designation_delete')
                                            <form action="{{ route('admin.designation.destroy', $designation) }}"
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
            @can('designation_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.designations.massDestroy') }}",
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
            $('.datatable-designation:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
@endsection
