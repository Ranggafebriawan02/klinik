<?= $this->include('layout/header'); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - Klinik Muhammadiyah</title>
    <style>
        .bukti-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 2px solid #198754;
            border-radius: 10px;
            background-color: #fdfdfd;
        }

        .kop {
            text-align: center;
            border-bottom: 2px solid #198754;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .kop img {
            width: 70px;
            margin-bottom: 10px;
        }

        .kop h3 {
            margin: 0;
            font-weight: bold;
            color: #198754;
        }

        .kop p {
            margin: 0;
            font-size: 14px;
        }

        .data-pendaftaran {
            text-align: left;
            font-size: 16px;
            line-height: 1.8;
        }

        .antrian {
            text-align: center;
            margin: 20px 0;
            font-size: 22px;
            font-weight: bold;
            color: #dc3545;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>

<body>

    <div class="bukti-container">
        <div class="text-center btn-cetak" style="float: right;">
            <button onclick="window.print()" class="btn btn-success">
                🖨 Cetak Bukti
            </button>
        </div>
        <!-- KOP KLINIK -->
        <div class="kop">
            <!-- <img src="<?= base_url('layout/logo_klinik.png'); ?>" alt="Logo Klinik"> -->
            <h3>Klinik Muhammadiyah</h3>
            <p>Jl. Contoh No.123, Kota Anda</p>
            <p>Telp: (021) 1234567 | Email: info@klinikmuhammadiyah.id</p>
        </div>

        <!-- DATA PENDAFTARAN -->
        <h4 class="text-center text-success">Bukti Pendaftaran Pasien</h4>
        <div class="antrian">
            Nomor Antrian: <?= $nomor_antrian; ?>
        </div>
        <div class="data-pendaftaran">
            <p><b>Nama Pasien:</b> <?= $nama_pasien; ?></p>
            <p><b>Dokter:</b> <?= $nama_dokter; ?></p>
            <p><b>Poli:</b> <?= $nama_poli; ?></p>
            <p><b>Tanggal:</b> <?= $tanggal; ?></p>
            <p><b>Waktu:</b> <?= $waktu; ?></p>
        </div>

        <div class="footer">
            <p>Harap datang sesuai jadwal & membawa kartu identitas.</p>
            <p>Terima kasih telah mempercayai layanan kami.</p>
        </div>

    </div>

</body>

</html>
<?= $this->include('layout/footer'); ?>