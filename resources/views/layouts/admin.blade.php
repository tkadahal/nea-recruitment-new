<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('global.site_title') }}</title>

    <link href="{{ asset('storage/logo/nea.png') }}" rel="shortcut icon" type="image/png">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
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

    <link href="https://unpkg.com/@coreui/coreui@3.4.0/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css"
        integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('nepali.datepicker.v4.0/css/nepali.datepicker.v4.0.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')

    @livewireStyles

</head>

<body class="c-app">
    @include('admin.partials.menu')

    <div class="c-wrapper c-fixed-components">

        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
                <svg class="c-icon c-icon-lg">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                </svg>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <li class="c-header-nav-item px-3">
                    <a class="c-header-nav-link" href="{{ route('admin.home') }}">
                        {{ trans('global.home') }}
                    </a>
                </li>
                {{-- <li class="c-header-nav-item px-3">
                    <a class="c-header-nav-link" href="{{ route('admin.user.index') }}">
                        {{ trans('global.user.title') }}
                    </a>
                </li> --}}
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="c-header-nav ml-auto mr-4">
                @if (count(config('panel.available_languages', [])) > 1)
                <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        @if (app()->getLocale() == 'np')
                        <x-flag-country-np style="width: 25px" />
                        @else
                        <x-flag-country-us style="width: 25px" />
                        @endif
                        &nbsp;
                        {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        @foreach (config('panel.available_languages') as $langLocale => $langName)
                        <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">
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

                <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                        </svg>
                    </a>
                </li>

                <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} &nbsp;
                        <svg class="c-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                        @if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                        @can('profile_password_edit')
                        <a class="dropdown-item {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}"
                            href="{{ route('profile.password.edit') }}">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                </use>
                            </svg>
                            {{ trans('global.change_password') }}
                        </a>
                        @endcan
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                            <svg class="c-icon mr-2">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                </use>
                            </svg>
                            {{ trans('global.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>

            </ul>
        </header>

        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- @if (session('message'))
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                                    </div>
                                </div>
                                @endif --}}
                                @if ($errors->count() > 0)
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="c-footer">
                <div><strong>{{ trans('global.site_title') }} &copy;</strong> {{ trans('global.allRightsReserved') }}
                </div>
                <div class="ml-auto">This page took&nbsp;{{ round(microtime(true) - LARAVEL_START, 3) }} seconds to
                    load</div>
            </footer>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then CoreUI JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"
        integrity="sha512-yUNtg0k40IvRQNR20bJ4oH6QeQ/mgs9Lsa6V+3qxTj58u2r+JiAYOhOW0o+ijuMmqCtCEg7LZRA+T4t84/ayVA=="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.4.0/dist/js/coreui.min.js"></script>
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
    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
            let selectAllButtonTrans = '{{ trans('global.datatables.select_all') }}'
            let selectNoneButtonTrans = '{{ trans('global.datatables.deselect_all') }}'
            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };
            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style: 'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [{
                        extend: 'selectAll',
                        className: 'btn-primary',
                        text: selectAllButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        },
                        action: function(e, dt) {
                            e.preventDefault()
                            dt.rows().deselect();
                            dt.rows({
                                search: 'applied'
                            }).select();
                        }
                    },
                    {
                        extend: 'selectNone',
                        className: 'btn-primary',
                        text: selectNoneButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });
            $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>

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
    @stack('togglescript')
    @yield('scripts')

    @livewireScripts

</body>

</html>