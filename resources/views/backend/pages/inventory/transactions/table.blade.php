@extends('backend.master')

@section('title')
    <title>Transaksi Inventory</title>
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2" id="kt_toolbar">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 my-0">
                            Transaksi Obat
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                            <li class="breadcrumb-item text-muted">Inventory</li>
                            <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                            <li class="breadcrumb-item text-gray-900">Transaksi</li>
                        </ul>
                    </div>

                    <!--begin::Actions-->
                </div>
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div class="container-fluid py-5">
                <div class="card shadow-lg border-0">
                    <!-- Header -->
                    <div
                        class="card-header border-0 d-flex justify-content-between align-items-center px-4 py-3 text-white rounded-top-4">
                        <h3 class="fw-bold mb-0">
                            💊 Transaksi Obat
                        </h3>
                        <a href="#" class="btn btn-primary btn-sm fw-semibold shadow-sm px-3 py-2 rounded-pill"
                            data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                            <i class="bi bi-plus-circle me-2"></i>Tambah Transaksi
                        </a>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4 table-responsive">
                        <table class="table table-hover align-middle text-white mb-0">
                            <thead class="text-uppercase small fw-bold border-bottom border-secondary ">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Obat / Resep</th>
                                    <th class="text-center">Tipe</th>
                                    <th class="text-center">Sumber</th>
                                    <th>Pasien</th>
                                    <th class="text-end">Total Harga</th>
                                    <th class="text-center">Jumlah Item</th>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($groupedTransactions as $key=> $group)
                                    @php
                                        $first = $group->first();
                                        $isResep = $first->sumber === 'ResepDokter';
                                        $totalHarga = $group->sum(
                                            fn($trx) => ($trx->medicine->harga ?? 0) * ($trx->jumlah ?? 0),
                                        );
                                    @endphp

                                    <tr class="fw-semibold border-bottom border-secondary">
                                        <td class="text-center text-muted">{{ $loop->iteration }}</td>
                                        <td>
                                            @if ($isResep)
                                                <span class="fw-semibold">
                                                    <i class="bi bi-prescription me-1"></i> Resep Dokter
                                                </span>
                                            @else
                                                <span class="fw-semibold">{{ $first->medicine->name ?? '-' }}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <span
                                                class="badge {{ $isResep ? 'bg-danger' : 'bg-success' }} px-3 py-2 rounded-pill">
                                                {{ $isResep ? 'Keluar' : 'Masuk' }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="">
                                                {{ $first->sumber ?? '-' }}
                                            </span>
                                        </td>
                                        <td>{{ $isResep ? $first->order->visit->pasien->person->name ?? '-' : '-' }}</td>
                                        <td class="fw-bold text-success text-end">
                                            Rp {{ number_format($totalHarga, 0, ',', '.') }}
                                        </td>
                                        <td class="text-center">{{ $group->count() }} item</td>
                                        <td class="text-center">{{ $first->created_at->format('d M Y H:i') }}</td>
                                        <td class="text-center">
                                            @if ($isResep)
                                                <button
                                                    class="btn btn-sm btn-outline-info px-3 py-1 rounded-pill fw-semibold"
                                                    data-bs-toggle="collapse" data-bs-target="#detail-{{ $key }}">
                                                    <i class="bi bi-eye me-1"></i> Lihat
                                                </button>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                    </tr>

                                    {{-- Detail Resep --}}
                                    @if ($isResep)
                                        <tr class="collapse bg-gray" id="detail-{{ $key }}">
                                            <td colspan="9" class="p-3">
                                                <div class="card shadow-sm rounded-3">
                                                    <div class="card-body p-3">
                                                        <table class="table table-sm align-middle text-white mb-0">
                                                            <thead class="border-bottom border-secondary small">
                                                                <tr>
                                                                    <th>Nama Obat</th>
                                                                    <th class="text-center">Jumlah</th>
                                                                    <th class="text-end">Harga Satuan</th>
                                                                    <th class="text-end">Subtotal</th>
                                                                    <th>Deskripsi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($group as $trx)
                                                                    <tr class="hover-highlight">
                                                                        <td>{{ $trx->medicine->name ?? '-' }}</td>
                                                                        <td class="text-center">{{ $trx->jumlah }}</td>
                                                                        <td class="text-end ">
                                                                            Rp
                                                                            {{ number_format($trx->medicine->harga ?? 0, 0, ',', '.') }}
                                                                        </td>
                                                                        <td class="text-end">
                                                                            Rp
                                                                            {{ number_format(($trx->medicine->harga ?? 0) * ($trx->jumlah ?? 0), 0, ',', '.') }}
                                                                        </td>
                                                                        <td>
                                                                            {{ $trx->medicine->deskripsi ?? '-' }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center py-5 text-muted">
                                            <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                                            Belum ada transaksi
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



            <!--end::Content-->

            <!-- Modal Tambah Transaksi -->
            <div class="modal fade" id="addTransactionModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" style="margin-top: 100px;">
                    <div class="modal-content rounded-3 shadow-lg">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Transaksi Obat</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('transactions.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="medicine_id" class="form-label">Pilih Obat</label>
                                    <select name="medicine_id" id="medicine_id" class="form-select" required>
                                        <option value="">-- Pilih Obat --</option>
                                        @foreach ($medicines as $medicine)
                                            <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tipe" class="form-label">Tipe Transaksi</label>
                                    <select name="tipe" id="tipe" class="form-select" required>
                                        <option value="">-- Pilih Tipe --</option>
                                        <option value="IN">Masuk (Tambah Stok)</option>
                                        <option value="OUT">Keluar (Kurangi Stok)</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" name="jumlah" id="jumlah"
                                        min="1" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <input type="datetime-local" class="form-control" name="tanggal" required>
                                </div>

                                <div class="mb-3">
                                    <label for="sumber" class="form-label">Sumber</label>
                                    <input type="text" class="form-control" name="sumber"
                                        placeholder="Contoh: Supplier, Gudang, dll">
                                </div>

                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
