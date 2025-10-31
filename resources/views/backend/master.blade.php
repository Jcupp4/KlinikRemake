<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<!-- Mirrored from preview.keenthemes.com/keen/demo9/dashboards/online-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 15:05:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/keen" />
    <meta property="og:site_name" content="Keen by Keenthemes" />
    <link rel="canonical" href="online-courses.html" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Bootstrap JS + Popper (versi 5) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        /* Pastikan app-header-primary selalu lebih tinggi dari secondary */
        .app-header-primary {
            position: relative;
            z-index: 1200;
            /* lebih tinggi dari running text */
        }

        .app-header-secondary {
            position: relative;
            z-index: 1000;
            /* lebih rendah */
        }

        /* Menu container */
        #kt_app_header_menu {
            position: relative;
            z-index: 1250;
            /* lebih tinggi lagi */
        }

        /* Dropdown menu */
        .dropdown-menu {
            position: absolute;
            z-index: 1300 !important;
            /* paling atas */
        }

        #modalUpdateDokter .modal-dialog {
            margin-top: 5vh;
            /* turun 5% dari layar */
        }

        .btn-outline-pink {
            color: #d63384;
            border-color: #d63384;
        }

        .btn-outline-pink:hover,
        .btn-outline-pink:checked,
        .btn-outline-pink.active {
            color: #fff;
            background-color: #d63384;
            border-color: #d63384;
        }

        /* Tambah jarak atas modal */
        .modal-dialog-centered {
            margin-top: 40px;
            /* Atur sesuai selera: 40px = cukup lega */
        }

        #obat_tab .btn {
            display: inline-flex !important;
        }
        
    </style>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
    data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">




            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">

                <!--begin::Header primary-->
                <div class="app-header-primary " data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky"
                    data-kt-sticky-offset="{default: 'false', lg: '300px'}">

                    <!--begin::Header primary container-->
                    <div class="app-container container-fluid d-flex align-items-center justify-content-between"
                        id="kt_app_header_primary_container">
                        <!--begin::Logo and search-->
                        <div class="d-flex flex-grow-1 flex-lg-grow-0">
                            <!--begin::Logo wrapper-->
                            <div class="d-flex align-items-center me-7" id="kt_app_header_logo_wrapper">
                                <!--begin::Header toggle-->
                                <button
                                    class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary w-35px h-35px ms-n2 me-2"
                                    id="kt_app_header_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </button>
                                <!--end::Header toggle-->

                                <!-- Logo di kiri -->
                                <div class="d-flex align-items-center">
                                    <a href="../index.html" class="d-flex align-items-center">
                                        <img alt="Logo" src="../assets/media/logos/logo.png" class="h-40px" />
                                    </a>
                                </div>
                                <!--end::Logo-->
                            </div>
                            <!--end::Logo wrapper-->


                            <!--begin::Menu wrapper-->
                            <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                                data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
                                style="position: absolute; left: 50%; transform: translateX(-50%);">
                                <!--begin::Menu-->
                                <div class="menu  
        menu-rounded 
        menu-active-bg 
        menu-state-primary 
        menu-column 
        menu-lg-row 
        menu-title-gray-700 
        menu-icon-gray-500 
        menu-arrow-gray-500 
        menu-bullet-gray-500 
        my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                                    id="kt_app_header_menu" data-kt-menu="true">

                                    {{-- Sidebar sesuai role --}}
                                    @auth
                                        @switch(auth()->user()->reference_type)
                                            @case('App\\Models\\Dokter')
                                                @include('backend.sidebars.sidebar-dokter')
                                            @break

                                            @case('App\\Models\\Resepsionis')
                                                @include('backend.sidebars.sidebar-resepsionis')
                                            @break

                                            @case('App\\Models\\Farmasi')
                                                @include('backend.sidebars.sidebar-farmasi')
                                            @break

                                            @default
                                                @include('backend.sidebars.sidebar-admin')
                                        @endswitch
                                    @endauth

                                </div>
                                <!--end::Menu-->
                            </div>



                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Logo and search-->


                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0">
                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-3" id="kt_header_user_menu_toggle">
                                <!--begin:Info-->
                                <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                    <a href="../pages/user-profile/overview.html"
                                        class="text-white text-hover-primary fs-6 fw-bold">
                                        {{ Auth::user()->roles->pluck('name')->implode(', ') ?? '-' }}</a>

                                    <span class="text-gray-600 fs-7 fw-semibold d-block">
                                        {{ Auth::user()->email ?? 'Tidak ada email' }}</span>
                                </div>
                                <!--end:Info-->
                                @if (session('success') || session('error'))
                                    <div class="position-fixed top-0 end-0 p-3" style="z-index: 1080">
                                        <div class="toast align-items-center text-bg-{{ session('success') ? 'success' : 'danger' }} border-0"
                                            role="alert" aria-live="assertive" aria-atomic="true"
                                            data-bs-delay="3000">
                                            <div class="d-flex">
                                                <div class="toast-body">
                                                    <i
                                                        class="fas {{ session('success') ? 'fa-check-circle' : 'fa-triangle-exclamation' }} me-2"></i>
                                                    {{ session('success') ?? session('error') }}
                                                </div>
                                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <!-- Toast container (posisi fixed di kanan atas) -->
                                <div id="notification-toast-container"
                                    class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1100;">
                                </div>
                                <!--begin::Menu wrapper-->
                                <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <img src="../assets/media/avatars/300-9.jpg" alt="user" />
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="../assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Carles <span
                                                        class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#"
                                                    class="fw-semibold text-muted text-hover-primary fs-7">
                                                    carles@kt.com </a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="../account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../account/statements.html"
                                                    class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip"
                                                        title="View your statements">
                                                        <i class="ki-duotone ki-information-5 fs-5"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span class="path3"></span></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">
                                                            Notifications
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->


                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                        data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Language

                                                <span
                                                    class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                    English <img class="w-15px h-15px rounded-1 ms-2"
                                                        src="../assets/media/flags/united-states.svg"
                                                        alt="" />
                                                </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="../account/settings.html"
                                                    class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1"
                                                            src="../assets/media/flags/united-states.svg"
                                                            alt="" />
                                                    </span>
                                                    English
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="../account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                            <!--begin::Theme mode-->
                            <div class="app-navbar-item ms-3">

                                <!--begin::Menu toggle-->
                                <a href="#"
                                    class="btn btn-icon btn-icon-white btn-active-color-primary btn-custom w-35px h-35px w-md-40px h-md-40px"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span><span
                                            class="path7"></span><span class="path8"></span><span
                                            class="path9"></span><span class="path10"></span></i> <i
                                        class="ki-duotone ki-moon theme-dark-show fs-2"><span
                                            class="path1"></span><span class="path2"></span></i></a>
                                <!--begin::Menu toggle-->

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span><span class="path6"></span><span
                                                        class="path7"></span><span class="path8"></span><span
                                                        class="path9"></span><span class="path10"></span></i> </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->

                            </div>
                            <!--end::Theme mode-->

                            <div class="app-navbar-item ms-3">

                                <!--begin::Menu toggle (ikon notifikasi)-->
                                <a href="#"
                                    class="btn btn-icon btn-icon-white btn-active-color-primary btn-custom w-35px h-35px w-md-40px h-md-40px position-relative"
                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">

                                    <!-- Ikon Notifikasi -->
                                    <i class="bi bi-bell-fill fs-4 text-white"></i>

                                    <!-- Badge jumlah notifikasi -->
                                    @php
                                        $notifications = Auth::user()
                                            ->notifications()
                                            ->where('data->status', '!=', 'completed')
                                            ->latest()
                                            ->take(5)
                                            ->get();
                                    @endphp

                                    @if ($notifications->count() > 0)
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge badge-circle bg-danger fs-8 animate__animated animate__pulse animate__infinite">
                                            {{ $notifications->count() }}
                                        </span>
                                    @endif
                                </a>
                                <!--end::Menu toggle-->

                                <!--begin::Menu dropdown-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 fs-base w-325px shadow-lg"
                                    data-kt-menu="true">

                                    <!-- Header -->
                                    <div class="menu-item px-3 mb-2">
                                        <div class="menu-content d-flex justify-content-between align-items-center">
                                            <span class="fw-bold text-gray-900 fs-6">Notifikasi</span>
                                            <span class="text-muted fs-8">{{ now()->format('d M Y') }}</span>
                                        </div>
                                    </div>

                                    <div class="separator my-2"></div>

                                    <!-- Daftar Notifikasi -->
                                    <div class="scroll-y mh-200px">
                                        @php
                                            // Ambil hanya notifikasi yang belum 'completed'
                                            $notifications = Auth::user()
                                                ->unreadNotifications->filter(
                                                    fn($n) => ($n->data['status'] ?? null) !== 'completed',
                                                )
                                                ->take(5);
                                        @endphp

                                        @forelse ($notifications as $notification)
                                            @php $data = $notification->data; @endphp

                                            <div class="menu-item px-3">
                                                <a href="{{ $data['url'] ?? '#' }}"
                                                    class="menu-link d-flex align-items-start gap-3 py-3 px-3 rounded {{ $notification->read_at ? '' : 'bg-light-primary' }}">
                                                    <div class="symbol symbol-40px me-3">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-document fs-3 text-primary"></i>
                                                        </span>
                                                    </div>
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <span class="text-gray-900 fw-semibold">
                                                            {{ $data['message'] ?? 'Notifikasi baru' }}
                                                        </span>
                                                        <span class="text-muted fs-8">
                                                            {{ $notification->created_at->diffForHumans() }}
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        @empty
                                            <div class="menu-item px-3 py-5 text-center text-muted">
                                                <i class="ki-duotone ki-sad fs-2 mb-2"></i>
                                                <div>Tidak ada notifikasi</div>
                                            </div>
                                        @endforelse
                                    </div>


                                    <div class="separator my-2"></div>

                                    <!-- Footer -->
                                    <div class="menu-item px-3 text-center">
                                        <a href="#"
                                            class="menu-link justify-content-center text-primary fw-bold hover-scale"
                                            onclick="alert('Fitur Lihat Semua belum diaktifkan'); return false;">
                                            <i class="ki-duotone ki-arrow-right fs-5 me-2"></i>
                                            Lihat semua
                                        </a>
                                    </div>
                                </div>
                                <!--end::Menu dropdown-->

                            </div>




                            <!--begin::Link-->
                            <div class="app-navbar-item ms-3">
                                <!--begin::Menu- wrapper-->
                                <a href="/logout"
                                    class="btn btn-icon btn-icon-white btn-active-color-primary btn-custom w-35px h-35px w-md-40px h-md-40px">
                                    <i class="ki-duotone ki-entrance-left fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </a>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Link-->

                            <!--begin::Header menu toggle-->
                            <!--end::Header menu toggle-->
                        </div>
                        <!--end::Navbar-->

                    </div>
                    <!--end::Header primary container-->

                </div>
                <!--end::Header primary-->

                <!--begin::Header secondary-->
                <div class="app-header-secondary">
                    <!--begin::Header secondary container-->
                    <div class="app-container container-fluid d-flex align-items-stretch"
                        id="kt_app_header_secondary_container">
                        <!--begin::Toolbar-->
                        <div class="w-100 d-flex flex-stack">
                            <div class="d-flex flex-stack me-5 w-100">
                                <span class="text-white fw-bold fs-5 me-3 me-lg-6">Tips Kesehatan:</span>

                                <!-- Running text container -->
                                <div style="overflow: hidden; flex-grow: 1; height: 40px; position: relative;">
                                    <div id="health-tips"
                                        style="
                            position: absolute;
                            white-space: nowrap;
                            font-size: 1.4rem;
                            font-weight: bold;
                            text-transform: uppercase;
                            line-height: 1.4;
                            color: #fff;
                            left: 0;
                        ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header secondary container-->
                </div>
                <!--end::Header secondary-->

            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">




                <!--begin::Wrapper container-->
                <div class="app-container  container-fluid d-flex flex-row flex-column-fluid ">

                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        @yield('content')
                        <!--end::Content wrapper-->

                        <!--begin::Footer-->
                        <div id="kt_app_footer"
                            class="app-footer  align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6 ">



                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2025&copy;</span>
                                <a href="https://keenthemes.com/" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://keenthemes.com/products/keen-html-pro"
                                        target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--end::Modal - Invite Friend--> <!--end::Modals-->


    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <script src="../../../../cdn.amcharts.com/lib/5/index.js"></script>
    <script src="../../../../cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="../../../../cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="../../../../cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="../../../../cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/type.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/budget.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/settings.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/team.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/targets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/files.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/complete.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-project/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
        const hariDipilih = new Set();

        function tambahJadwal(btn) {
            const form = document.querySelector('#staticBackdrop form');

            const hari = form.querySelector('#hari').value;
            const mulai = form.querySelector('#mulai').value;
            const selesai = form.querySelector('#selesai').value;

            if (!hari || !mulai || !selesai) {
                alert('Lengkapi semua field.');
                return;
            }

            if (hariDipilih.has(hari)) {
                alert('Hari ini sudah ditambahkan.');
                return;
            }

            if (mulai >= selesai) {
                alert('Jam selesai harus lebih besar dari jam mulai.');
                return;
            }

            hariDipilih.add(hari);

            const container = form.querySelector('#jadwalList');
            const row = document.createElement('div');
            row.className = 'row mb-2';
            row.setAttribute('data-hari', hari);

            row.innerHTML = `
        <div class="col-sm-3 text-capitalize">${hari}</div>
        <div class="col-sm-3">
            <input type="time" name="jadwal[${hari}][mulai]" class="form-control" value="${mulai}" readonly>
        </div>
        <div class="col-sm-3">
            <input type="time" name="jadwal[${hari}][selesai]" class="form-control" value="${selesai}" readonly>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-danger btn-sm" onclick="hapusJadwal('${hari}', this)">Hapus</button>
        </div>
    `;

            container.appendChild(row);

            // Reset
            form.querySelector('#hari').selectedIndex = 0;
            form.querySelector('#mulai').value = '';
            form.querySelector('#selesai').value = '';
        }

        function hapusJadwal(hari, btn) {
            const row = btn.closest('.row');
            if (row) row.remove();
            hariDipilih.delete(hari);
        }

        function tambahJadwalEdit(dokterId) {
            const hari = document.getElementById(`hariEdit${dokterId}`).value;
            const mulai = document.getElementById(`mulaiEdit${dokterId}`).value;
            const selesai = document.getElementById(`selesaiEdit${dokterId}`).value;

            if (!hari || !mulai || !selesai) {
                alert("Lengkapi semua data");
                return;
            }

            if (document.getElementById(`jadwal-${dokterId}-${hari}`)) {
                alert("Hari sudah ditambahkan");
                return;
            }

            const list = document.getElementById(`jadwalList-${dokterId}`);
            const kosong = document.getElementById(`jadwalKosong-${dokterId}`);
            if (kosong) kosong.remove(); // hapus tulisan "belum ada jadwal"

            const html = `
        <div class="row mb-2 align-items-center" id="jadwal-${dokterId}-${hari}">
            <label class="col-sm-3 col-form-label text-capitalize">${hari}</label>
            <div class="col-sm-3">
                <input type="time" name="jadwal_praktek[${hari}][mulai]" value="${mulai}" class="form-control">
            </div>
            <div class="col-sm-3">
                <input type="time" name="jadwal_praktek[${hari}][selesai]" value="${selesai}" class="form-control">
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusJadwalEdit('${dokterId}', '${hari}')">Hapus</button>
            </div>
        </div>
    `;

            list.insertAdjacentHTML('beforeend', html);

            // Reset input
            document.getElementById(`hariEdit${dokterId}`).selectedIndex = 0;
            document.getElementById(`mulaiEdit${dokterId}`).value = "";
            document.getElementById(`selesaiEdit${dokterId}`).value = "";
        }

        function hapusJadwalEdit(dokterId, hari) {
            const el = document.getElementById(`jadwal-${dokterId}-${hari}`);
            if (el) el.remove();
        }

        function clearHari(hari) {
            document.getElementById(`jadwal-${hari}-mulai`).value = '';
            document.getElementById(`jadwal-${hari}-selesai`).value = '';
        }
    </script>

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
{{-- JS Selalu Ada --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toastEl = document.querySelector('.toast');
        if (toastEl) {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
</script>
<!--end::Body-->
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const tips = [
            "Rajin berolahraga 30 menit sehari untuk jantung yang sehat.",
            "Minum air putih 8 gelas sehari agar tubuh tetap terhidrasi.",
            "Istirahat cukup minimal 7 jam setiap malam.",
            "Dilarang konsumsi minuman berarkohol dan Dilarang / kurangi merokok.",
            "Kurangi konsumsi gula untuk mencegah diabetes."
        ];

        const tipsEl = document.getElementById("health-tips");
        if (!tipsEl) return;

        let tipIndex = 0;
        let posX = 0;
        let parentWidth = tipsEl.parentElement.offsetWidth;

        function startTip() {
            tipsEl.textContent = tips[tipIndex];
            posX = parentWidth;

            function animate() {
                posX -= 2; // kecepatan scroll
                tipsEl.style.left = posX + "px";

                if (posX < -tipsEl.offsetWidth) {
                    tipIndex = (tipIndex + 1) % tips.length;
                    parentWidth = tipsEl.parentElement.offsetWidth;
                    startTip();
                    return;
                }
                requestAnimationFrame(animate);
            }

            requestAnimationFrame(animate);
        }

        startTip();
    });
</script>
<script>
    flatpickr("#tanggal", {
        dateFormat: "Y-m-d",
        defaultDate: "{{ request('tanggal') ?? \Carbon\Carbon::today()->format('Y-m-d') }}",
        allowInput: true
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const rujukTidak = document.getElementById("rujukTidak");
        const rujukYa = document.getElementById("rujukYa");
        const rujukanFields = document.getElementById("rujukanFields");
        const selectRujukan = document.getElementById("rujukanSelect");
        const alamatTujuan = document.querySelector("input[name='alamat_tujuan']");
        const teleponTujuan = document.querySelector("input[name='telepon_tujuan']");

        // fungsi show/hide field rujukan
        function toggleRujukanFields() {
            rujukanFields.style.display = rujukYa.checked ? "block" : "none";
        }

        // panggil saat halaman load pertama
        toggleRujukanFields();

        // event radio button
        rujukTidak.addEventListener("change", toggleRujukanFields);
        rujukYa.addEventListener("change", toggleRujukanFields);

        // event pilih rumah sakit
        selectRujukan.addEventListener("change", function() {
            const selectedOption = this.options[this.selectedIndex];
            alamatTujuan.value = selectedOption.getAttribute("data-alamat") || "";
            teleponTujuan.value = selectedOption.getAttribute("data-telepon") || "";
        });
    });
</script>
<script>
    // Tambah baris baru ke tabel obat
    $('#tambahBaris').click(function() {
        // Ambil isi dropdown dari select pertama (lebih aman)
        let medicineOptions = $('select[name="medicine_id[]"]').first().html();

        let newRow = `
        <tr>
            <td>
                <select class="form-select medicine-select" name="medicine_id[]" required>
                    ${medicineOptions}
                </select>
            </td>
            <td>
                <input type="text" class="form-control" name="dosis[]" placeholder="3x1 sehari" required>
            </td>
            <td>
                <input type="number" class="form-control" name="jumlah[]" placeholder="10" required>
            </td>
            <td>
                <input type="text" class="form-control" name="aturan_pakai[]" placeholder="Setelah makan" required>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-danger btn-sm btn-hapus"><i class="bi bi-trash"></i></button>
            </td>
        </tr>`;

        $('#tabelObat tbody').append(newRow);
    });

    // Hapus baris obat (event delegation)
    $('#tabelObat').on('click', '.btn-hapus', function() {
        $(this).closest('tr').remove();
    });
</script>


<script>
    $(document).ready(function() {
        $('#icd_id').select2({
            placeholder: "-- Pilih Kode --",
            allowClear: true,
            ajax: {
                url: '{{ route('icd.search') }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        term: params.term
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.results
                    };
                },
                cache: true
            },
            width: '100%'
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabTriggerList = document.querySelectorAll('[data-bs-toggle="tab"]');
        tabTriggerList.forEach(trigger => {
            trigger.addEventListener("shown.bs.tab", function(event) {
                const target = document.querySelector(event.target.getAttribute("href"));
                if (target) {
                    target.classList.add("show");
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // 🔥 Ambil notifikasi dari Laravel
        let notifications = @json(auth()->user()->unreadNotifications ?? []);

        // 🔥 Filter agar tidak tampil jika status = 'completed'
        notifications = notifications.filter(
            n => (n.data?.status ?? null) !== 'completed'
        );

        const container = document.getElementById("notification-toast-container");
        if (!container || notifications.length === 0) return;

        notifications.forEach((notif) => {
            const message = notif?.data?.message ?? "Notifikasi baru";
            const type = notif?.data?.type ?? "info"; // success, warning, danger, info

            // Warna & ikon sesuai tipe
            const styles = {
                success: {
                    bg: "bg-success text-white",
                    icon: "fa-check-circle"
                },
                warning: {
                    bg: "bg-warning text-dark",
                    icon: "fa-exclamation-triangle"
                },
                danger: {
                    bg: "bg-danger text-white",
                    icon: "fa-times-circle"
                },
                info: {
                    bg: "bg-primary text-white",
                    icon: "fa-info-circle"
                }
            };

            const {
                bg,
                icon
            } = styles[type] ?? styles.info;

            const toastHTML = `
                <div class="toast align-items-center ${bg} border-0 mb-2 shadow-sm"
                    role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body d-flex align-items-center">
                            <i class="fa ${icon} me-2 fs-5"></i>
                            <div class="fw-semibold">${message}</div>
                        </div>
                        <button type="button"
                                class="btn-close btn-close-white me-2 m-auto"
                                data-bs-dismiss="toast"
                                aria-label="Close"></button>
                    </div>
                </div>
            `;

            container.insertAdjacentHTML('beforeend', toastHTML);
        });

        // Tampilkan semua toast
        const toastList = document.querySelectorAll('.toast');
        toastList.forEach((toastEl) => {
            new bootstrap.Toast(toastEl, {
                delay: 5000
            }).show();
        });
    });
</script>





<script>
    const pasienBaru = document.getElementById('pasienBaru');
    const pasienLama = document.getElementById('pasienLama');
    const pasienIdInput = document.getElementById('pasien_id');

    pasienBaru.addEventListener('change', function() {
        if (this.value) {
            pasienLama.value = ""; // kosongkan pasien lama
            pasienLama.disabled = true; // disable pasien lama
            pasienIdInput.value = this.value; // set hidden input
        } else {
            pasienLama.disabled = false; // aktifkan lagi kalau kosong
            pasienIdInput.value = "";
        }
    });

    pasienLama.addEventListener('change', function() {
        if (this.value) {
            pasienBaru.value = ""; // kosongkan pasien baru
            pasienBaru.disabled = true; // disable pasien baru
            pasienIdInput.value = this.value; // set hidden input
        } else {
            pasienBaru.disabled = false; // aktifkan lagi kalau kosong
            pasienIdInput.value = "";
        }
    });
</script>



<!-- Mirrored from preview.keenthemes.com/keen/demo9/dashboards/online-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Sep 2025 15:05:38 GMT -->

</html>
