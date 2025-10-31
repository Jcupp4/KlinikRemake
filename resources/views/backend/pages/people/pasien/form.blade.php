@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <!-- Toolbar -->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">

            <!-- Page title -->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Registration
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted"><a href="../../index.html"
                            class="text-muted text-hover-primary">Dashboard</a></li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted">Menu</li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-gray-900">Registration</li>
                </ul>
            </div>

            <!-- Actions (Filter Button) -->
            <div class="d-flex align-items-center pt-4 pb-7 pt-lg-1 pb-lg-2">
                <div class="me-3">
                    <a href="#" class="btn btn-sm btn-flex bg-body fw-bold" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1"><span class="path1"></span><span
                                class="path2"></span></i>
                        Filter
                    </a>

                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                        id="kt_menu_68cacccf42f27">
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <div class="px-7 py-5">
                            <!-- Status -->
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Status:</label>
                                <div>
                                    <select class="form-select form-select-solid" multiple data-kt-select2="true"
                                        data-close-on-select="false" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_68cacccf42f27" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="3">In Process</option>
                                        <option value="4">Rejected</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Member Type -->
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Member Type:</label>
                                <div class="d-flex">
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                </div>
                            </div>

                            <!-- Notifications -->
                            <div class="mb-10">
                                <label class="form-label fw-semibold">Notifications:</label>
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div class="col-xl-12 d-flex flex-column">
            <!-- Card Header Dokter -->
            <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div>
                        <!-- Judul Halaman -->
                        <h2 class="fw-bold text-white mb-3">
                            <span class="me-2">Form Registration :</span>
                        </h2>

                        <!-- Subteks -->
                        <p class="text-white-50 fs-6 mb-4">
                            Silakan isi data dokter dengan lengkap dan benar. Data ini akan digunakan untuk
                            pengelolaan jadwal dan pelayanan.
                        </p>

                        <!-- Search dan Tombol -->

                    </div>

                    <!-- Ilustrasi kanan -->
                    <img src="../assets/media/illustrations/sigma-1/17-dark.png" class="h-200px mt-5 mt-md-0"
                        alt="Ilustrasi Dokter">
                </div>
            </div>
            <!--begin::Form-->
            <!--end::Form-->


            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack pb-7">
                <!--begin::Title-->
                <div class="d-flex flex-wrap align-items-center my-1">
                    <h3 class="fw-bold me-5 my-1">
                        57 Items Found
                        <span class="text-gray-500 fs-6">by Recent Updates ↓</span>
                    </h3>
                </div>
                <!--end::Title-->

                <!--begin::Controls-->
                <div class="d-flex flex-wrap my-1">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                        <li class="nav-item m-0">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                <i class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></i> </a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->

                    <!--begin::Actions-->
                    <div class="d-flex my-0">
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Filter"
                            class="form-select form-select-sm border-body bg-body w-150px me-5">
                            <option value="1">Recently Updated</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Quarter</option>
                            <option value="4">Last Year</option>
                        </select>
                        <!--end::Select-->

                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" data-placeholder="Export"
                            class="form-select form-select-sm border-body bg-body w-100px">
                            <option value="1">Excel</option>
                            <option value="1">PDF</option>
                            <option value="2">Print</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Tab Content-->
            <!-- Pastikan ini di <head> layout utama -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
                integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

            <div class="tab-content">
                <!--begin::Tab pane Card-->
                <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="fw-bold mb-4 text-primary">
                                        <i class="fas fa-user-plus me-2"></i> Form Registrasi Pasien
                                    </h4>

                                    <form action="{{ route('pasien.store') }}" method="post">
                                        @csrf

                                        <!-- Section Identitas -->
                                        <div class="mb-4">
                                            <h6 class="fw-bold text-gray-700 mb-3">Identitas Pasien</h6>

                                            <!-- Nama Lengkap -->
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-user"></i></span>
                                                    <input type="text" name="nama_lengkap" class="form-control"
                                                        required>
                                                </div>
                                            </div>

                                            <!-- Tempat & Tanggal Lahir (sejajar) -->
                                            <div class="row g-3 mb-3">
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Tempat Lahir</label>
                                                    <input type="text" name="pob" class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Tanggal Lahir</label>
                                                    <input type="date" name="dob" class="form-control" required>
                                                </div>
                                            </div>

                                            <!-- Jenis Kelamin -->
                                            <div class="mb-4">
                                                <label class="form-label fw-semibold d-block mb-2">Jenis
                                                    Kelamin</label>
                                                <div class="btn-group w-100" role="group">
                                                    <input type="radio" class="btn-check" name="sex"
                                                        id="sexMale" value="laki-laki" autocomplete="off"
                                                        {{ ($res->person->sex ?? '') === 'laki-laki' ? 'checked' : '' }}
                                                        required>
                                                    <label class="btn btn-outline-primary"
                                                        for="sexMale">Laki-laki</label>

                                                    <input type="radio" class="btn-check" name="sex"
                                                        id="sexFemale" value="perempuan" autocomplete="off"
                                                        {{ ($res->person->sex ?? '') === 'perempuan' ? 'checked' : '' }}>
                                                    <label class="btn btn-outline-danger"
                                                        for="sexFemale">Perempuan</label>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Section Kontak -->
                                        <div class="mb-4">
                                            <h6 class="fw-bold text-gray-700 mb-3">Kontak & Alamat</h6>

                                            <!-- Alamat -->
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Alamat</label>
                                                <textarea name="alamat" class="form-control" rows="2"></textarea>
                                            </div>

                                            <!-- Kontak Darurat -->
                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Kontak Darurat</label>
                                                <div class="input-group">
                                                    <span class="input-group-text bg-light"><i
                                                            class="fas fa-phone"></i></span>
                                                    <input type="text" name="kontak_darurat" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tombol -->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-light me-2">
                                                <i class="fas fa-undo me-1"></i> Reset
                                            </button>
                                            <button type="submit" class="btn btn-primary shadow-sm">
                                                <i class="fas fa-save me-1"></i> Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Tab pane Card-->

                <!--begin::Tab pane Table-->
                <!--end::Content-->
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--end::Content wrapper-->
@endsection
