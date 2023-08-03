@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.level.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.level.fields.group_id') }}
                    </th>
                    <td>
                        {{ $level->group->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.level.fields.title') }}
                    </th>
                    <td>
                        {{ $level->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.level.fields.created_at') }}
                    </th>
                    <td>
                        {{ $level->created_at->diffForHumans() ?? '' }}
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