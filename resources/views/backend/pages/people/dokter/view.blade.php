@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endsection

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            Account Overview
                        </h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted"><a href="/"
                                    class="text-muted text-hover-primary">Home</a></li>
                            <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                            <li class="breadcrumb-item text-muted">Account</li>
                            <li class="breadcrumb-item"><span class="bullet bg-gray-500 w-5px h-2px"></span></li>
                            <li class="breadcrumb-item text-gray-900">Overview</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div class="card shadow-sm p-5 rounded-4">
                    <div class="d-flex flex-column align-items-center text-center">

                        <!-- Avatar -->
                        <div class="symbol symbol-150px position-relative mb-4">
                            <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="Avatar"
                                class="border border-white border-4 rounded-circle shadow-sm" />
                            <div
                                class="position-absolute bottom-0 end-0 bg-success rounded-circle h-15px w-15px border border-white">
                            </div>
                        </div>

                        <!-- Nama & Info -->
                        <h2 class="fw-bold text-dark mb-1 fs-3">{{ $dokter->person->name ?? 'Nama tidak tersedia' }}</h2>
                        <span class="text-muted mb-1 d-block">Jenis Kelamin: {{ $dokter->person->sex ?? '-' }}</span>
                        <span class="text-muted mb-1 d-block">
                            TTL: {{ $dokter->person->pob ?? '-' }}, {{ $dokter->person->dob ?? '-' }}
                        </span>
                        <span class="text-muted mb-1 d-block">Spesialis: {{ $dokter->spesialis ?? '-' }}</span>
                        <span class="text-muted mb-3 d-block">Email: {{ $dokter->user->email ?? '-' }}</span>

                        <!-- Detail -->
                        <div class="w-100 mt-4">
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">No SIP</span>
                                <span class="badge bg-primary px-3 py-2 fs-6">{{ $dokter->sip ?? '-' }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">No Telepon</span>
                                <span class="fw-bold text-dark">{{ $dokter->no_telepon ?? '-' }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">Jadwal Praktek</span>
                                @php
                                    $jadwal = json_decode($dokter->jadwal_praktek ?? '{}', true);
                                @endphp
                                @if (!empty($jadwal))
                                    <ul class="list-unstyled mb-0 small">
                                        @foreach ($jadwal as $hari => $jam)
                                            <li class="fw-medium text-dark">
                                                {{ ucfirst($hari) }} : {{ $jam['mulai'] ?? '-' }} -
                                                {{ $jam['selesai'] ?? '-' }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="text-muted small">Tidak ada jadwal</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">Status</span>
                                @if ($dokter->status === 'aktif')
                                    <span class="badge bg-success px-3 py-2">Aktif</span>
                                @else
                                    <span
                                        class="badge bg-danger px-3 py-2">{{ ucfirst($dokter->status ?? 'Tidak aktif') }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="mt-4 d-flex gap-2">
                            <button type="button" class="btn btn-warning btn-sm fw-semibold shadow-sm"
                                data-bs-toggle="modal" data-bs-target="#modalUpdateDokter">
                                Update Profile
                            </button>
                            <a href="#" class="btn btn-outline-secondary btn-sm fw-semibold shadow-sm">
                                Send Message
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Update Dokter -->
    <div class="modal fade" id="modalUpdateDokter" tabindex="-1" aria-labelledby="modalUpdateLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-3 shadow-lg">

                {{-- Tambahin header biar ada jarak dan rapi --}}
                <div class="modal-header border-0 pt-4 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body pt-0">
                        <!-- Nama Lengkap -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $dokter->person->name ?? '') }}" required>
                        </div>

                        <!-- SIP -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">No SIP</label>
                            <input type="text" name="sip" class="form-control"
                                value="{{ old('sip', $dokter->sip ?? '') }}">
                        </div>

                        <!-- No Telepon -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control"
                                value="{{ old('no_telepon', $dokter->no_telepon ?? '') }}">
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="aktif" {{ $dokter->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ $dokter->status === 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                </option>
                            </select>

                        </div>

                        <!-- Jadwal -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold d-block mb-2">Jadwal Praktek</label>
                            @php
                                $jadwal = json_decode($dokter->jadwal_praktek ?? '{}', true);
                                $hariList = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
                            @endphp

                            @foreach ($hariList as $hari)
                                <div class="row align-items-center g-2 mb-3">
                                    <div class="col-3 text-capitalize fw-semibold">{{ $hari }}</div>
                                    <div class="col">
                                        <input type="time" class="form-control"
                                            name="jadwal[{{ $hari }}][mulai]"
                                            value="{{ $jadwal[$hari]['mulai'] ?? '' }}"
                                            id="jadwal-{{ $hari }}-mulai">
                                    </div>
                                    <div class="col-auto fw-bold text-center">-</div>
                                    <div class="col">
                                        <input type="time" class="form-control"
                                            name="jadwal[{{ $hari }}][selesai]"
                                            value="{{ $jadwal[$hari]['selesai'] ?? '' }}"
                                            id="jadwal-{{ $hari }}-selesai">
                                    </div>
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-sm btn-outline-danger"
                                            onclick="clearHari('{{ $hari }}')">Clear</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
