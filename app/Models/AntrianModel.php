<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    // Daftar kolom yang boleh diisi (disesuaikan dengan tabel kamu)
    protected $allowedFields = [
        'nomor_antrian',
        'nama_pasien',
        'nama_dokter',
        'nama_poli',
        'tanggal',
        'waktu'
    ];
}
