<!doctype html>
<html lang="en" data-layout="vertical" data-bs-theme="{{ config('theme.bs_theme') }}"
    data-topbar="{{ config('theme.topbar') }}" data-sidebar="{{ config('theme.sidebar') }}"
    data-layout-width="{{ config('theme.layout_width') }}"
    data-sidebar-size="{{ config('theme.layout_width') == 'boxed' ? 'sm-hover' : 'lg' }}" data-sidebar-image="none"
    data-preloader="disable">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name') }}</title>

    <!-- plugin css -->
    <link href="<?php echo asset('libs/jsvectormap/css/jsvectormap.min.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="<?php echo asset('js/layout.js'); ?>"></script>
    <!-- Bootstrap Css -->
    <link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo asset('css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo asset('css/app.min.css'); ?>" rel="stylesheet" type="text/css" />
    {{-- Custom CSS --}}
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom styles for date and time picker -->
    <link href="<?php echo asset('css/bootstrap-datepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/bootstrap-timepicker.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/select2.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset('css/calentim.min.css'); ?>" rel="stylesheet">

    {{-- DataTables  --}}
    <link rel="stylesheet" href="{{ asset('libs/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('libs/tagify/dist/tagify.css') }}">

</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a class="logo logo-dark">
                                <span class="logo-sm">
                                    <h3 class="fw-bolder">Booking System</h3>
                                </span>
                            </a>

                            <a class="logo logo-light">
                                <span class="logo-sm">
                                    <h3 class="fw-bolder">Booking System</h3>
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                    </div>

                    <div class="d-flex align-items-center">

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-primary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='las la-expand fs-24'></i>
                            </button>
                        </div>

                        <div class="dropdown header-item">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('images/users/avatar-4.jpg') }}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block fw-medium user-name-text fs-16">

                                            <i class="las la-angle-down fs-12 ms-1"></i></span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}">
                                    <i class="bx bx-power-off fs-15 align-middle me-1 text-danger"></i>
                                    <span key="t-logout">Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="" class="logo logo-dark">
                    <span class="logo-sm">
                        <h3 class="fw-bolder">Booking System</h3>
                    </span>
                    <span class="logo-lg">
                        <h3 class="fw-bolder">Booking System</h3>
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="" class="logo logo-light">
                    <span class="logo-sm">
                        <h3 class="fw-bolder">Booking System</h3>
                    </span>
                    <span class="logo-lg">
                        <h3 class="fw-bolder">Booking System</h3>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            {{-- Sidebar --}}
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="" class="logo logo-dark">
                        <span class="logo-lg">
                            <h3 class="fw-bolder mt-3">Booking System</h3>
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="" class="logo logo-light">
                        <span class="logo-sm">
                            <h3 class="fw-bolder">Booking System</h3>
                        </span>
                        <span class="logo-lg">
                            <h3 class="fw-bolder">Booking System</h3>
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar" data-simplebar="init" class="h-100 simplebar-scrollable-y">
                    <div class="simplebar-wrapper" style="margin: 0px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer"></div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                    aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                    <div class="simplebar-content" style="padding: 0px;">
                                        <div class="container-fluid">

                                            <div id="two-column-menu"></div>

                                            {{-- Menu --}}
                                            <ul class="navbar-nav" id="navbar-nav" data-simplebar="init">
                                                <div class="simplebar-wrapper" style="margin: 0px;">
                                                    <div class="simplebar-height-auto-observer-wrapper">
                                                        <div class="simplebar-height-auto-observer"></div>
                                                    </div>
                                                    <div class="simplebar-mask">
                                                        <div class="simplebar-offset"
                                                            style="right: 0px; bottom: 0px;">
                                                            <div class="simplebar-content-wrapper" tabindex="0"
                                                                role="region" aria-label="scrollable content"
                                                                style="height: auto; overflow: hidden;">
                                                                <div class="simplebar-content" style="padding: 0px;">
                                                                    @role('super-admin')
                                                                        <li class="menu-title">
                                                                            <span data-key="t-menu">Menu</span>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="nav-link menu-link {{ request()->is('admin/employees', 'admin/employees/*') ? 'active' : '' }}"
                                                                                href="#sidebaremployees"
                                                                                data-bs-toggle="collapse" role="button"
                                                                                aria-expanded="false"
                                                                                aria-controls="sidebaremployees">
                                                                                <i class="las la-users"></i> <span
                                                                                    data-key="t-users">Employees</span>
                                                                            </a>
                                                                            <div class="collapse menu-dropdown {{ request()->is('admin/employees', 'admin/employees/*') ? 'show' : '' }}"
                                                                                id="sidebaremployees">
                                                                                <ul class="nav nav-sm flex-column">
                                                                                    <li class="nav-item">
                                                                                        <a href="{{ route('employee.create') }}"
                                                                                            class="nav-link {{ request()->is('admin/employees/create') ? 'active' : '' }}"
                                                                                            data-key="t-users"> Create User
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a href="{{ route('employee.index') }}"
                                                                                            class="nav-link {{ request()->is('admin/employees', 'admin/employees/edit/*') ? 'active' : '' }}"
                                                                                            data-key="t-users"> Manage
                                                                                            Employees </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </li>
                                                                    @endrole
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="simplebar-placeholder"
                                                        style="width: 260px; height: 932px;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="width: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical"
                                                    style="visibility: hidden;">
                                                    <div class="simplebar-scrollbar"
                                                        style="height: 0px; display: none;"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-horizontal">
                                                    <div class="simplebar-scrollbar"></div>
                                                </div>
                                                <div class="simplebar-track simplebar-vertical">
                                                    <div class="simplebar-scrollbar"></div>
                                                </div>
                                            </ul>

                                        </div>
                                        <!-- Sidebar -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="simplebar-placeholder" style="width: 260px; height: 932px;"></div>
                    </div>
                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                    </div>
                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                        <div class="simplebar-scrollbar"
                            style="height: 71px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                    </div>
                </div>

                <div class="sidebar-background"></div>
            </div>


            <div class="sidebar-background"></div>
        </div>

        <div class="main-content">

            {{ $slot }}

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Invoika.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design &amp; Develop by Themesbrand
                            </div>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>


    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector map-->
    <script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>
    <!-- Dashboard init -->
    {{-- <script src="{{ asset('js/pages/dashboard.init.js') }}"></script> --}}
    <!-- App js -->

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('libs/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('libs/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script src="{{ asset('libs/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script> --}}
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/chartjs.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @stack('scripts')

    <script src="{{ asset('js/pages/password-addon.init.js') }}"></script>

    <script src="{{ asset('libs/tagify/dist/tagify.min.js') }}"></script>
    <script src="{{ asset('libs/tagify/dist/tagify.polyfills.min.js') }}"></script>
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>


    <script>
        $('.select2').select2();
    </script>

    <?php
    /**
     *  Alert
     */
    $message = '';
    $icon = '';
    
    if (!empty($errors->all())) {
        $icon = 'error';
        $message = $errors->first();
    } elseif (session()->has('success')) {
        $icon = 'success';
        $message = session()->get('success');
    } elseif (session()->has('error')) {
        $icon = 'error';
        $message = session()->get('error');
    } elseif (!empty($success)) {
        $icon = 'success';
        $message = $success;
    }
    
    ?>

    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 3000
        });
        var message = "{{ $message }}";
        var icon = "{{ $icon }}";
        if (message.length > 0) {
            Toast.fire({
                icon: icon,
                title: message
            });
        }
    </script>
    <script>
        // Delete Confirmation
        function confirm_form_delete(element) {
            var form = $(element).closest("form");

            Swal.fire({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                customClass: {
                    cancelButton: 'btn btn-danger'
                },
                showCancelButton: true,
                cancelButtonText: 'No',
                cancelButtonColor: '#ce4242',
                confirmButtonColor: '#004A99',
                confirmButtonText: `Yes`,
                closeOnConfirm: false
            }).then((result) => {

                if (!result.isConfirmed) return;

                jQuery(form).submit();

            });
        }
    </script>

</body>

</html>
