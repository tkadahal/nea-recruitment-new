@extends('layouts.admin')

@section('content')

<div class="form-group">
    <a class="btn btn-warning" href="{{ url()->previous() }}">
        {{ trans('global.back_to_list') }}
    </a>
</div>

<div class="card">
    <div class="card-header"><i class="fa fa-align-justify"></i>
        {{ trans('global.show') }} <strong> {{ trans('global.municipality.title_singular') }}</strong>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.municipality.fields.district_id') }}
                    </th>
                    <td>
                        {{ $municipality->district->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.municipality.fields.title') }}
                    </th>
                    <td>
                        {{ $municipality->title ?? '' }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.municipality.fields.created_at') }}
                    </th>
                    <td>
                        {{ $municipality->created_at->diffForHumans() ?? '' }}
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