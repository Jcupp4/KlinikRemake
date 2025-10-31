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
                            Rujukan
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
                                Rujukan </li>
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
                            <a href="#" class="btn btn-sm btn-flex bg-body fw-bold" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1"><span class="path1"></span><span
                                        class="path2"></span></i>
                                Filter
                            </a>



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
                                    <span class="me-2">Daftar Pasien Rujuan :</span>
                                    <span class="badge bg-light text-dark fs-6 p-2 rounded-pill">Total: 25</span>
                                </h2>

                                <!-- Subteks -->
                                <p class="text-white-50 fs-6 mb-4">
                                    Kelola data pasien rujukan dengan mudah. Gunakan kolom pencarian untuk menemukan pasien
                                    rujukan.
                                </p>

                                <!-- Search dan Tombol -->
                                <form action="" method="GET" class="d-flex align-items-center">
                                    <!-- Input Pencarian -->
                                    <div class="position-relative w-md-400px me-md-2">
                                        <i
                                            class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 translate-middle ms-6">
                                            <span class="path1"></span><span class="path2"></span>
                                        </i>
                                        <input type="text" class="form-control form-control-solid ps-10" name="search"
                                            value="" placeholder="Cari dokter..." />
                                    </div>

                                    <!-- Tombol Aksi -->
                                    <div class="d-flex align-items-center">
                                        <button type="submit" class="btn btn-warning me-3 shadow-sm">Search</button>
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
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span><span class="path5"></span></i> </a>
                                </li>

                                <li class="nav-item m-0">
                                    <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary"
                                        data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                        <i class="ki-duotone ki-row-horizontal fs-2"><span class="path1"></span><span
                                                class="path2"></span></i> </a>
                                </li>
                            </ul>
                            <!--end::Tab nav-->

                            <!--begin::Actions-->
                            <div class="d-flex my-0">
                                <!--begin::Select-->
                                <select name="status" data-control="select2" data-hide-search="true"
                                    data-placeholder="Filter"
                                    class="form-select form-select-sm border-body bg-body w-150px me-5">
                                    <option value="1">Recently Updated</option>
                                    <option value="2">Last Month</option>
                                    <option value="3">Last Quarter</option>
                                    <option value="4">Last Year</option>
                                </select>
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
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Tabel Rujukan</h5>
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pasien</th>
                                                        <th>Nama Dokter</th>
                                                        <th>Diagnosa</th>
                                                        <th>Rumah Sakit Tujuan</th>
                                                        <th>Tanggal Rujukan</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                @forelse($rujukan as $index => $r)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $r->pasien->person->name ?? '-' }}</td>
                                                        <td>{{ $r->dokter->person->name ?? '-' }}</td>
                                                        <td>{{ $r->diagnosa ?? '-' }}</td>
                                                        <td>{{ $r->rumahsakit->nama_rs ?? $r->tujuan_rujukan }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($r->tanggal_rujukan)->format('d M Y') }}
                                                        </td>
                                                        <td>
                                                            @if ($r->status === 'pending')
                                                                <span class="badge bg-warning text-dark">Pending</span>
                                                            @elseif($r->status === 'selesai')
                                                                <span class="badge bg-success">Selesai</span>
                                                            @else
                                                                <span
                                                                    class="badge bg-secondary">{{ ucfirst($r->status) }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="7" class="text-center">Belum ada rujukan.</td>
                                                    </tr>
                                                @endforelse
                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex flex-stack flex-wrap pt-10">
                                <div class="fs-6 fw-semibold text-gray-700">
                                    Showing 1 to 10 of 50 entries
                                </div>
                                <ul class="pagination">
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
