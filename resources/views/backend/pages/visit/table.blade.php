@extends('backend.master')

@section('title')
    <title>
        Dashboard | Aplikasi</title>
    <!-- Tambahkan Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">


        <!--begin::Toolbar wrapper-->
        <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">


            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Daftar Pasien Visits
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
                        Visits </li>
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
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
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
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications"
                                        checked />
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
            <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div>
                        <!-- Judul Halaman -->
                        <h2 class="fw-bold text-white mb-4 d-flex align-items-center flex-wrap">
                            <i class="bi bi-people-fill me-3 text-info fs-2"></i>
                            <span class="me-2  fw-bolder">
                                Daftar Pasien Visits
                            </span>

                            <span
                                class="badge bg-light text-dark fs-6 px-3 py-2 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="bi bi-clipboard2-pulse text-primary me-2 fs-5"></i>
                                Total:
                                <span id="totalVisits" class="fw-bold ms-1 text-primary">
                                    {{ $visits->count() ?? 0 }}
                                </span>
                            </span>
                        </h2>


                        <!-- Subteks -->
                        <p class="text-white-50 fs-6 mb-4">
                            Kelola data pasien baru dengan mudah. Gunakan kolom pencarian untuk menemukan pasien
                            tertentu.
                        </p>

                        <!-- Search dan Tombol -->
                        <form action="{{ route('visit.table') }}" method="GET" class="d-flex align-items-center">
                            <!-- Input Tanggal -->
                            <div class="position-relative w-md-250px me-md-2">
                                <input type="text" id="tanggal" name="tanggal" class="form-control form-control-solid"
                                    value="{{ request('tanggal') ?? \Carbon\Carbon::today()->format('Y-m-d') }}"
                                    placeholder="Pilih Tanggal" readonly>
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
                    <div class="row g-6">
                        @forelse ($visits as $key => $item)
                            <div class="col-md-6 col-xxl-4 d-flex">
                                <div class="card shadow-sm border-0 rounded-4 hover-elevate-up w-100 h-100">
                                    <div class="card-body d-flex flex-column text-center p-6">

                                        <!-- Avatar -->
                                        <div class="symbol symbol-90px mb-4 position-relative mx-auto">
                                            <div class="symbol-label bg-light-primary d-flex align-items-center justify-content-center rounded-circle shadow-sm"
                                                style="width: 90px; height: 90px;">
                                                <i class="bi bi-person-circle fs-1 text-primary"></i>
                                            </div>
                                        </div>

                                        <!-- Nomor Antrian -->
                                        <h4 class="fw-bold text-dark mb-1">#{{ $item->nomor_antrian }}</h4>

                                        <!-- Nama Pasien -->
                                        <div class="text-gray-700 fw-semibold mb-1">
                                            👤 {{ $item->pasien->person->name ?? '-' }}
                                        </div>

                                        <!-- Nama Dokter -->
                                        <div class="text-gray-500 mb-2">
                                            🩺 {{ $item->dokter->person->name ?? '-' }}
                                        </div>

                                        <!-- Nomor RM -->
                                        <div class="mb-3">
                                            <span
                                                class="badge bg-light-primary text-primary px-3 py-2 rounded-pill shadow-sm">
                                                No. RM: {{ $item->pasien->no_rm ?? '-' }}
                                            </span>
                                        </div>

                                        <!-- Tanggal -->
                                        <div class="text-muted small mb-3">
                                            <i class="bi bi-calendar3 me-1"></i>
                                            {{ $item->created_at->format('d M Y') }}
                                        </div>

                                        <!-- Status -->
                                        <div class="mb-3">
                                            @if ($item->status == 'antri')
                                                <span
                                                    class="badge bg-secondary-subtle text-secondary fs-7 px-3 py-2 rounded-pill">Antri</span>
                                            @elseif ($item->status == 'menunggu resep')
                                                <span
                                                    class="badge bg-warning-subtle text-warning fs-7 px-3 py-2 rounded-pill">Menunggu
                                                    Resep</span>
                                            @elseif ($item->status == 'menunggu pembayaran')
                                                <span
                                                    class="badge bg-info-subtle text-info fs-7 px-3 py-2 rounded-pill">Menunggu
                                                    Pembayaran</span>
                                            @elseif ($item->status == 'selesai')
                                                <span
                                                    class="badge bg-success-subtle text-success fs-7 px-3 py-2 rounded-pill">Selesai</span>
                                            @elseif ($item->status == 'rujuk')
                                                <span
                                                    class="badge bg-danger-subtle text-danger fs-7 px-3 py-2 rounded-pill">Dirujuk</span>
                                            @else
                                                <span
                                                    class="badge bg-dark text-light fs-7 px-3 py-2 rounded-pill">{{ ucfirst($item->status) }}</span>
                                            @endif
                                        </div>


                                        <!-- Actions -->
                                        <div class="mt-auto">
                                            <a href="{{ route('visit.periksa', $item->id) }}"
                                                class="btn btn-primary btn-sm px-4 rounded-pill shadow-sm">
                                                <i class="bi bi-clipboard2-pulse me-1"></i> Periksa
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center text-muted py-5">
                                <i class="bi bi-emoji-frown fs-1 d-block mb-2"></i>
                                Tidak ada data pasien saat ini.
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    {{-- <div class="d-flex flex-stack flex-wrap pt-10 align-items-center">
                        <div class="fs-6 fw-semibold text-gray-700 mb-2 mb-md-0">
                            Menampilkan {{ $visits->firstItem() ?? 0 }} - {{ $visits->lastItem() ?? 0 }} dari
                            {{ $visits->total() ?? 0 }} data
                        </div>
                        <div>
                            {{ $visits->links('pagination::bootstrap-5') }}
                        </div>
                    </div> --}}
                </div>

                <!--end::Tab pane Card-->

                <!--begin::Tab pane Table-->
                <div id="kt_project_users_table_pane" class="tab-pane fade">
                    <div class="card card-flush">
                        <div class="card-body pt-0">
                            <div class="table-responsive">
                                <table id="kt_project_users_table"
                                    class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                    <thead class="fs-7 text-gray-500 text-uppercase">
                                        <tr>
                                            <th class="min-w-350px">Antrian</th>
                                            <th class="min-w-100px">No RM</th>
                                            <th class="min-w-150px">Nama Pasien</th>
                                            <th class="min-w-150px">Nama Dokter</th>
                                            <th class="min-w-130px">Tanggal Kunjungan</th>
                                            <th class="min-w-200px">Keluhan</th>
                                            <th class="min-w-100px">Status</th>
                                            <th class="min-w-50px text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6">
                                        @forelse ($visits as $key => $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-5 position-relative">
                                                            <!-- Kotak Nomor -->
                                                            <div
                                                                class="symbol symbol-35px d-flex align-items-center justify-content-center 
                bg-light text-dark fw-bold rounded-2 border">
                                                                {{ $loop->iteration }}
                                                            </div>
                                                        </div>

                                                        <div class="d-flex flex-column">
                                                            <span class="text-gray-800 text-hover-primary fw-bold">
                                                                {{ $item->nomor_antrian }}
                                                            </span>
                                                        </div>
                                                    </div>
                            </div>
                            </td>
                            <td> {{ $item->pasien->no_rm ?? '-' }}</td>
                            <td>{{ $item->pasien->person->name ?? '-' }}</td>
                            <td>{{ $item->dokter->person->name ?? '-' }}</td>
                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
                                @if ($item->status == 'selesai')
                                    <span class="badge bg-success">Selesai</span>
                                @elseif ($item->status == 'menunggu')
                                    <span class="badge bg-warning">Menunggu</span>
                                @else
                                    <span class="badge bg-secondary">{{ ucfirst($item->status) }}</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="#"
                                    class="btn btn-light btn-sm btn-flex btn-center btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    Actions <i class="fas fa-angle-down ms-1"></i>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 
                                                menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a href="" class="menu-link px-3">
                                            <i class="fas fa-eye me-2 text-info"></i> View
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="" class="menu-link px-3">
                                            <i class="fas fa-edit me-2 text-warning"></i>
                                            Update
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <form action="" method="POST"
                                            onsubmit="return confirm('Yakin hapus data ini?')" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light-danger btn-sm w-100">
                                                <i class="fas fa-trash me-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data dokter.</td>
                            </tr>
                            @endforelse
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Tab pane Table-->
        </div>


        <!--end::Tab Content-->

    </div>
    <!--end::Content-->

    <!--end::Content wrapper-->
@endsection
