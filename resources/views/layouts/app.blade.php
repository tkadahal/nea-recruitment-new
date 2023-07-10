<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    {{--
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css"
        integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('nepali.datepicker.v4.0/css/nepali.datepicker.v4.0.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" /> --}}

    <style>
        /* label {
            font-size: 15px;
        } */

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

        .has-error .invalid-feedback {
            display: block !important;
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

        .nav-tabs.nav-justified .nav-item {
            position: relative;
            flex-basis: 0;
            flex-grow: 1;
            text-align: center;
            border-right: 1px solid #dee2e6;
            max-height: 55px;
            font-weight: bold;
        }

        .nav-tabs.nav-justified .nav-item:last-child {
            border-right: none;
        }

        .nav-tabs.nav-justified .nav-link {
            display: block;
            padding: 0.5rem;
            color: #faf8f8;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            max-height: 55px;
        }

        .nav-tabs.nav-justified .nav-link:hover,
        .nav-tabs.nav-justified .nav-link:focus {
            background-color: #e9ecef;
        }

        .nav-tabs.nav-justified .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .nav-tabs.nav-justified .slider {
            position: absolute;
            top: 0;
            left: 0;
            height: 2px;
            width: 100%;
            background-color: #007bff;
        }

        .nav-tabs.nav-justified .nav-item::before {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: -1px;
            width: 1px;
            height: 50%;
            /* Adjust the height as needed */
            background-color: #dee2e6;
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
            background: #ffffff;
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

        ul li {
            list-style-type: none;
            padding: 0;
            margin: 0;
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

        .nav-container {
            position: relative;
        }

        .nav-icon {
            display: none;
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


        @media screen and (max-width: 999px) {

            ul li a {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .nav.nav-tabs {
                display: none;
            }

            .nav-icon {
                display: block;
            }

            .nav.nav-tabs.show {
                text-decoration: none;
                display: block;
                width: 100%;
                background-color: #0d6efd;
                justify-content: center;

            }
        }


        @media (max-width: 1400px) {

            .nav-tabs.nav-justified .nav-link {
                display: block;
                padding: 0.5rem !important;
                color: #faf8f8;
                text-decoration: none;
                border: none;
                border-radius: 4px;
                transition: background-color 0.3s ease;
                max-height: 55px;
            }

        }
    </style>
</head>

<body style="font-size: 15px">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                                {{ Auth::user()->email }}
                                {{ Auth::user()->mobile_number }}
                                {{ Auth::user()->applicant_id }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <ul class="nav nav-tabs nav-justified flex-column flex-lg-row" role="tablist">
                            <div class="slider"></div>
                            <li class="nav-item vacancy_menu">
                                <a class="nav-link" id="vacancy" href="{{ route('personalDetail') }}"><i
                                        class="fas fa-home"></i>
                                    Personal Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href="{{ route('contactDetail') }}"><i
                                        class="fas fa-home"></i>
                                    Contact Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href="{{ route('educationDetail.index') }}"><i
                                        class="fas fa-home"></i>
                                    Education Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href="{{ route('trainingDetail.index') }}"><i
                                        class="fas fa-home"></i>
                                    Training Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href="{{ route('experienceDetail.index') }}"><i
                                        class="fas fa-home"></i>
                                    Experience Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href="{{ route('uploads') }}"><i
                                        class="fas fa-home"></i>
                                    Uploads
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="vacancy" href=""><i class="fas fa-home"></i>
                                    Preview
                                </a>
                            </li>
                        </ul>
                        <br>
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"
            integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA=="
            crossorigin="anonymous"></script>

        <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"
            integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('nepali.datepicker.v4.0/js/nepali.datepicker.v4.0.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('scripts')
    </div>
</body>

</html>