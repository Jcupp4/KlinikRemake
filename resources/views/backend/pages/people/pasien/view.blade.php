@extends('backend.master')

@section('title')
    <title>Profile Pasien | Aplikasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">

        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="d-flex flex-column flex-xl-row">

                <!-- Sidebar Pasien -->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="card-body pt-15 position-relative">

                            <!-- Tombol Edit -->
                            <button type="button"
                                class="btn btn-light btn-sm rounded-circle position-absolute end-0 top-0 m-3 shadow-sm"
                                data-bs-toggle="modal" data-bs-target="#UpdatePasienModal" title="Edit Data Pasien">
                                <i class="bi bi-pencil-fill text-primary"></i>
                            </button>

                            <!-- Avatar & Nama -->
                            <div class="d-flex flex-column align-items-center mb-5 text-center">
                                <div class="symbol symbol-100px symbol-circle mb-4 position-relative">
                                    <img src="{{ asset('../../assets/media/avatars/300-1.jpg') }}" alt="Pasien"
                                        class="border border-3 border-primary-subtle shadow-sm" />
                                    <span
                                        class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-white p-2 shadow-sm"
                                        title="Online"></span>
                                </div>

                                <h4 class="fw-bold mb-1 text-gray-800">{{ $pasien->person?->name ?? '-' }}</h4>
                                <div class="fs-6 fw-semibold text-muted">{{ $age ? $age . ' Tahun' : '-' }}</div>
                            </div>

                            <!-- Statistik Ringkas -->
                            <div class="row g-3 text-center mb-5">
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3 shadow-sm h-100 animate-stat">
                                        <div class="fs-5 fw-bold text-primary">{{ $pasien->total_visits ?? 0 }}</div>
                                        <div class="fw-semibold text-muted small">Kunjungan</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3 shadow-sm h-100 animate-stat">
                                        <div class="fs-5 fw-bold text-success">{{ $pasien->upcoming_appointment ?? '-' }}
                                        </div>
                                        <div class="fw-semibold text-muted small">Janji Berikutnya</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3 shadow-sm h-100 animate-stat">
                                        <div class="fs-5 fw-bold text-info">{{ $pasien->total_prescriptions ?? 0 }}</div>
                                        <div class="fw-semibold text-muted small">Resep Obat</div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card bg-light border-0 rounded-4 p-3 shadow-sm h-100 animate-stat">
                                        <div class="fs-5 fw-bold text-warning">{{ $pasien->total_medical_history ?? 0 }}
                                        </div>
                                        <div class="fw-semibold text-muted small">Riwayat Sakit</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="card bg-light border-0 rounded-4 p-3 shadow-sm h-100 animate-stat">
                                        <div class="fs-5 fw-bold text-danger">{{ $pasien->total_payments ?? 0 }}</div>
                                        <div class="fw-semibold text-muted small">Pembayaran</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Pasien -->
                            <div class="separator separator-dashed mb-4"></div>
                            <div class="py-2 fs-6">
                                <div class="fw-bold mt-3">
                                    <i class="bi bi-card-text text-primary me-2"></i>No Rekam Medis
                                </div>
                                <div class="text-gray-700">{{ $pasien->no_rm ?? '-' }}</div>

                                <div class="fw-bold mt-3">
                                    <i class="bi bi-envelope text-primary me-2"></i>Email
                                </div>
                                <div class="text-gray-700">{{ $pasien->person?->email ?? '-' }}</div>

                                <div class="fw-bold mt-3">
                                    <i class="bi bi-telephone text-primary me-2"></i>Telepon
                                </div>
                                <div class="text-gray-700">{{ $pasien->kontak_darurat ?? '-' }}</div>

                                <div class="fw-bold mt-3">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>Alamat
                                </div>
                                <div class="text-gray-700">{{ $pasien->alamat ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Konten Pasien -->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <ul class="nav nav-tabs justify-content-between flex-wrap border-0 mb-5 px-2" style="gap: .75rem;">

                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link active rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#overview_tab">
                                <i class="bi bi-person-lines-fill fs-4 mb-1"></i>
                                <span>Overview</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- Overview -->
                        <div class="tab-pane fade show active" id="overview_tab">
                            <h4 class="fw-bold mb-4 text-primary border-bottom pb-2">
                                <i class="bi bi-person-lines-fill me-2"></i>Informasi Pasien
                            </h4>

                            <div class="row g-4">
                                <!-- Card: Nama -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm border-0 rounded-4 h-100">
                                        <div class="card-body d-flex align-items-center">
                                            <div
                                                class="icon-wrapper bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-3">
                                                <i class="bi bi-person-badge fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Nama Lengkap</div>
                                                <div class="fw-semibold fs-6">{{ $pasien->person?->name ?? '-' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Umur -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm border-0 rounded-4 h-100">
                                        <div class="card-body d-flex align-items-center">
                                            <div
                                                class="icon-wrapper bg-success bg-opacity-10 text-success rounded-3 p-3 me-3">
                                                <i class="bi bi-calendar-event fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Umur</div>
                                                <div class="fw-semibold fs-6">{{ $age ? $age . ' Tahun' : '-' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Jenis Kelamin -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm border-0 rounded-4 h-100">
                                        <div class="card-body d-flex align-items-center">
                                            <div class="icon-wrapper bg-info bg-opacity-10 text-info rounded-3 p-3 me-3">
                                                <i class="bi bi-gender-ambiguous fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Jenis Kelamin</div>
                                                <div class="fw-semibold fs-6">{{ $pasien->person?->sex ?? '-' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Total Kunjungan -->
                                <div class="col-md-6 col-lg-4">
                                    <div class="card shadow-sm border-0 rounded-4 h-100">
                                        <div class="card-body d-flex align-items-center">
                                            <div
                                                class="icon-wrapper bg-warning bg-opacity-10 text-warning rounded-3 p-3 me-3">
                                                <i class="bi bi-people fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Total Kunjungan</div>
                                                <div class="fw-semibold fs-6">{{ $pasien->total_kunjungan ?? '0' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card: Alamat -->
                                <div class="col-md-6 col-lg-8">
                                    <div class="card shadow-sm border-0 rounded-4">
                                        <div class="card-body d-flex align-items-center">
                                            <div
                                                class="icon-wrapper bg-danger bg-opacity-10 text-danger rounded-3 p-3 me-3">
                                                <i class="bi bi-geo-alt fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Alamat</div>
                                                <div class="fw-semibold fs-6">{{ $pasien->alamat ?? '-' }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // cek query string tab=...
            const urlParams = new URLSearchParams(window.location.search);
            const activeTab = urlParams.get('tab');

            if (activeTab) {
                const triggerEl = document.querySelector(`a[href="#${activeTab}_tab"]`);
                if (triggerEl) {
                    // paksa tab aktif
                    new bootstrap.Tab(triggerEl).show();
                }
            }
        });
    </script>
@endpush
