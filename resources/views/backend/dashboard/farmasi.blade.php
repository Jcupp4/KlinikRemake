@extends('backend.master')

@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <div class="container-fluid d-flex flex-stack" id="kt_toolbar">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                    Dashboard Farmasi
                </h1>
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="../index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-muted">Dashboards</li>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                    <li class="breadcrumb-item text-gray-900">Farmasi</li>
                </ul>
            </div>


        </div>
    </div>

    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <div class="col-xl-12 d-flex flex-column">
            <!-- Card Header Dokter -->
            <div class="card border-transparent mb-5 shadow-sm" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div>
                        <!-- Judul Halaman -->
                        <h2 class="fw-bold text-white mb-3">
                            <i class="bi bi-capsule-fill text-success me-2 fs-2"></i>
                            Dashboard Farmasi
                        </h2>

                        <!-- Subteks -->
                        <p class="text-white-50 fs-6 mb-4">
                            Pantau resep obat yang masuk dari dokter dan pastikan stok obat selalu tersedia untuk pelayanan
                            cepat dan akurat.
                        </p>

                        <!-- Area Aksi Cepat -->
                        <div class="d-flex flex-wrap gap-3">
                            <a href="" class="btn btn-light-success fw-semibold shadow-sm">
                                <i class="bi bi-journal-medical me-1"></i> Lihat Resep Masuk
                            </a>
                            <a href="{{ route('transactions.table') }}"
                                class="btn btn-outline-light fw-semibold shadow-sm border-2">
                                <i class="bi bi-capsule me-1"></i> Kelola Stok Obat
                            </a>
                            <button type="button" class="btn btn-warning fw-semibold shadow-sm" data-bs-toggle="modal"
                                data-bs-target="#laporanFarmasi">
                                <i class="bi bi-bar-chart-fill me-1"></i> Laporan Bulanan
                            </button>
                        </div>
                    </div>

                    <!-- Ilustrasi kanan -->
                    <img src="../assets/media/illustrations/sigma-1/17-dark.png" class="h-200px mt-5 mt-md-0"
                        alt="Ilustrasi Farmasi">
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
                                data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                <i class="ki-duotone ki-row-horizontal fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->

                    <!--begin::Actions-->
                    <div class="d-flex my-0">
                        <!--begin::Select-->

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
                <!--begin::Tab pane Table-->
                <div id="kt_project_users_table_pane" class="tab-pane fade show active">
                    <div class="card card-flush border-0 shadow-sm">
                        <div class="card-header text-white d-flex justify-content-between align-items-center rounded-top">
                            <h3 class="card-title fw-bold mb-0">
                                <i class="bi bi-prescription me-2"></i> Daftar Kiriman Resep Obat
                            </h3>
                            <span class="badge bg-light text-dark px-3 py-2 rounded-pill">
                                Total: {{ $medicineOrders->count() }}
                            </span>
                        </div>

                        <div class="card-body bg-light">
                            <div class="row g-4">
                                @foreach ($medicineOrders as $order)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card h-100 border-0 shadow-sm rounded-3 hover-elevate-up transition">
                                            <div class="card-body p-4 d-flex flex-column">

                                                {{-- Status & Tanggal --}}
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span
                                                        class="badge
                                        @if ($order->status == 'pending') bg-warning
                                        @elseif($order->status == 'processing') bg-info
                                        @elseif($order->status == 'completed') bg-success
                                        @elseif($order->status == 'cancelled') bg-danger
                                        @else bg-secondary @endif">
                                                        {{ ucfirst($order->status ?? '-') }}
                                                    </span>
                                                    <small class="text-muted">
                                                        <i class="bi bi-calendar-event me-1"></i>
                                                        {{ $order->created_at->format('d-m-Y') }}
                                                    </small>
                                                </div>

                                                {{-- Nama Pasien --}}
                                                <h5 class="fw-bold text-dark mb-3">
                                                    <i class="bi bi-person-fill me-2 text-primary"></i>
                                                    {{ $order->pasien->name ?? ($order->pasien->person->name ?? '-') }}
                                                </h5>

                                                {{-- Tabel Rincian Obat --}}
                                                <div class="mb-3">
                                                    <div class="fw-semibold text-muted small mb-2">Rincian Obat:</div>
                                                    <div class="table-responsive">
                                                        <table class="table table-sm table-borderless mb-0">
                                                            <thead>
                                                                <tr>
                                                                    <th class="fw-semibold">Nama Obat</th>
                                                                    <th class="fw-semibold">Dosis</th>
                                                                    <th class="fw-semibold">Jumlah</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse($order->items as $item)
                                                                    <tr>
                                                                        <td>{{ $item->medicine->nama_obat ?? ($item->medicine->name ?? '-') }}
                                                                        </td>
                                                                        <td>{{ $item->dosis ?? '-' }}</td>
                                                                        <td>{{ $item->qty ?? '-' }}</td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                        <td colspan="3" class="text-muted">Tidak ada data
                                                                            obat</td>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                {{-- Dokter --}}
                                                <div class="mb-3">
                                                    <div class="fw-semibold text-muted small mb-1">Dokter:</div>
                                                    <div class="text-dark">
                                                        {{ $order->dokter->person->name ?? '-' }}
                                                    </div>
                                                </div>

                                                {{-- Tombol Aksi (selalu sejajar) --}}
                                                <div class="mt-auto d-flex gap-2">
                                                    {{-- Detail --}}
                                                    <button type="button" class="btn btn-sm btn-primary flex-fill"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailModal{{ $order->id }}">
                                                        <i class="bi bi-eye me-1"></i> Detail
                                                    </button>

                                                    {{-- Berdasarkan Status --}}
                                                    @if ($order->status === 'pending')
                                                        <button type="button" class="btn btn-sm btn-success flex-fill"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#prosesModal{{ $order->id }}">
                                                            <i class="bi bi-capsule me-1"></i> Proses
                                                        </button>
                                                    @elseif ($order->status === 'processing')
                                                        <form
                                                            action="{{ route('medicine-orders.update-status', $order->id) }}"
                                                            method="POST"
                                                            onsubmit="return confirm('Apakah resep ini sudah selesai dan obat telah diberikan ke pasien?')"
                                                            class="d-inline flex-fill">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="status" value="completed">
                                                            <button type="submit" class="btn btn-sm btn-success w-100">
                                                                <i class="bi bi-check2-square me-1"></i> Selesai
                                                            </button>
                                                        </form>
                                                    @elseif ($order->status === 'completed')
                                                        <span
                                                            class="badge bg-success flex-fill py-2 px-3 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-check-circle me-1"></i> Selesai
                                                        </span>
                                                    @elseif ($order->status === 'cancelled')
                                                        <span
                                                            class="badge bg-danger flex-fill py-2 px-3 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-x-circle me-1"></i> Dibatalkan
                                                        </span>
                                                    @endif

                                                    {{-- Cetak --}}
                                                    <a href="#" target="_blank"
                                                        class="btn btn-sm btn-warning text-white flex-fill">
                                                        <i class="bi bi-printer me-1"></i> Cetak
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                {{-- MODAL DETAIL --}}
                <div class="modal fade" id="detailModal{{ $order->id }}" tabindex="-1"
                    aria-labelledby="detailModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="detailModalLabel{{ $order->id }}">
                                    Detail Resep Obat
                                </h5>
                                <button type="button" class="btn-close btn-close-white"
                                    data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body">
                                {{-- Informasi utama --}}
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <strong>Pasien:</strong>
                                        <p class="mb-0">
                                            {{ $order->pasien->name ?? ($order->pasien->person->name ?? '-') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Dokter:</strong>
                                        <p class="mb-0">{{ $order->dokter->person->name ?? '-' }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <strong>Tanggal Order:</strong>
                                        <p class="mb-0">{{ $order->created_at->format('d-m-Y') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <strong>Status:</strong>
                                        <span
                                            class="badge 
                            @if ($order->status == 'pending') bg-warning 
                            @elseif($order->status == 'proses') bg-info 
                            @elseif($order->status == 'selesai') bg-success 
                            @else bg-secondary @endif">
                                            {{ ucfirst($order->status ?? '-') }}
                                        </span>
                                    </div>
                                </div>

                                <hr>

                                {{-- Daftar Obat tanpa tabel --}}
                                <h6 class="fw-bold mb-3 text-primary">Daftar Obat</h6>

                                @forelse($order->items as $item)
                                    <div class="border rounded p-3 mb-2 bg-light">
                                        <div class="d-flex justify-content-between">
                                            <span class="fw-bold">{{ $item->medicine->name ?? '-' }}</span>
                                            <small class="text-muted">
                                                {{ $item->qty ?? 0 }} {{ $item->medicine->satuan ?? '-' }}
                                            </small>
                                        </div>
                                        <div class="text-muted small">
                                            Dosis: {{ $item->dosis ?? '-' }} | Aturan Pakai:
                                            {{ $item->aturan_pakai ?? '-' }}
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-muted fst-italic">Tidak ada data obat.</p>
                                @endforelse
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Proses Resep -->
                <div class="modal fade" id="prosesModal{{ $order->id }}" tabindex="-1"
                    aria-labelledby="prosesModalLabel{{ $order->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">

                            <!-- Header -->
                            <div class="modal-header bg-gradient bg-primary text-white py-3">
                                <h5 class="modal-title fw-semibold" id="prosesModalLabel{{ $order->id }}">
                                    <i class="fa-solid fa-prescription-bottle-medical me-2"></i> Verifikasi Resep Obat
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <!-- Body -->
                            <div class="modal-body p-4">
                                <!-- Informasi Utama -->
                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded border">
                                            <small class="text-muted d-block">Pasien</small>
                                            <span class="fw-semibold fs-6">
                                                {{ $order->pasien->name ?? ($order->pasien->person->name ?? '-') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded border">
                                            <small class="text-muted d-block">Dokter</small>
                                            <span class="fw-semibold fs-6">
                                                {{ $order->dokter->person->name ?? '-' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded border">
                                            <small class="text-muted d-block">Tanggal Order</small>
                                            <span class="fw-semibold fs-6">
                                                {{ $order->created_at->format('d-m-Y H:i') }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded border">
                                            <small class="text-muted d-block">Status</small>
                                            <span
                                                class="badge rounded-pill
                                @if ($order->status == 'pending') bg-warning text-dark
                                @elseif($order->status == 'proses') bg-info
                                @elseif($order->status == 'selesai') bg-success
                                @else bg-secondary @endif">
                                                {{ ucfirst($order->status ?? '-') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <!-- Daftar Obat -->
                                <h6 class="fw-bold text-primary mb-3">
                                    <i class="fa-solid fa-capsules me-2"></i>Daftar Obat
                                </h6>

                                @if ($order->items->isNotEmpty())
                                    <div class="table-responsive rounded shadow-sm">
                                        <table class="table table-bordered align-middle mb-0">
                                            <thead class="table-primary">
                                                <tr class="text-center">
                                                    <th style="width: 5%">No</th>
                                                    <th>Nama Obat</th>
                                                    <th style="width: 20%">Dosis</th>
                                                    <th style="width: 20%">Aturan Pakai</th>
                                                    <th style="width: 15%">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($order->items as $index => $item)
                                                    <tr>
                                                        <td class="text-center">{{ $index + 1 }}</td>
                                                        <td>{{ $item->medicine->name ?? '-' }}</td>
                                                        <td>{{ $item->dosis ?? '-' }}</td>
                                                        <td>{{ $item->aturan_pakai ?? '-' }}</td>
                                                        <td class="text-center">
                                                            {{ $item->qty ?? 0 }}
                                                            {{ $item->medicine->satuan ?? '-' }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <div class="alert alert-secondary small fst-italic mt-2">
                                        Tidak ada data obat untuk resep ini.
                                    </div>
                                @endif
                            </div>

                            <!-- Footer -->
                            <div class="modal-footer bg-light py-3">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    <i class="fa-solid fa-xmark me-1"></i> Tutup
                                </button>

                                @if ($order->status === 'pending')
                                    <form action="{{ route('medicine-orders.update-status', $order->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin memproses resep ini?')">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="processing">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-solid fa-circle-check me-1"></i> Konfirmasi & Proses
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Tab pane Table-->
            </div>

            <!-- Modal Tambah -->

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
    @endsection
