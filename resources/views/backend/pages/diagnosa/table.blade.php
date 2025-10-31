@extends('backend.master')

@section('title')
<title>Sesi Berobat</title>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tabel Diagnosa</h5>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No Antrian</th>
                            <th>Nama Pasien</th>
                            <th>Nama Dokter</th>
                            <th>Kode Penyakit</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Deskripsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($diagnosa as $nosa)
                        <tr>
                            <td>{{ $nosa->sesi_berobat_id }}</td>
                            <td>{{ optional(optional($nosa->sesiBerobat)->pasien)->person->name ?? '-' }}</td>
                            <td>{{ optional($nosa->dokter->person)->name ?? '-' }}</td>
                            <td>{{ $nosa->kode_icd ?? '-' }}</td>
                            <td>
                                @if(optional($nosa->sesiBerobat)->tanggal_kunjungan)
                                {{ \Carbon\Carbon::parse($nosa->sesiBerobat->tanggal_kunjungan)->format('d M Y') }}
                                @else
                                -
                                @endif
                            </td>
                            <td>{{ $nosa->deskripsi ?? '-' }}</td>
                            <td>
                                @php
                                $status = optional($nosa->sesiBerobat)->status;
                                @endphp
                                <span class="badge bg-{{ $status == 'antri' ? 'warning' : 'success' }}">
                                    {{ ucfirst($status ?? '-') }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada diagnosa.</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
