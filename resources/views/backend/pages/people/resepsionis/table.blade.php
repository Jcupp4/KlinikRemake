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
                            Resepsionis
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
                                Resepsionis </li>
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
                        <a class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal"
                            data-bs-target="#tambahResepsionisModal">
                            Add Resepsionis
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

                <!--begin::Form-->
                <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light"
                    style="background-color: #1C325E;">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div>
                            <!-- Judul Halaman -->
                            <h2 class="fw-bold text-white mb-3">
                                <span class="me-2">Users Resepsionis :</span>
                                <span class="badge bg-light text-dark fs-6 p-2 rounded-pill">
                                    {{ $resepsionis->count() }}
                                </span>
                            </h2>

                            <!-- Subteks -->
                            <p class="text-white-50 fs-6 mb-4">
                                Kelola data resepsionis dengan mudah. Gunakan kolom pencarian untuk menemukan resepsionis
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
                                        value="" placeholder="Cari Resepsionis..." />
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
                                data-placeholder="Export" class="form-select form-select-sm border-body bg-body w-100px">
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
                            @forelse($resepsionis as $res)
                                <div class="col-md-6 col-xxl-4 d-flex">
                                    <div class="card shadow-sm rounded-4 border-0 h-100 w-100"
                                        style="transition: transform 0.3s; cursor: pointer;">
                                        <div class="card-body d-flex flex-column align-items-center p-5">

                                            <!-- Avatar -->
                                            <div class="symbol symbol-80px mb-4">
                                                <div class="symbol-label bg-light-primary d-flex align-items-center justify-content-center rounded-circle shadow"
                                                    style="width: 80px; height: 80px;">
                                                    <i class="bi bi-person-circle fs-2 text-primary"></i>
                                                </div>
                                            </div>

                                            <!-- Nama -->
                                            <a href="{{ route('resepsionis.view', $res->id) }}"
                                                class="fs-5 text-dark fw-bold mb-1 text-center text-hover-primary">
                                                {{ $res->person->name ?? '-' }}
                                            </a>

                                            <!-- Jenis Kelamin -->
                                            <div class="fw-medium text-muted mb-2 text-center small">
                                                {{ ucfirst($res->person->sex ?? '-') }}
                                            </div>

                                            <!-- Shift -->
                                            <div class="fw-medium text-muted mb-3 text-center small">
                                                Shift: {{ ucfirst($res->shift ?? '-') }}
                                            </div>

                                            <!-- Status -->
                                            <div class="mb-3 text-center">
                                                @if ($res->status == 'aktif')
                                                    <span class="badge bg-success px-3 py-2 fw-semibold">Aktif</span>
                                                @else
                                                    <span class="badge bg-danger px-3 py-2 fw-semibold">Nonaktif</span>
                                                @endif
                                            </div>

                                            <!-- Actions -->
                                            <div class="d-flex justify-content-center gap-2 mt-auto flex-wrap">
                                                <a href="{{ route('resepsionis.view', $res->id) }}"
                                                    class="btn btn-outline-primary btn-sm fw-semibold shadow-sm">
                                                    <i class="bi bi-eye me-1"></i> View
                                                </a>
                                                <form action="{{ route('resepsionis.delete', $res->id) }}" method="POST"
                                                    onsubmit="return confirm('Yakin hapus data ini?')" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm fw-semibold shadow-sm">
                                                        <i class="bi bi-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12 text-center text-muted">
                                    Tidak ada data resepsionis.
                                </div>
                            @endforelse
                        </div>

                        {{-- <!-- Pagination -->
                        <div class="d-flex flex-stack flex-wrap pt-10 align-items-center">
                            <div class="fs-6 fw-semibold text-muted">
                                Showing {{ $resepsionis->firstItem() ?? 0 }} to {{ $resepsionis->lastItem() ?? 0 }} of
                                {{ $resepsionis->total() ?? 0 }} entries
                            </div>
                            <ul class="pagination mb-0">
                                <li class="page-item previous">
                                    <a href="{{ $resepsionis->previousPageUrl() }}" class="page-link">
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>
                                @foreach ($resepsionis->getUrlRange(1, $resepsionis->lastPage()) as $page => $url)
                                    <li class="page-item {{ $resepsionis->currentPage() == $page ? 'active' : '' }}">
                                        <a href="{{ $url }}" class="page-link">{{ $page }}</a>
                                    </li>
                                @endforeach
                                <li class="page-item next">
                                    <a href="{{ $resepsionis->nextPageUrl() }}" class="page-link">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>

                    <!--end::Tab pane Card-->

                    <!--begin::Tab pane Table-->

                    <!-- Modal Tambah Resepsionis -->
                    <div class="modal fade" id="tambahResepsionisModal" tabindex="-1"
                        aria-labelledby="tambahResepsionisLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content rounded-3 shadow-lg">

                                <form method="POST" action="{{ route('resepsionis.store') }}">
                                    @csrf
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="tambahResepsionisLabel">
                                            <i class="fas fa-user-plus me-2"></i> Form Tambah Resepsionis
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Tutup"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <!-- Nama Lengkap -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                                    <input type="text" class="form-control" name="nama_lengkap"
                                                        placeholder="Masukkan nama lengkap" required>
                                                </div>
                                            </div>

                                            <!-- Tempat Lahir -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="pob"
                                                    placeholder="Contoh: Jakarta" required>
                                            </div>

                                            <!-- Tanggal Lahir -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="dob" required>
                                            </div>

                                            <!-- Jenis Kelamin -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Jenis Kelamin</label>
                                                <div class="btn-group w-100" role="group">
                                                    <input type="radio" class="btn-check" name="sex"
                                                        value="laki-laki" id="sexL" required>
                                                    <label class="btn btn-outline-primary" for="sexL"><i
                                                            class="fas fa-mars"></i> Laki-laki</label>

                                                    <input type="radio" class="btn-check" name="sex"
                                                        value="perempuan" id="sexP">
                                                    <label class="btn btn-outline-danger" for="sexP"><i
                                                            class="fas fa-venus"></i> Perempuan</label>
                                                </div>
                                            </div>

                                            <!-- Username -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Username</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    <input type="text" class="form-control" name="username"
                                                        placeholder="Username unik" required>
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="email@domain.com" required>
                                                </div>
                                            </div>

                                            <!-- Telepon -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">No. Telepon</label>
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    <input type="text" class="form-control" name="no_telepon"
                                                        placeholder="08xxxxxxxxxx" required>
                                                </div>
                                            </div>

                                            <!-- Password -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Minimal 6 karakter" required>
                                                <small class="text-muted"><i class="fas fa-info-circle"></i> Gunakan
                                                    kombinasi
                                                    huruf & angka.</small>
                                            </div>

                                            <!-- Alamat -->
                                            <div class="col-12">
                                                <label class="form-label fw-semibold">Alamat</label>
                                                <textarea class="form-control" name="alamat" rows="2" placeholder="Tulis alamat lengkap..." required></textarea>
                                            </div>

                                            <!-- Shift -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Shift</label>
                                                <select name="shift" class="form-select" required>
                                                    <option disabled selected>Pilih Shift</option>
                                                    <option value="pagi">🌅 Pagi</option>
                                                    <option value="siang">🌞 Siang</option>
                                                    <option value="malam">🌙 Malam</option>
                                                </select>
                                            </div>

                                            <!-- Status -->
                                            <div class="col-md-6">
                                                <label class="form-label fw-semibold">Status</label>
                                                <div class="btn-group w-100" role="group">
                                                    <input type="radio" class="btn-check" name="status"
                                                        value="aktif" id="statusA" checked>
                                                    <label class="btn btn-outline-success" for="statusA"><i
                                                            class="fas fa-check"></i> Aktif</label>

                                                    <input type="radio" class="btn-check" name="status"
                                                        value="nonaktif" id="statusN">
                                                    <label class="btn btn-outline-secondary" for="statusN"><i
                                                            class="fas fa-ban"></i> Nonaktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i> Batal
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="fas fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--end::Tab Content-->

                </div>
                <!--end::Content-->

            </div>
            <!--end::Content wrapper-->
        @endsection
