<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Kartu Berobat</title>
    <style>
        @page {
            margin: 0;
            size: 8.56cm 5.398cm;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'DejaVu Sans', sans-serif;
            background: #f0f0f0;
        }

        .container {
            width: 8.56cm;
            height: 5.398cm;
            background: #ffffff;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            overflow: hidden;
            border: 0.3mm solid #d1d5db;
            display: flex;
            flex-direction: column;
        }

        /* Header Klinik */
        .header {
            background: linear-gradient(90deg, #198754, #146c43);
            color: white;
            text-align: center;
            padding: 4px 0;
            font-size: 9px;
            line-height: 1.4;
        }

        .header h1 {
            font-size: 10px;
            margin: 0;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .header p {
            margin: 0;
            font-size: 7.5px;
        }

        /* Judul kartu */
        .title {
            text-align: center;
            font-size: 9px;
            font-weight: 700;
            color: #198754;
            margin: 3px 0 4px;
            border-bottom: 0.3mm solid #198754;
            display: inline-block;
        }

        /* Informasi pasien */
        .info {
            flex: 1;
            padding: 0 10px;
            font-size: 8px;
            color: #111827;
        }

        .info-row {
            display: flex;
            margin-bottom: 2px;
        }

        .label {
            width: 2.2cm;
            font-weight: 600;
        }

        .value {
            flex: 1;
            border-bottom: 0.3mm dotted #9ca3af;
            padding-left: 3px;
        }

        /* Footer warning */
        .footer {
            border-top: 0.2mm solid #e5e7eb;
            font-size: 7px;
            text-align: center;
            padding: 3px 6px;
            color: #b91c1c;
            background: #fef2f2;
        }

        .footer strong {
            color: #7f1d1d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>KLINIK SEHAT SELALU</h1>
            <p>Jl. Kesehatan No.10, Bandung — Telp. (022) 1234567</p>
        </div>

        <div style="text-align: center;">
            <span class="title">KARTU BEROBAT</span>
        </div>

        <div class="info">
            <div class="info-row"><span class="label">No. RM</span><span class="value">{{ $pasien->no_rm ?? '-' }}</span>
            </div>
            <div class="info-row"><span class="label">Nama</span><span
                    class="value">{{ $pasien->person->name ?? '-' }}</span>
            </div>
            <div class="info-row"><span class="label">Alamat</span><span
                    class="value">{{ Str::limit($pasien->alamat ?? '-', 25) }}</span></div>
            <div class="info-row"><span class="label">Tgl Lahir</span><span
                    class="value">{{  $pasien->person->dob ?? '-' }}</span></div>
        </div>

        <div class="footer">
            <strong>PERHATIAN:</strong><br>
            Kartu ini tidak boleh hilang dan wajib dibawa setiap kali berobat.
        </div>
    </div>
</body>

</html>
