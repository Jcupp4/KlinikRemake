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
                            <a class="nav-link active shadow-sm rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#periksa_tab"
                                style="border: none; background: var(--bs-primary-bg-subtle); color: var(--bs-primary); font-weight: 600;">
                                <i class="bi bi-clipboard2-pulse fs-4 mb-1"></i>
                                <span>Periksa</span>
                            </a>
                        </li>

                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#overview_tab">
                                <i class="bi bi-person-lines-fill fs-4 mb-1"></i>
                                <span>Overview</span>
                            </a>
                        </li>

                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#riwayat_tab">
                                <i class="bi bi-journal-medical fs-4 mb-1"></i>
                                <span>Riwayat Medis</span>
                            </a>
                        </li>

                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#obat_tab">
                                <i class="bi bi-capsule fs-4 mb-1"></i>
                                <span>Resep / Obat</span>
                            </a>
                        </li>

                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-3 py-3 px-4 d-flex flex-column align-items-center transition-all"
                                data-bs-toggle="tab" href="#pembayaran_tab">
                                <i class="bi bi-cash-stack fs-4 mb-1"></i>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Periksa -->
                        <div class="tab-pane fade show active" id="periksa_tab">
                            <h4 class="fw-bold mb-4 text-primary border-bottom pb-2">
                                <i class="bi bi-clipboard2-pulse me-2"></i>Input Diagnosa
                            </h4>

                            <form method="POST" action="{{ route('visit.periksa.store', $visit->id) }}"
                                class="p-4 shadow-sm rounded-4 border-0">
                                @csrf

                                <!-- Pilih Kode Penyakit -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold text-muted">
                                        <i class="bi bi-virus me-1 text-primary"></i> Pilih Kode Penyakit
                                    </label>
                                    <select name="icd_id" class="form-select form-select-lg rounded-3 shadow-sm"
                                        required>
                                        <option value="">-- Pilih Kode --</option>
                                        @foreach ($icdCodes as $code)
                                            <option value="{{ $code->id }}">{{ $code->code }} -
                                                {{ $code->description }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Catatan -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold text-muted">
                                        <i class="bi bi-journal-text me-1 text-success"></i> Catatan
                                    </label>
                                    <textarea name="catatan" class="form-control rounded-3 shadow-sm" rows="3"
                                        placeholder="Tuliskan catatan diagnosa..."></textarea>
                                </div>

                                <!-- Rujukan -->
                                <div class="mb-4">
                                    <label class="form-label fw-semibold text-muted d-block mb-2">
                                        <i class="bi bi-arrow-left-right me-1 text-warning"></i> Rujukan
                                    </label>
                                    <div class="d-flex gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rujukan"
                                                id="rujukTidak" value="tidak" checked>
                                            <label class="form-check-label" for="rujukTidak">Tidak</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status_rujukan"
                                                id="rujukYa" value="dirujuk">
                                            <label class="form-check-label" for="rujukYa">Rujuk</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Field tambahan jika rujuk -->
                                <div id="rujukanFields" class="border-top pt-4 mt-3" style="display: none;">
                                    <div class="alert alert-info d-flex align-items-center rounded-3 py-2 px-3 mb-4">
                                        <i class="bi bi-hospital me-2 fs-5"></i>
                                        <div><strong>Data Rujukan</strong> — Isi jika pasien akan dirujuk.</div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-muted">
                                            <i class="bi bi-pencil-square me-1 text-danger"></i> Alasan Rujukan
                                        </label>
                                        <textarea name="alasan_rujukan" class="form-control rounded-3 shadow-sm" rows="2"
                                            placeholder="Tuliskan alasan rujukan..."></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-muted">
                                            <i class="bi bi-hospital-fill me-1 text-primary"></i> Tujuan Rujukan
                                        </label>
                                        <select name="rujukan_id" id="rujukanSelect"
                                            class="form-select rounded-3 shadow-sm">
                                            <option value="">-- Pilih Rumah Sakit --</option>
                                            @foreach ($rumahsakit as $rs)
                                                <option value="{{ $rs->id }}" data-alamat="{{ $rs->alamat }}"
                                                    data-telepon="{{ $rs->telepon }}">
                                                    {{ $rs->nama_rs }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-muted">
                                            <i class="bi bi-geo-alt me-1 text-danger"></i> Alamat Tujuan
                                        </label>
                                        <input type="text" name="alamat_tujuan" id="alamatTujuan"
                                            class="form-control rounded-3 shadow-sm"
                                            placeholder="Alamat rumah sakit tujuan">
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-semibold text-muted">
                                            <i class="bi bi-telephone me-1 text-success"></i> Telepon Tujuan
                                        </label>
                                        <input type="text" name="telepon_tujuan"
                                            class="form-control rounded-3 shadow-sm"
                                            placeholder="Nomor telepon rumah sakit">
                                    </div>
                                </div>

                                <!-- Tombol Simpan -->
                                <div class="d-flex justify-content-end mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-3 px-4">
                                        <i class="bi bi-save me-2"></i> Simpan Diagnosa
                                    </button>
                                </div>
                            </form>
                        </div>


                        <!-- Overview -->
                        <div class="tab-pane fade" id="overview_tab">
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


                        <!-- Riwayat Medis -->
                        <div class="tab-pane fade show" id="riwayat_tab">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="fw-bold mb-0">Riwayat Medis Pasien</h4>
                            </div>

                            @php
                                $riwayat = \App\Models\Diagnosa::with(['icd', 'dokter.person', 'rujukan', 'visits'])
                                    ->whereHas('visits', function ($query) use ($pasien) {
                                        $query->where('pasien_id', $pasien->id);
                                    })
                                    ->orderByDesc('created_at')
                                    ->get();
                            @endphp


                            @if ($riwayat->isEmpty())
                                <div class="alert alert-info text-center">
                                    <i class="bi bi-info-circle me-2"></i> Belum ada riwayat medis pasien ini.
                                </div>
                            @else
                                @foreach ($riwayat as $diag)
                                    <div class="card shadow-sm border-0 mb-4 rounded-4 bg-body-tertiary">
                                        <div
                                            class="card-header bg-body-secondary d-flex justify-content-between align-items-center py-3">
                                            <div>
                                                <i class="bi bi-calendar-event me-1 text-primary"></i>
                                                <span class="fw-semibold text-primary">
                                                    {{ optional($diag->visits)->created_at ? \Carbon\Carbon::parse($diag->visits->created_at)->format('d M Y') : '-' }}
                                                </span>

                                            </div>
                                            <span
                                                class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">
                                                {{ $diag->dokter?->person?->name ?? 'Dokter Tidak Diketahui' }}
                                            </span>
                                        </div>

                                        <div class="card-body bg-body p-4">
                                            <div class="mb-3 border-bottom pb-2">
                                                <h6 class="fw-semibold mb-1">
                                                    <i class="bi bi-clipboard2-pulse me-2 text-secondary"></i>
                                                    Diagnosa:
                                                </h6>
                                                <p class="mb-0 text-white">
                                                    {{ $diag->icd?->code ?? ($diag->kode_icd ?? '-') }} —
                                                    {{ $diag->icd?->description ?? ($diag->deskripsi ?? '-') }}
                                                </p>

                                                @if (!empty($diag->catatan))
                                                    <div class="mt-2">
                                                        <h6 class="fw-semibold mb-1">
                                                            <i class="bi bi-journal-text me-2 text-secondary"></i>
                                                            Catatan Dokter:
                                                        </h6>
                                                        <p class="text-muted fst-italic mb-0">
                                                            "{{ $diag->catatan }}"
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>

                                            @if ($diag->status_rujukan === 'dirujuk')
                                                <div class="mt-3 border-top pt-3">
                                                    <h6 class="fw-semibold text-warning mb-1">
                                                        <i class="bi bi-arrow-right-square me-2"></i> Status Rujukan:
                                                    </h6>
                                                    <p class="mb-0 text-warning">
                                                        Dirujuk ke {{ $diag->rujukan?->nama_rs ?? '-' }}
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>


                        <!-- Resep / Obat -->
                        <div class="tab-pane fade show" id="obat_tab">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="fw-bold mb-0">Riwayat Obat / Resep</h4>
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#tambahResepModal">
                                    <i class="bi bi-plus-lg me-1"></i> Tambah Resep
                                </button>
                            </div>

                            @php
                                $orders = $pasien->medicineOrders ?? collect();
                            @endphp

                            @if ($orders->isEmpty())
                                <div class="alert alert-info text-center">
                                    <i class="bi bi-info-circle me-2"></i> Belum ada riwayat resep.
                                </div>
                            @else
                                @foreach ($orders as $order)
                                    <div class="card shadow-sm border-0 mb-4 rounded-4 bg-body-tertiary">
                                        <div
                                            class="card-header bg-body-secondary d-flex justify-content-between align-items-center py-3">
                                            <div>
                                                <span class="fw-semibold text-primary">
                                                    <i class="bi bi-calendar-event me-1"></i>
                                                    {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y') }}
                                                </span>
                                            </div>
                                            <span
                                                class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2">
                                                {{ $order->dokter?->person?->name ?? 'Dokter Tidak Diketahui' }}
                                            </span>
                                        </div>

                                        <div class="card-body bg-body p-4">
                                            <div class="list-group list-group-flush">
                                                @forelse ($order->items ?? [] as $item)
                                                    <div
                                                        class="list-group-item bg-transparent border-0 px-0 py-2 d-flex justify-content-between">
                                                        <div>
                                                            <div class="fw-semibold text-white">
                                                                <i class="bi bi-capsule me-1 text-secondary"></i>
                                                                {{ $item->medicine?->name ?? 'Obat Tidak Dikenal' }}
                                                            </div>
                                                            <div class="small text-muted">
                                                                Dosis: {{ $item->dosis ?? '-' }} |
                                                                Jumlah: {{ $item->qty ?? '-' }} |
                                                                Aturan: {{ $item->aturan_pakai ?? '-' }}
                                                            </div>
                                                        </div>
                                                        <div class="text-end">
                                                            <span class="fw-bold text-success">
                                                                Rp
                                                                {{ number_format(($item->harga ?? 0) * ($item->qty ?? 0), 0, ',', '.') }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <div class="text-muted fst-italic">Belum ada obat diresepkan.</div>
                                                @endforelse
                                            </div>

                                            <div class="border-top mt-3 pt-3 d-flex justify-content-between">
                                                <strong>Total Resep:</strong>
                                                <span class="text-success fw-bold">
                                                    Rp
                                                    {{ number_format($order->items?->sum(fn($i) => ($i->harga ?? 0) * ($i->qty ?? 0)) ?? 0, 0, ',', '.') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>


                        <!-- Pembayaran -->
                        <div class="tab-pane fade show" id="pembayaran_tab">
                            <h4 class="fw-bold mb-4">Rincian Pembayaran Pasien</h4>

                            @if ($visit->payments->isEmpty())
                                <div class="alert alert-info text-center">
                                    <i class="bi bi-info-circle me-2"></i> Belum ada riwayat pembayaran.
                                </div>
                            @else
                                @foreach ($visit->payments as $payment)
                                    <div class="card shadow-sm border-0 mb-4 rounded-4 overflow-hidden">
                                        <div
                                            class="card-header bg-light d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="fw-bold mb-0 text-primary">
                                                    Pembayaran #{{ $loop->iteration }}
                                                </h6>
                                                <small class="text-muted">
                                                    {{ $payment->created_at->format('d M Y, H:i') }}
                                                </small>
                                            </div>
                                            <div>
                                                @if ($payment->status == 'paid')
                                                    <span class="badge bg-success fs-6 px-3 py-2 rounded-pill">
                                                        <i class="bi bi-check-circle me-1"></i> Lunas
                                                    </span>
                                                @elseif ($payment->status == 'unpaid')
                                                    <span class="badge bg-warning text-dark fs-6 px-3 py-2 rounded-pill">
                                                        <i class="bi bi-hourglass-split me-1"></i> Belum Bayar
                                                    </span>
                                                @else
                                                    <span class="badge bg-secondary fs-6 px-3 py-2 rounded-pill">
                                                        <i class="bi bi-question-circle me-1"></i>
                                                        {{ ucfirst($payment->status) }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <!-- Biaya Administrasi -->
                                            <div class="mb-3">
                                                <h6 class="fw-semibold text-dark mb-2">
                                                    <i class="bi bi-file-earmark-text me-2 text-secondary"></i> Biaya
                                                    Administrasi
                                                </h6>
                                                <div class="bg-light p-3 rounded-3">
                                                    @php
                                                        $adminCharge = $visit->charges
                                                            ->where('charge.name', 'Administrasi')
                                                            ->first();
                                                    @endphp
                                                    @if ($adminCharge)
                                                        <div class="d-flex justify-content-between">
                                                            <span>{{ $adminCharge->charge->name }}</span>
                                                            <strong>Rp
                                                                {{ number_format($adminCharge->total, 0, ',', '.') }}</strong>
                                                        </div>
                                                    @else
                                                        <small class="text-muted">Belum ada biaya administrasi.</small>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Biaya Pemeriksaan -->
                                            <div class="mb-3">
                                                <h6 class="fw-semibold text-dark mb-2">
                                                    <i class="bi bi-stethoscope me-2 text-secondary"></i> Biaya Pemeriksaan
                                                    Dokter
                                                </h6>
                                                <div class="bg-light p-3 rounded-3">
                                                    @php
                                                        $checkupCharge = $visit->charges
                                                            ->where('charge.name', 'Pemeriksaan Dokter')
                                                            ->first();
                                                    @endphp
                                                    @if ($checkupCharge)
                                                        <div class="d-flex justify-content-between">
                                                            <span>{{ $checkupCharge->charge->name }}</span>
                                                            <strong>Rp
                                                                {{ number_format($checkupCharge->total, 0, ',', '.') }}</strong>
                                                        </div>
                                                    @else
                                                        <small class="text-muted">Belum ada biaya pemeriksaan.</small>
                                                    @endif
                                                </div>
                                            </div>

                                            <!-- Biaya Obat -->
                                            <div class="mb-3">
                                                <h6 class="fw-semibold text-dark mb-2">
                                                    <i class="bi bi-capsule me-2 text-secondary"></i> Biaya Obat
                                                </h6>
                                                <div class="bg-light p-3 rounded-3">
                                                    @php
                                                        // Ambil semua item obat berdasarkan visit_id langsung dari model dengan relasi order
                                                        $medicineItems = \App\Models\MedicineOrderItems::whereHas(
                                                            'order',
                                                            function ($q) use ($visit) {
                                                                $q->where('visit_id', $visit->id);
                                                            },
                                                        )
                                                            ->with('medicine')
                                                            ->get();

                                                        // Hitung total keseluruhan biaya obat
                                                        $totalObat = $medicineItems->sum(function ($item) {
                                                            return ($item->qty ?? 0) * ($item->harga ?? 0);
                                                        });
                                                    @endphp

                                                    @if ($medicineItems->count() > 0)
                                                        <ul class="list-unstyled mb-0">
                                                            @foreach ($medicineItems as $item)
                                                                <li
                                                                    class="d-flex justify-content-between border-bottom py-1">
                                                                    <span>
                                                                        {{ $item->medicine->name ?? 'Obat' }}
                                                                        ({{ $item->qty }}x)
                                                                    </span>
                                                                    <strong>
                                                                        Rp
                                                                        {{ number_format(($item->qty ?? 0) * ($item->harga ?? 0), 0, ',', '.') }}
                                                                    </strong>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                        <!-- Total Biaya Obat -->
                                                        <div class="border-top pt-2 mt-2 d-flex justify-content-between">
                                                            <strong>Total Biaya Obat:</strong>
                                                            <span class="fw-bold text-success">
                                                                Rp {{ number_format($totalObat, 0, ',', '.') }}
                                                            </span>
                                                        </div>
                                                    @else
                                                        <small class="text-muted">Belum ada obat yang diresepkan.</small>
                                                    @endif
                                                </div>
                                            </div>


                                            <!-- Total Keseluruhan -->
                                            <div class="border-top pt-3 mt-3 d-flex justify-content-between">
                                                <strong>Total Pembayaran:</strong>
                                                <h5 class="text-success fw-bold mb-0">
                                                    Rp {{ number_format($payment->total, 0, ',', '.') }}
                                                </h5>
                                            </div>
                                            @if ($payment->status == 'unpaid')
                                                <form action="{{ route('medicine-orders.pay', $visit->id) }}"
                                                    method="POST" class="mt-3">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success w-100">
                                                        <i class="bi bi-cash-stack me-1"></i> Bayar Sekarang
                                                    </button>
                                                </form>
                                            @endif
                                            <div class="border-top pt-3 mt-3 d-flex justify-content-between">
                                                <button type="submit" class="btn btn-sm btn-warning w-100">
                                                    <i class="bi bi-cash-stack me-1"></i> Print Invoice
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                @endforeach
                            @endif
                        </div>


                    </div>
                </div>
                <!-- Modal Edit No RekamMedis -->
                <div class="modal fade" id="UpdatePasienModal" tabindex="-1" aria-labelledby="updatePasienLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">

                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="updatePasienLabel"><i
                                        class="bi bi-person-circle me-2"></i>Update Pasien</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
                                @csrf
                                @method('post')
                                <div class="modal-body">

                                    <div class="row g-3">

                                        <div class="col-md-6">
                                            <label for="name" class="form-label"><i
                                                    class="bi bi-person me-1 text-primary"></i> Nama</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $pasien->person?->name ?? '' }}"
                                                placeholder="Masukkan nama pasien">
                                        </div>

                                        <div class="col-md-6">
                                            <label for="kontak_darurat" class="form-label"><i
                                                    class="bi bi-telephone me-1 text-primary"></i> Telepon</label>
                                            <input type="text" class="form-control" id="kontak_darurat"
                                                name="kontak_darurat" value="{{ $pasien->kontak_darurat ?? '' }}"
                                                placeholder="Masukkan nomor telepon">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label d-block"><i
                                                    class="bi bi-gender-ambiguous me-1 text-primary"></i> Jenis
                                                Kelamin</label>
                                            <div class="d-flex gap-2">
                                                <label
                                                    class="btn btn-outline-primary flex-fill text-center {{ ($pasien->person?->sex ?? '') == 'laki-laki' ? 'active' : '' }}">
                                                    <input type="radio" class="d-none" name="sex"
                                                        value="laki-laki" autocomplete="off"
                                                        {{ ($pasien->person?->sex ?? '') == 'laki-laki' ? 'checked' : '' }}>
                                                    Laki-laki
                                                </label>
                                                <label
                                                    class="btn btn-outline-danger flex-fill text-center {{ ($pasien->person?->sex ?? '') == 'perempuan' ? 'active' : '' }}">
                                                    <input type="radio" class="d-none" name="sex"
                                                        value="perempuan" autocomplete="off"
                                                        {{ ($pasien->person?->sex ?? '') == 'perempuan' ? 'checked' : '' }}>
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <label for="alamat" class="form-label"><i
                                                    class="bi bi-geo-alt me-1 text-primary"></i> Alamat</label>
                                            <textarea class="form-control" id="alamat" name="alamat" rows="2" placeholder="Masukkan alamat lengkap">{{ $pasien->alamat ?? '' }}</textarea>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label"><i
                                                    class="bi bi-envelope me-1 text-primary"></i> Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $pasien->person?->email ?? '' }}"
                                                placeholder="Masukkan email pasien">
                                        </div>

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-check2 me-1"></i>
                                        Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Tambah Resep -->
        <div class="modal fade" id="tambahResepModal" tabindex="-1" aria-labelledby="tambahResepLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content border-0 shadow-lg">

                    <!-- Header -->
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title fw-bold" id="tambahResepLabel">
                            <i class="bi bi-capsule me-2"></i> Buat Resep Baru
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>

                    <!-- Form -->
                    <form id="formTambahResep" method="POST" action="{{ route('resep.store') }}">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                        <input type="hidden" name="visit_id" value="{{ $visit->id }}">

                        <div class="modal-body">

                            <!-- Info pasien -->
                            <div class="alert alert-info py-2 mb-4">
                                <strong>Pasien:</strong> {{ $pasien->nama ?? '-' }} <br>
                                <strong>Kunjungan ID:</strong> #{{ $visit->id }}
                            </div>

                            <!-- Tabel Obat -->
                            <div class="table-responsive border rounded">
                                <table class="table table-bordered align-middle mb-0" id="tabelObat">
                                    <thead class="table-primary text-center">
                                        <tr>
                                            <th style="width: 25%">Obat</th>
                                            <th style="width: 20%">Dosis</th>
                                            <th style="width: 15%">Jumlah</th>
                                            <th style="width: 20%">Aturan Pakai</th>
                                            <th style="width: 10%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-select" name="medicine_id[]" required>
                                                    <option value="">-- Pilih Obat --</option>
                                                    @foreach ($medicines as $medicine)
                                                        <option value="{{ $medicine->id }}">{{ $medicine->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="dosis[]"
                                                    placeholder="3x1 sehari" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" name="jumlah[]"
                                                    placeholder="10" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="aturan_pakai[]"
                                                    placeholder="Setelah makan" required>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-outline-danger btn-sm btn-hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Tombol tambah obat -->
                            <div class="d-flex justify-content-end mt-3">
                                <button type="button" class="btn btn-success btn-sm" id="tambahBaris">
                                    <i class="bi bi-plus-lg me-1"></i> Tambah Obat
                                </button>
                            </div>

                            <!-- Catatan -->
                            <div class="mt-4">
                                <label for="catatan" class="form-label fw-semibold">
                                    <i class="bi bi-journal-medical me-1"></i> Catatan Dokter
                                </label>
                                <textarea class="form-control" name="catatan" rows="2" placeholder="Catatan dokter (opsional)"></textarea>
                            </div>
                        </div>

                        <!-- Footer -->
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-lg me-1"></i> Batal
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save2-fill me-1"></i> Simpan Resep
                            </button>
                        </div>
                    </form>
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
