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
                        <h5 class="card-title">Update Account</h5>
                        <form action="{{ route('pasien.store') }}" method="post">
                            @csrf

                            <!-- Nama Lengkap -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" id="fullName" name="nama_lengkap" class="form-control" required>
                                </div>
                            </div>

                            <!-- Tempat Lahir -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" name="pob" id="pob" class="form-control" required>
                                </div>
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" name="dob" id="dob" class="form-control" required>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <fieldset class="row mb-3">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10 d-flex align-items-center">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="sex" id="sexMale" value="laki-laki" required>
                                            <label class="form-check-label" for="sexMale">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sex" id="sexFemale" value="perempuan">
                                            <label class="form-check-label" for="sexFemale">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                            <!-- Alamat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" id="alamat" class="form-control" rows="2"></textarea>
                                </div>
                            </div>

                            <!-- Kontak Darurat -->
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Kontak Darurat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kontak_darurat" class="form-control">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
