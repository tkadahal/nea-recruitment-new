@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.role.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.role.fields.title') }}
                    </th>
                    <td>
                        {{ $role->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.role.fields.permissions') }}
                    </th>
                    <td>
                        @foreach($role->permissions as $id => $permissions)
                        <span class="badge me-1 bg-info text-white">
                            {{ $permissions->title ?? '' }}
                        </span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.role.fields.created_at') }}
                    </th>
                    <td>
                        {{ $role->created_at->diffForHumans() ?? '' }}
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