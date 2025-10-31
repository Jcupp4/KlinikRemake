@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div class="container-fluid d-flex flex-stack" id="kt_toolbar">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Dashboard Administrator
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-gray-900">Administrator</li>
                </ul>
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-sm btn-flex bg-body fw-bold me-2" data-kt-menu-trigger="click"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1"></i> Filter
                </a>
                <a href="#" class="btn btn-sm btn-primary fw-bold" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">
                    Create
                </a>
            </div>
            <!--end::Actions-->
        </div>
    </div>
    <!--end::Toolbar-->

    <!--begin::Content-->
    <div class="container-fluid pt-6">
        <div class="row g-5">
            <!-- Kolom kiri -->
            <div class="col-xl-8 d-flex flex-column">
                <!-- Card pertama -->
                <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light"
                    style="background-color: #1C325E;">
                    <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <div>
                            <!-- Judul Utama -->
                            <!-- Card -->
                            <h2 class="fw-bold text-white mb-3">
                                Nomor Antrian Terakhir:
                                {{ $lastAntrian ?? 'Belum ada' }}
                            </h2>

                            <p class="text-white-50 fs-6 mb-4">
                                Nomor berikutnya: <span class="fw-bold">{{ $nextAntrian }}</span>
                            </p>


                            <!-- Subteks -->
                            <p class="text-white-50 fs-6 mb-4">
                                Segera proses pasien yang menunggu agar pelayanan tetap lancar.
                            </p>

                            <!-- Tombol Aksi -->
                            <div class="d-flex flex-wrap gap-2">
                                <!-- Tombol Aksi -->
                                <div class="d-flex flex-wrap gap-3">
                                    <button type="button" class="btn btn-danger fw-semibold px-4 shadow-sm"
                                        data-bs-toggle="modal" data-bs-target="#antrianModal">
                                        Lihat Antrian
                                    </button>
                                    <a href="{{ route('pasien.form') }}"
                                        class="btn btn-outline-light fw-semibold px-4 shadow-sm border-2">
                                        Registrasi Pasien Baru
                                    </a>
                                </div>

                            </div>
                        </div>

                        <!-- Ilustrasi kanan -->
                        <img src="../assets/media/illustrations/sigma-1/17-dark.png" class="h-200px mt-5 mt-md-0"
                            alt="">
                    </div>
                </div>

                <!-- Grid statistik -->
                <div class="row g-5 flex-grow-1">
                    <div class="col-md-6">
                        <div class="bg-light-primary rounded-2 p-6 h-100">
                            <div class="text-gray-900 fw-bolder fs-2qx mb-1">{{ $jumlahPasien }}</div>
                            <div class="text-gray-600 fw-semibold fs-6">Jumlah Pasien</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light-success rounded-2 p-6 h-100">
                            <div class="text-gray-900 fw-bolder fs-2qx mb-1">{{ $kunjunganHariIni }}</div>
                            <div class="text-gray-600 fw-semibold fs-6">Kunjungan Hari Ini</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light-info rounded-2 p-6 h-100">
                            <div class="text-gray-900 fw-bolder fs-2qx mb-1">{{ $obatTersedia }}</div>
                            <div class="text-gray-600 fw-semibold fs-6">Obat Tersedia</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-light-warning rounded-2 p-6 h-100">
                            <div class="text-gray-900 fw-bolder fs-2qx mb-1">
                                Rp {{ number_format($totalUangTransaksiBulanIni, 0, ',', '.') }}
                            </div>
                            <div class="text-gray-600 fw-semibold fs-6">Total Pendapatan Bulan Ini</div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Kolom kanan -->
            <div class="col-xl-4">
                <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header border-0 pt-5 pb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="card-title fw-bold text-gray-900 mb-1 fs-4">Daftar Pegawai</h3>
                            <span class="text-muted fs-7">Chicago Medical Center</span>
                        </div>
                    </div>

                    <div class="card-body pt-2">
                        <div class="scroll-y pe-2" style="max-height: 420px;">

                            <!-- Dokter -->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-heart-pulse-fill fs-5 text-danger me-2"></i>
                                    <h5 class="fw-semibold text-gray-800 mb-0">Dokter</h5>
                                </div>
                                @forelse ($dokters as $dokter)
                                    <div
                                        class="p-3 bg-light rounded-3 mb-3 border border-light-subtle d-flex justify-content-between align-items-center shadow-sm hover-elevate-up">
                                        <div>
                                            <div class="fw-semibold text-gray-800 fs-6">{{ $dokter->person->name }}</div>
                                            <small class="text-muted">Spesialis:
                                                {{ ucfirst($dokter->spesialisasi ?? 'Umum') }}</small>
                                        </div>
                                        <span class="badge bg-light-danger text-danger px-3 py-2 fs-8 fw-bold">
                                            {{ ucfirst($dokter->spesialisasi ?? 'Umum') }}
                                        </span>
                                    </div>
                                @empty
                                    <div class="text-muted fst-italic">Belum ada data dokter</div>
                                @endforelse
                            </div>

                            <!-- Resepsionis -->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-people-fill fs-5 text-primary me-2"></i>
                                    <h5 class="fw-semibold text-gray-800 mb-0">Resepsionis</h5>
                                </div>
                                @forelse ($resepsionis as $r)
                                    <div
                                        class="p-3 bg-light rounded-3 mb-3 border border-light-subtle d-flex justify-content-between align-items-center shadow-sm hover-elevate-up">
                                        <div>
                                            <div class="fw-semibold text-gray-800 fs-6">{{ $r->person->name }}</div>
                                            <small class="text-muted">Shift:
                                                {{ ucfirst($r->shift ?? 'Tidak Diketahui') }}</small>
                                        </div>
                                        <span class="badge bg-light-warning text-warning px-3 py-2 fs-8 fw-bold">
                                            {{ ucfirst($r->shift ?? '-') }}
                                        </span>
                                    </div>
                                @empty
                                    <div class="text-muted fst-italic">Belum ada data resepsionis</div>
                                @endforelse
                            </div>

                            <!-- Farmasi -->
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-capsule fs-5 text-success me-2"></i>
                                    <h5 class="fw-semibold text-gray-800 mb-0">Farmasi</h5>
                                </div>
                                @forelse ($farmasis as $f)
                                    <div
                                        class="p-3 bg-light rounded-3 mb-3 border border-light-subtle d-flex justify-content-between align-items-center shadow-sm hover-elevate-up">
                                        <div>
                                            <div class="fw-semibold text-gray-800 fs-6">{{ $f->person->name }}</div>
                                            <small class="text-muted">Status: {{ $f->status_kerja ?? 'Aktif' }}</small>
                                        </div>
                                        <span class="badge bg-light-success text-success px-3 py-2 fs-8 fw-bold">
                                            {{ ucfirst($f->status_kerja ?? 'Aktif') }}
                                        </span>
                                    </div>
                                @empty
                                    <div class="text-muted fst-italic">Belum ada data farmasi</div>
                                @endforelse
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Antrian -->
            <div class="modal fade" id="antrianModal" tabindex="-1" aria-labelledby="antrianModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content shadow-lg border-0">

                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title fw-bold" id="antrianModalLabel">Nomor Antrian Hari
                                Ini</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>

                        <div class="modal-body text-center py-5">
                            @if ($lastAntrian)
                                <h1 class="display-3 fw-bold text-danger mb-3">
                                    {{ $lastAntrian }}
                                </h1>
                                <p class="text-muted mb-0">Nomor antrian terakhir yang sudah terdaftar
                                    hari ini.</p>
                            @else
                                <div class="text-muted">
                                    <i class="bi bi-check-circle fs-1 d-block mb-2"></i>
                                    Belum ada antrian hari ini 🎉
                                </div>
                            @endif
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Tutup
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->

    <!--end::Content-->
@endsection
