<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">

        <img src="{{ asset('storage/logos/nea-full.png') }}" alt="{{ config('app.name') }}"
            class="c-sidebar-brand-full center" width="90%" height="32" />

        {{-- <svg class="c-sidebar-brand-full" width="118" height="46" alt="NEA Logo">
            <img src="{{ asset('storage/logo/thl-logo.png') }}" alt="{{ config('app.name') }}" class="center" />
        </svg> --}}
    </div>
    <ul class="c-sidebar-nav ps">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.home') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"
                        style="color: yellow"></use>
                </svg>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>

        @can('adminMenu_access')

            @can('user_management_access')

                <li class="c-sidebar-nav-title">{{ trans('global.adminMenu.title') }}</li>

                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        {{ trans('global.userManagement.title') }}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        @can('permission_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.permission.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.permission.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('role_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.role.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.role.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('admin_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.admin.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.admin.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('state_management_access')
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-library-building') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        {{ trans('global.stateManagement.title') }}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        @can('province_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.province.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.province.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('district_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.district.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.district.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('municipality_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.municipality.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.municipality.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('category_management_access')
                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-library-building') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        {{ trans('global.categoryManagement.title') }}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        @can('category_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.category.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.category.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('group_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.group.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.group.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('subGroup_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.subGroup.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.subGroup.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('level_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.level.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.level.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('position_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.position.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.position.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('setting_management_access')

                <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                    <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-apps-settings') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        {{ trans('global.settingManagement.title') }}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">

                        @can('paymentVendor_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.paymentVendor.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.paymentVendor.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('fiscalYear_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.fiscalYear.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.fiscalYear.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('country_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.country.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.country.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('gender_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.gender.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.gender.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('mediaType_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.mediaType.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.mediaType.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('qualification_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.qualification.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.qualification.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('university_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.university.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.university.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('division_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.division.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.division.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('recruitmentType_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.recruitmentType.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.recruitmentType.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('designation_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.designation.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.designation.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('applicationFee_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.applicationFee.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.applicationFee.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('samabeshiGroup_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.samabeshiGroup.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.samabeshiGroup.title') }}
                                </a>
                            </li>
                        @endcan

                        @can('examCenter_access')
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ route('admin.examCenter.index') }}">
                                    <span class="c-sidebar-nav-icon"></span>
                                    {{ trans('global.examCenter.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>

            @endcan

            @can('menu_access')

                <li class="c-sidebar-nav-title">{{ trans('global.menu.title') }}</li>

                @can('advertisement_access')
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link"
                            href="{{ route('admin.advertisement.index') }}">
                            <svg class="c-sidebar-nav-icon">
                                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"
                                    style="color: yellow">
                                </use>
                            </svg> {{ trans('global.advertisement.title') }}</a></li>
                @endcan

            @endcan

            @can('application_access')
                <li class="c-sidebar-nav-title">{{ trans('global.applicationMenu.title') }}</li>

                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.application.index') }}">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"
                                style="color: yellow">
                            </use>
                        </svg> {{ trans('global.application.title') }}</a></li>
            @endcan

        @endcan

        {{-- @can('menu_access')

        <li class="c-sidebar-nav-title">{{ trans('global.menu.title') }}</li>

        @can('tippani_access')
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.tippani.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}" style="color: yellow">
                    </use>
                </svg> {{ trans('global.tippani.title') }}</a></li>
        @endcan

        @endcan --}}

        @can('report_menu_access')

            <li class="c-sidebar-nav-title">{{ trans('global.reportMenu.title') }}</li>

            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-chart') }}"
                            style="color: yellow">
                        </use>
                    </svg>
                    {{ trans('global.report.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                    @can('reportByPaymentVendor_access')
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.getReportByPaymentVendors') }}">
                                <span class="c-sidebar-nav-icon"></span>
                                Payment Vendor
                            </a>
                        </li>
                    @endcan

                    @can('reportByApplicationCount_access')
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.getReportByApplicationCount') }}">
                                <span class="c-sidebar-nav-icon"></span>
                                Application Count
                            </a>
                        </li>
                    @endcan

                    {{-- @can('reportByCategory_access')
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.reportByCategory') }}">
                                <span class="c-sidebar-nav-icon"></span>
                                {{ trans('global.reportByCategory.title') }}
                            </a>
                        </li>
                    @endcan

                    @can('reportByStatus_access')
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.reportByStatus') }}">
                                <span class="c-sidebar-nav-icon"></span>
                                {{ trans('global.reportByStatus.title') }}
                            </a>
                        </li>
                    @endcan

                    @can('reportByUserType_access')
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="{{ route('admin.reportByUserType') }}">
                                <span class="c-sidebar-nav-icon"></span>
                                {{ trans('global.reportByUserType.title') }}
                            </a>
                        </li>
                    @endcan --}}
                </ul>
            </li>

            {{-- @can('menu_access') --}}

            {{-- <li class="c-sidebar-nav-title">{{ trans('global.menu.title') }}</li> --}}

            @can('viewLog_access')
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ url('admin/log-viewer') }}">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        View Log
                    </a>
                </li>
            @endcan


            @can('support_access')
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('admin.support.index') }}">
                        <svg class="c-sidebar-nav-icon">
                            <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list') }}"
                                style="color: yellow">
                            </use>
                        </svg>
                        {{ trans('global.support.title') }}
                    </a>
                </li>
            @endcan

            {{-- @endcan --}}

        @endcan

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div>
