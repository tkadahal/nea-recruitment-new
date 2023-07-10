@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.subGroup.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.subGroup.fields.group_id') }}
                    </th>
                    <td>
                        {{ $subGroup->group->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.subGroup.fields.title') }}
                    </th>
                    <td>
                        {{ $subGroup->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.subGroup.fields.created_at') }}
                    </th>
                    <td>
                        {{ $subGroup->created_at->diffForHumans() ?? '' }}
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