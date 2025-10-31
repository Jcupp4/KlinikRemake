@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">


                <!--begin::Toolbar wrapper-->
                <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">


                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Pasien
                        </h1>
                        <!--end::Title-->


                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../index.html" class="text-muted text-hover-primary">
                                    Dashboard </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Menu </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-500 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-gray-900">
                                Pasien Baru </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center pt-4 pb-7 pt-lg-1 pb-lg-2">
                        <!--begin::Wrapper-->
                        <div class="me-3">
                            <!--begin::Menu-->




                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                id="kt_menu_68cacccf42f27">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->


                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple data-kt-select2="true"
                                                data-close-on-select="false" data-placeholder="Select option"
                                                data-dropdown-parent="#kt_menu_68cacccf42f27" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->

                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">
                                                    Author
                                                </span>
                                            </label>
                                            <!--end::Options-->

                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2"
                                                    checked="checked" />
                                                <span class="form-check-label">
                                                    Customer
                                                </span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->

                                        <!--begin::Switch-->
                                        <div
                                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value=""
                                                name="notifications" checked />
                                            <label class="form-check-label">
                                                Enabled
                                            </label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                            data-kt-menu-dismiss="true">Reset</button>

                                        <button type="submit" class="btn btn-sm btn-primary"
                                            data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1--> <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Button-->

                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div class="col-xl-12 d-flex flex-column">
                    <!-- Card Header Dokter -->
                    <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light"
                        style="background-color: #1C325E;">
                        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div>
                                <!-- Judul Halaman -->
                                <h2 class="fw-bold text-white mb-3">
                                    <span class="me-2">Daftar Pasien Baru :</span>
                                    <span class="badge bg-light text-dark fs-6 p-2 rounded-pill">Total:
                                        {{ $pasiens->count() }}</span>
                                </h2>

                                <!-- Subteks -->
                                <p class="text-white-50 fs-6 mb-4">
                                    Kelola data pasien baru dengan mudah. Gunakan kolom pencarian untuk menemukan pasien
                                    tertentu.
                                </p>

                                <!-- Search dan Tombol -->
                                <form action="{{ route('pasien.table') }}" method="GET" class="d-flex align-items-center">
                                    <!-- Input Tanggal -->
                                    <div class="position-relative w-md-250px me-md-2">
                                        <input type="text" id="tanggal" name="tanggal"
                                            class="form-control form-control-solid"
                                            value="{{ request('tanggal') ?? \Carbon\Carbon::today()->format('Y-m-d') }}"
                                            placeholder="Pilih Tanggal" readonly>
                                    </div>

                                    <!-- Input Search -->
                                    <div class="position-relative w-md-250px me-md-2">
                                        <input type="text" name="q" class="form-control form-control-solid"
                                            value="{{ request('q') }}" placeholder="Cari Nama / No RM">
                                    </div>

                                    <!-- Tombol Apply -->
                                    <div class="d-flex align-items-end">
                                        <button type="submit" class="btn btn-primary shadow-sm">Filter</button>
                                    </div>
                                </form>

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

                        <!--end::Title-->

                        <!--begin::Controls-->
                        <div class="d-flex flex-wrap my-1">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                <li class="nav-item m-0">
                                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                        data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                        <i class="ki-duotone ki-element-plus fs-2"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i> </a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->

                            <!--begin::Actions-->
                            <div class="d-flex my-0">
                                <!--begin::Select-->
                                <!--end::Select-->

                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Export"
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
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
                        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

                    <div class="tab-content">
                        <!--begin::Tab pane Card-->
                        <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                            <div class="row g-6">
                                @forelse($pasiens as $pasien)
                                    <div class="col-md-6 col-xxl-4 d-flex">
                                        <div class="card h-100 w-100 shadow-sm border-0 rounded-4">
                                            <div class="card-body d-flex flex-column align-items-center p-5">
                                                <!-- Avatar -->
                                                <div class="symbol symbol-80px mb-4">
                                                    <div class="symbol-label bg-gradient-light-primary d-flex align-items-center justify-content-center rounded-circle shadow"
                                                        style="width: 80px; height: 80px;">
                                                        <i class="fas fa-user fa-2x text-primary"></i>
                                                    </div>
                                                </div>

                                                <!-- Nama -->
                                                <a href=""
                                                    class="fs-5 text-dark text-hover-primary fw-bold mb-1 text-center">
                                                    {{ $pasien->person->name }}
                                                </a>

                                                <!-- Jenis Kelamin -->
                                                <div class="fw-medium text-muted mb-2 text-center">
                                                    {{ ucfirst($pasien->person->sex) }}
                                                </div>

                                                <!-- No RM -->
                                                <div class="mb-2 text-center">
                                                    <span class="badge bg-primary text-white px-3 py-2 shadow-sm">
                                                        No RM : {{ $pasien->no_rm }}
                                                    </span>
                                                </div>

                                                <!-- Tanggal Lahir -->
                                                <div class="fw-medium text-muted mb-3 text-center">
                                                    {{ \Carbon\Carbon::parse($pasien->person->dob)->format('d M Y') }}
                                                </div>

                                                <!-- Actions -->
                                                <div class="d-flex justify-content-center gap-2 mt-auto">
                                                    <a href="{{ route('pasien.view', ['id' => $pasien->id]) }}"
                                                        class="btn btn-outline-primary btn-sm fw-semibold">
                                                        <i class="fas fa-eye me-1"></i> Lihat
                                                    </a>
                                                    <a href="{{ route('pasien.print', $pasien->id) }}" target="_blank"
                                                        class="btn btn-outline-warning btn-sm fw-semibold">
                                                        <i class="fa fa-print me-1"></i> Cetak Kartu
                                                    </a>
                                                    <form action="{{ route('pasien.delete', $pasien->id) }}"
                                                        method="POST" onsubmit="return confirm('Yakin hapus data ini?')"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm fw-semibold">
                                                            <i class="fas fa-trash me-1"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center text-muted fs-6">Tidak ada data pasien.</div>
                                @endforelse
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex flex-stack flex-wrap pt-8">
                                <div class="fs-6 fw-medium text-muted">
                                    Showing 1 to 10 of 50 entries
                                </div>
                                <ul class="pagination mb-0">
                                    <li class="page-item previous"><a href="#" class="page-link"><i
                                                class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item next"><a href="#" class="page-link"><i
                                                class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--end::Tab pane Card-->

                        <!--begin::Tab pane Table-->


                        <!--end::Tab Content-->

                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Content wrapper-->
            @endsection
