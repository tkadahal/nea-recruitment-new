@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.position.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.position.fields.category_id') }}
                    </th>
                    <td>
                        {{ $position->category>title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.position.fields.group_id') }}
                    </th>
                    <td>
                        {{ $position->group->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.position.fields.level_id') }}
                    </th>
                    <td>
                        {{ $position->level->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.position.fields.title') }}
                    </th>
                    <td>
                        {{ $position->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.position.fields.created_at') }}
                    </th>
                    <td>
                        {{ $position->created_at->diffForHumans() ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <a class="btn btn-warning" href="{{ url()->previous() }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>

@endsection