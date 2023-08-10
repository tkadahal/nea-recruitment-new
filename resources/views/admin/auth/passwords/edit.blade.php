@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.change_password') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.profile.password.update') }}">
                @csrf
                <div class="form-group">
                    <label class="required" for="title">{{ trans('global.admin.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email"
                        id="email" value="{{ old('email', auth()->user()->email) }}" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="required" for="title">{{ trans('global.new') }}
                        {{ trans('global.admin.fields.password') }}</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" id="password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="required" for="title">{{ trans('global.admin.fields.repeat_new_password') }}</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation"
                        required>
                </div>
                <div class="form-group">
                    <input class="btn btn-danger" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
