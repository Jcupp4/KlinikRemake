@extends('auth.Auth')

@section('title')
    <title>Login | Aplikasi</title>
@endsection

@section('form')
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">

            <!--begin::Aside (kiri biru)-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px position-xl-relative"
                style="background-color: #007BFF; position: relative; overflow: hidden;">

                <!-- Background image full cover -->
                <div
                    style="
        background-image: url('{{ asset('assets/media/illustrations/sketchy-1/17.png') }}');
        background-size: cover;
        background-position: center;
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 0;">
                </div>

                <!-- Overlay gradasi (lebih transparan agar background terlihat) -->
                <div
                    style="
        background: linear-gradient(to bottom, rgba(0, 123, 255, 0.75), rgba(0, 123, 255, 0.85));
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 0;">
                </div>

                <!-- Konten -->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y" style="z-index: 1;">
                    <div class="d-flex flex-row-fluid flex-column justify-content-start align-items-center text-center p-5 p-lg-10 pt-lg-20"
                        style="margin-top: 50px;"> <!-- naikkan posisi logo -->

                        <!-- Logo -->
                        <a href="{{ url('/') }}" class="py-2 py-lg-10">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}"
                                class="theme-light-show h-120px h-lg-150px mb-5" />
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}"
                                class="theme-dark-show h-120px h-lg-150px mb-5" />
                        </a>
                    </div>
                </div>
            </div>

            <!--end::Aside-->

            <!--end::Aside-->

            <!--begin::Body (form login)-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                        <!-- Logo di atas -->
                        <div class="text-center mb-10">
                            <a href="{{ url('/') }}">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="h-80px mb-5" />
                            </a>
                        </div>

                        <!-- Alert Login Error -->
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show shadow-sm rounded-3" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i> {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Form Login -->
                        <form class="form w-100" novalidate="novalidate" action="{{ route('register.store') }}"
                            method="post">
                            @csrf

                            <!-- Heading -->
                            <div class="text-center mb-8">
                                <h1 class="text-gray-900 fw-bold mb-3">Sign Up</h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Sudah punya akun?
                                    <a href="{{ route('login') }}" class="link-primary fw-bold">Sign In</a>
                                </div>
                            </div>

                            <!-- Input Email -->
                            <div class="fv-row mb-7">
                                <label class="form-label fs-6 fw-bold text-gray-900">
                                    Username
                                </label>
                                <input type="email" name="name" class="form-control form-control-lg form-control-solid"
                                    placeholder="Fullname" required>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="form-label fs-6 fw-bold text-gray-900">
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control form-control-lg form-control-solid"
                                    placeholder="name@example.com" required>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="form-label fs-6 fw-bold text-gray-900">
                                    Password
                                </label>
                                <input type="email" name="password" placeholder="Password"
                                    class="form-control form-control-lg form-control-solid" required>
                            </div>
                            <div class="fv-row mb-7">
                                <label class="form-label fs-6 fw-bold text-gray-900">
                                    Confirm Password
                                </label>
                                <input type="email" name="password_confirmation" placeholder="Confirm Password"
                                    class="form-control form-control-lg form-control-solid" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5 shadow-lg rounded-3">
                                    <span class="indicator-label">
                                        Masuk
                                    </span>
                                    <span class="indicator-progress">Tunggu sebentar...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                        <!-- End Form Login -->
                    </div>
                </div>
            </div>

            <!--end::Body-->

        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
@endsection
