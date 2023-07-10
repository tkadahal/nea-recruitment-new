@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">

    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.user.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.user.fields.user_type_id') }}
                    </th>
                    <td>
                        <span class="badge me-1 bg-danger text-white">
                            {{ $user->userType->title ?? '' }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.name') }}
                    </th>
                    <td>
                        {{ $user->name ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.email') }}
                    </th>
                    <td>
                        {{ $user->email ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.email_verified_at') }}
                    </th>
                    <td>
                        {{ $user->email_verified_at ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.roles') }}
                    </th>
                    <td>
                        @foreach($user->roles as $id => $roles)
                        <span class="badge me-1 bg-info text-white">
                            {{ $roles->title ?? '' }}
                        </span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.user.fields.created_at') }}
                    </th>
                    <td>
                        {{ $user->created_at->diffForHumans() ?? '' }}
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