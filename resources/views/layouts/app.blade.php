<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NEA-Recruitment Panel">
    <meta name="author" content="Tika Dahal">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Custom fonts for this template -->
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" media="all">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css"
        integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('nepali.datepicker.v4.0/css/nepali.datepicker.v4.0.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('frontend/img/favicon.svg') }}" type="image/gif">

    <!-- Custom styles for this template -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    @yield('styles')

    <style>
        label {
            font-weight: bold;
        }

        .card {
            background-color: #ecf0f9 !important;
        }

        .select2 {
            max-width: 100%;
            /* width: 100% !important; */
        }

        .select2-selection__rendered {
            padding-bottom: 5px !important;
        }

        .select2-container {
            height: 35px;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 4px;
            height: 35px;
            background-color: #f8fafc;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 32px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 30px;
            position: absolute;
            top: 1px;
            right: 1px;
            width: 20px;
        }

        .help-block {
            color: red;
            font-style: italic;
        }

        .form-group .required::after {
            content: " *";
            color: red;
        }

        .nav-tabs.nav-justified {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none;
            background-color: #007bff;
            border-radius: 4px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.05);
        }

        .card {
            background-color: #f8faff;
            border: none;
            border-radius: 15px;
            padding: 40px;
        }

        .card-body {
            padding: 0;
        }

        .card-section {
            border: 1px solid #dbdbdb;
            border-radius: 5px;
            margin-bottom: 40px;
            padding: 10px;
            position: relative;
        }

        .card-section h3 {
            background: #f8faff;
            color: #2680eb;
            font-size: 18px;
            /* font-size: .938rem; */
            font-weight: 600;
            margin-bottom: 20px;
            padding: 0 5px 5px;
            position: absolute;
            top: -10px;
        }

        .btn {
            border-radius: 3rem;
        }

        .radio-button {
            display: none;
            /* Hide the default radio button */
        }

        .btn.active {
            background-color: #0d6efd;
            border-color: #0d6efd;
            padding-right: 20px;
        }


        .btn.active .fa-check-circle {
            color: #31511f;
            /* Show check circle when active */
            display: inline-block;
        }

        .fa-check-circle {
            display: none;
            /* Hide check circle by default */
        }

        .custom-radio-buttons {

            box-shadow: 0 0 0 0.1 #0d6efd;

        }

        .input-group {
            position: relative;
        }

        .date-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .dropdown-header {
            background-color: #eeeeee;
            border-bottom: 1px solid #000000;
            color: black;
        }

        .dropdown-menu .dropdown-item {
            border-bottom: 1px solid #dedcdc;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            {{-- <div class="row g-3"> --}}
            {{-- <div class="col-md-9 text-start">
                    <a href="#"><img src="{{ asset('frontend/img/nea-login.png') }}"></a>
                </div> --}}
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <a href="#">
                        <img src="{{ asset('storage/logos/nea-mini.png') }}" width="100" height="100" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item" style="padding-right: 2rem">
                                <a class="btn btn-info" href="{{ route('support') }}">
                                    {{ trans('global.support.title_singular') }}
                                </a>
                            </li>

                            @if (count(config('panel.available_languages', [])) > 1)
                                <li class="nav-item dropdown" style="padding-right: 2rem">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        @if (app()->getLocale() == 'np')
                                            <x-flag-country-np style="width: 25px" />
                                        @else
                                            <x-flag-country-us style="width: 25px" />
                                        @endif
                                        {{-- &nbsp;
                                        {{ strtoupper(app()->getLocale()) }} --}}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        @foreach (config('panel.available_languages') as $langLocale => $langName)
                                            <a class="dropdown-item"
                                                href="{{ url()->current() }}?change_language={{ $langLocale }}">
                                                @if ($langLocale == 'np')
                                                    <x-flag-country-np style="width: 25px" />
                                                @else
                                                    <x-flag-country-us style="width: 25px" />
                                                @endif
                                                &nbsp;
                                                {{ strtoupper($langLocale) }} ({{ $langName }})
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                            @endif

                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>{{ auth()->user()->name }}<br>
                                        Applicant Id: {{ auth()->user()->applicant_id }}</b>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <div class="dropdown-header"><strong>Account</strong></div>
                                    @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                                        <a class="dropdown-item {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                                            href="{{ route('profile.password.edit') }}">
                                            {{ trans('global.change_password') }}
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ trans('global.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- <div class="col-md-3 justify-content-end">
                    <ul class="navbar-nav ms-auto">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class=" dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div> --}}
            {{--
            </div> --}}
        </div>
    </header>
    <section class="head-title text-center">
        <div class="container">
            {{-- <div class="row">
                <div class="col-md-6">
                    <h1>थ्री फेज अनलाईन आवेदन</h1>
                </div>
                <div class="col-md-6">
                    <h1>सबै बिज्ञापनहरु हेर्नुहोस</h1>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- <section class="mt-2">
        <div class="container">
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-success">Save & Next</button>
            </div>
        </div>
    </section> --}}

    <!-- Step Wizard -->
    <section class="step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    @if (!request()->is('support') && !request()->is('profile/password'))
                        @include('user.navigation.nav-bar')
                    @endif
                    <div role="tabpanel">
                        <div class="card">
                            @if (!request()->is('profile/password'))
                                <div class="row">
                                    <div class="col d-flex justify-content-end">
                                        <p class="mb-0">
                                            <span style="color: #a307eb">
                                                {{ trans('global.nepaliAssistant') }}&nbsp;
                                                <a href="https://www.google.com/inputtools/try/" target="_blank">
                                                    {{ trans('global.nepaliAssistnatLink') }}
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"
        integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA=="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"
        integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('nepali.datepicker.v4.0/js/nepali.datepicker.v4.0.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    @yield('scripts')

</body>

</html>
