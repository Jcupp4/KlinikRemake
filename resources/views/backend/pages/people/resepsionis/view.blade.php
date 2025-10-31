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
                <div class="card shadow-sm p-5">
                    <div class="d-flex flex-column align-items-center text-center">
                        <!-- Avatar -->
                        <div class="symbol symbol-150px position-relative mb-4">
                            <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="image"
                                class="border border-white border-4 rounded-3 shadow-sm" />
                            <div
                                class="position-absolute bottom-0 end-0 bg-success rounded-circle h-15px w-15px border border-white">
                            </div>
                        </div>

                        <!-- Nama & Info -->
                        <h2 class="fw-bold text-gray-800 mb-1">{{ $res->person->name ?? 'Nama tidak tersedia' }}</h2>
                        <span class="text-muted mb-1">Jenis Kelamin: {{ $res->person->sex ?? '-' }}</span>
                        <span class="text-muted mb-1">TTL: {{ $res->person->pob ?? '-' }},
                            {{ $res->person->dob ?? '-' }}</span>
                        <span class="text-muted mb-1">Shift: {{ $res->shift ?? '-' }}</span>
                        <span class="text-muted mb-1">Email: {{ $res->user->email ?? '-' }}</span>

                        <!-- Detail -->
                        <div class="w-100 mt-4">
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">No Telepon</span>
                                <span class="fw-bold">{{ $res->no_telepon ?? '-' }}</span>
                            </div>
                            <div class="mb-3">
                                <span class="fw-semibold text-muted d-block">Alamat</span>
                                <span class="fw-bold">{{ $res->alamat ?? '-' }}</span>
                            </div>
                            <div>
                                <span class="fw-semibold text-muted d-block">Status</span>
                                @if ($res->status === 'aktif')
                                    <span class="badge bg-success px-3 py-2">Aktif</span>
                                @else
                                    <span
                                        class="badge bg-danger px-3 py-2">{{ ucfirst($res->status ?? 'Tidak aktif') }}</span>
                                @endif
                            </div>
                        </div>

                        <!-- Action Button -->
                        <div class="mt-4">
                            <button type="button" class="btn btn-light-warning btn-sm" data-bs-toggle="modal"
                                data-bs-target="#modalUpdateResepsionis">
                                Update Profile
                            </button>
                            <a href="#" class="btn btn-light btn-sm">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal Update Resepsionis -->
    <div class="modal fade" id="modalUpdateResepsionis" tabindex="-1" aria-labelledby="modalUpdateLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-3 shadow-lg">

                <!-- Header -->
                <div class="modal-header border-0 pt-4 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('resepsionis.update', $res->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body pt-0">

                        <!-- Nama Lengkap -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ old('name', $res->person->name ?? '') }}" required>
                        </div>

                        <!-- Alamat -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2">{{ old('alamat', $res->alamat ?? '') }}</textarea>
                        </div>

                        <!-- No Telepon -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">No Telepon</label>
                            <input type="text" name="no_telepon" class="form-control"
                                value="{{ old('no_telepon', $res->no_telepon ?? '') }}">
                        </div>

                        <!-- Shift Kerja -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Shift Kerja</label>
                            <select name="shift" class="form-select">
                                <option value="pagi" {{ ($res->shift ?? '') === 'pagi' ? 'selected' : '' }}>Pagi
                                </option>
                                <option value="siang" {{ ($res->shift ?? '') === 'siang' ? 'selected' : '' }}>Siang
                                </option>
                                <option value="malam" {{ ($res->shift ?? '') === 'malam' ? 'selected' : '' }}>Malam
                                </option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="aktif" {{ $res->status === 'aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="nonaktif" {{ $res->status === 'nonaktif' ? 'selected' : '' }}>Nonaktif
                                </option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
