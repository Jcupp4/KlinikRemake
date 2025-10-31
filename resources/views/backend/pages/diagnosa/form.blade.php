@extends('backend.master')

@section('title')
    <title>Dashboard | Aplikasi</title>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">

        <div id="kt_app_content_container" class="app-container container-xxl">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Input Diagnosa</h5>
                            <form method="POST" action="{{ route('diagnosa.store', $visit->id) }}">
                                @csrf

                                <!-- ICD -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Pilih Kode Penyakit</label>
                                    <div class="col-sm-10">
                                        <select name="icd_id" class="form-select" required>
                                            <option value="">-- Pilih Kode --</option>
                                            @foreach ($icdCodes as $code)
                                                <option value="{{ $code->id }}">
                                                    {{ $code->code }} - {{ $code->description }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Catatan -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Catatan</label>
                                    <div class="col-sm-10">
                                        <textarea name="catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <!-- Rujukan -->
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Rujukan</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status_rujukan"
                                                id="rujukTidak" value="tidak" checked>
                                            <label class="form-check-label" for="rujukTidak">Tidak</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status_rujukan"
                                                id="rujukYa" value="dirujuk">
                                            <label class="form-check-label" for="rujukYa">Rujuk</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Field Rujukan -->
                                <div id="rujukanFields" style="display: none;">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Alasan Rujukan</label>
                                        <div class="col-sm-10">
                                            <textarea name="alasan_rujukan" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Tujuan Rujukan</label>
                                        <div class="col-sm-10">
                                            <select name="rujukan_id" class="form-select">
                                                <option value="">-- Pilih Rumah Sakit --</option>
                                                @foreach ($rumahsakit as $rs)
                                                    <option value="{{ $rs->id }}">{{ $rs->nama_rs }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Alamat Tujuan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat_tujuan" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Telepon Tujuan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telepon_tujuan" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan Diagnosa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
