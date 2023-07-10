@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="card" style="background-color: #ffffff">

                <form>
                    <div class="card-body">
                        <div class="card-section">
                            <h3>
                                Applicants Informationzz
                            </h3>

                            <div class="p3">
                                <div class="row g-3 m-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label required">
                                            {{ trans('global.personalInfo.fields.name') }}
                                        </label>
                                        <input type="email" class="form-control required" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">
                                            {{ trans('global.personalInfo.fields.name_np') }}
                                        </label>
                                        <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputAddress" class="form-label">
                                            {{ trans('global.personalInfo.fields.mobile_number') }}
                                        </label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputAddress" class="form-label">
                                            {{ trans('global.personalInfo.fields.mobile_number') }}
                                        </label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection