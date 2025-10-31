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
                            Halaman Dokter
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
                                Dokter </li>
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
                        <a class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add Dokter
                        </a>
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
                                    <span class="me-2">Users Dokter :</span>
                                    <span class="badge bg-light text-dark fs-6 p-2 rounded-pill">
                                        Total: {{ $dokters->count() }}
                                    </span>

                                </h2>

                                <!-- Subteks -->
                                <p class="text-white-50 fs-6 mb-4">
                                    Kelola data dokter dengan mudah. Gunakan kolom pencarian untuk menemukan dokter
                                    tertentu.
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
                        </div>
                        <!--end::Controls-->
                    </div>
                    <!--end::Toolbar-->

                    <!--begin::Tab Content-->
                    <!-- Pastikan ini di <head> layout utama -->

                    <div class="tab-content">
                        <!--begin::Tab pane Card-->
                        <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                            <div class="row g-6">
                                @forelse($dokters as $dokter)
                                    <div class="col-md-6 col-xxl-4 d-flex">
                                        <div class="card shadow-sm rounded-4 border-0 h-100 w-100">
                                            <div class="card-body d-flex flex-column align-items-center p-5">

                                                <!-- Avatar -->
                                                <div class="symbol symbol-80px mb-4">
                                                    <div class="symbol-label bg-light-primary d-flex align-items-center justify-content-center rounded-circle shadow"
                                                        style="width: 80px; height: 80px; transition: transform 0.3s;">
                                                        <i class="bi bi-person-fill fs-2 text-primary"></i>
                                                    </div>
                                                </div>

                                                <!-- Nama -->
                                                <a href="{{ route('dokter.view', $dokter->id) }}"
                                                    class="fs-5 text-dark fw-bold mb-1 text-center text-hover-primary">
                                                    {{ $dokter->person->name ?? '-' }}
                                                </a>

                                                <!-- Spesialis -->
                                                <div class="fw-semibold text-muted mb-2 text-center small">
                                                    {{ $dokter->spesialis ?? '-' }}
                                                </div>

                                                <!-- SIP -->
                                                <div class="mb-3 text-center">
                                                    <span class="badge bg-light-primary text-primary px-3 py-2 fw-medium">
                                                        SIP: {{ $dokter->sip ?? '-' }}
                                                    </span>
                                                </div>

                                                <!-- Jadwal -->
                                                <ul class="list-unstyled text-center mb-4 flex-grow-1 small">
                                                    @php
                                                        $jadwal = is_array($dokter->jadwal_praktek)
                                                            ? $dokter->jadwal_praktek
                                                            : json_decode($dokter->jadwal_praktek, true);
                                                    @endphp
                                                    @if (is_array($jadwal))
                                                        @foreach ($jadwal as $hari => $jam)
                                                            <li class="mb-1">
                                                                <strong>{{ ucfirst($hari) }}</strong>: {{ $jam['mulai'] }} -
                                                                {{ $jam['selesai'] }}
                                                            </li>
                                                        @endforeach
                                                    @else
                                                        <li class="small text-muted">Tidak ada jadwal</li>
                                                    @endif
                                                </ul>

                                                <!-- Status -->
                                                <div class="mb-4 text-center">
                                                    @if ($dokter->status === 'aktif')
                                                        <span class="badge bg-success px-3 py-2 fw-semibold">Aktif</span>
                                                    @else
                                                        <span class="badge bg-danger px-3 py-2 fw-semibold">Nonaktif</span>
                                                    @endif
                                                </div>

                                                <!-- Actions -->
                                                <div class="d-flex justify-content-center gap-2 mt-auto">
                                                    <a href="{{ route('dokter.view', $dokter->id) }}"
                                                        class="btn btn-outline-primary btn-sm fw-semibold">
                                                        <i class="bi bi-eye me-1"></i> View
                                                    </a>
                                                    <form action="{{ route('dokter.delete', $dokter->id) }}"
                                                        method="POST" onsubmit="return confirm('Yakin hapus data ini?')"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm fw-semibold">
                                                            <i class="bi bi-trash me-1"></i> Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 text-center text-muted">
                                        Tidak ada data dokter.
                                    </div>
                                @endforelse
                            </div>

                            <!-- Pagination -->
                            {{-- <div class="d-flex flex-stack flex-wrap pt-10 align-items-center">
                                <div class="fs-6 fw-semibold text-muted">
                                    Showing {{ $dokters->firstItem() ?? 0 }} to {{ $dokters->lastItem() ?? 0 }} of
                                    {{ $dokters->total() ?? 0 }} entries
                                </div>
                                <ul class="pagination mb-0">
                                    <li class="page-item previous">
                                        <a href="{{ $dokters->previousPageUrl() }}" class="page-link">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                    @foreach ($dokters->getUrlRange(1, $dokters->lastPage()) as $page => $url)
                                        <li class="page-item {{ $dokters->currentPage() == $page ? 'active' : '' }}">
                                            <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    <li class="page-item next">
                                        <a href="{{ $dokters->nextPageUrl() }}" class="page-link">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>

                        <!--end::Tab pane Card-->

                        <!--begin::Tab pane Table-->

                        <!-- Modal Tambah -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content rounded-3 shadow-lg">

                                    <!-- Header -->
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="staticBackdropLabel">
                                            <i class="fas fa-user-md me-2"></i> Form Tambah Dokter
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Body -->
                                    <div class="modal-body p-4">
                                        <form method="POST" action="{{ route('dokter.store') }}">
                                            @csrf
                                            <div class="row g-3">
                                                <!-- Nama Lengkap -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Nama Lengkap</label>
                                                    <input type="text" class="form-control" name="nama_lengkap"
                                                        placeholder="Masukkan nama lengkap" required>
                                                </div>

                                                <!-- Tempat Lahir -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Tempat Lahir</label>
                                                    <input type="text" class="form-control" name="pob"
                                                        placeholder="Kota/Kabupaten lahir" required>
                                                </div>

                                                <!-- Tanggal Lahir -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" name="dob" required>
                                                </div>

                                                <!-- Jenis Kelamin -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold d-block">Jenis Kelamin</label>
                                                    <div class="btn-group w-100" role="group">
                                                        <input type="radio" class="btn-check" name="sex"
                                                            id="sexL" value="laki-laki" required>
                                                        <label class="btn btn-outline-primary" for="sexL">
                                                            <i class="fas fa-mars me-1"></i> Laki-laki
                                                        </label>

                                                        <input type="radio" class="btn-check" name="sex"
                                                            id="sexP" value="perempuan">
                                                        <label class="btn btn-outline-pink" for="sexP">
                                                            <i class="fas fa-venus me-1"></i> Perempuan
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- Username -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Masukkan username" required>
                                                </div>

                                                <!-- Email -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="contoh@email.com" required>
                                                </div>

                                                <!-- Password -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                        placeholder="Minimal 6 karakter" required>
                                                </div>

                                                <!-- No SIP -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">No SIP</label>
                                                    <input type="text" class="form-control" name="no_sip"
                                                        placeholder="Nomor SIP dokter" required>
                                                </div>

                                                <!-- Telepon -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Telepon</label>
                                                    <input type="text" class="form-control" name="telepon"
                                                        placeholder="08xxxxxxxxxx" required>
                                                </div>

                                                <!-- Spesialisasi -->
                                                <div class="col-md-6">
                                                    <label class="form-label fw-semibold">Spesialisasi</label>
                                                    <input type="text" class="form-control" name="spesialisasi"
                                                        placeholder="Contoh: Anak, Bedah, Kandungan" required>
                                                </div>

                                                <!-- Jadwal Praktek -->
                                                <div class="col-12">
                                                    <label class="form-label fw-semibold">Jadwal Praktek</label>
                                                    <div class="row g-2">
                                                        <div class="col-4">
                                                            <select id="hari" class="form-select">
                                                                <option disabled selected>Pilih Hari</option>
                                                                @foreach (['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'] as $hari)
                                                                    <option value="{{ $hari }}">
                                                                        {{ ucfirst($hari) }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-3">
                                                            <input type="time" id="mulai" class="form-control">
                                                        </div>
                                                        <div class="col-3">
                                                            <input type="time" id="selesai" class="form-control">
                                                        </div>
                                                        <div class="col-2">
                                                            <button type="button" class="btn btn-primary w-100 h-100"
                                                                onclick="tambahJadwal(this)">+</button>
                                                        </div>
                                                    </div>
                                                    <div id="jadwalList" class="mt-2"></div>
                                                </div>

                                                <!-- Status -->
                                                <div class="col-12">
                                                    <label class="form-label fw-semibold d-block">Status</label>
                                                    <div class="btn-group w-100" role="group">
                                                        <input type="radio" class="btn-check" name="aktif"
                                                            id="statusAktif" value="1" checked>
                                                        <label class="btn btn-outline-success" for="statusAktif">
                                                            <i class="fas fa-check-circle me-1"></i> Aktif
                                                        </label>

                                                        <input type="radio" class="btn-check" name="aktif"
                                                            id="statusNonaktif" value="0">
                                                        <label class="btn btn-outline-danger" for="statusNonaktif">
                                                            <i class="fas fa-times-circle me-1"></i> Nonaktif
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tombol -->
                                            <div class="modal-footer border-0 mt-4">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-success px-4">
                                                    <i class="fas fa-save me-1"></i> Simpan
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Tambahan CSS untuk tombol pink -->
                        <style>
                            .btn-outline-pink {
                                color: #d63384;
                                border-color: #d63384;
                            }

                            .btn-outline-pink:hover,
                            .btn-check:checked+.btn-outline-pink {
                                color: #fff;
                                background-color: #d63384;
                                border-color: #d63384;
                            }
                        </style>



                        <!--end::Tab Content-->

                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Content wrapper-->
            @endsection
