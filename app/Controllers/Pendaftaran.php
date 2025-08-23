<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use App\Models\PasienModel;
use App\Models\DokterModel;
use App\Models\PoliModel;
use CodeIgniter\Controller;

class Pendaftaran extends Controller
{
    protected $antrianModel;
    protected $pasienModel;
    protected $dokterModel;
    protected $poliModel;

    public function __construct()
    {
        $this->antrianModel = new AntrianModel();
        $this->pasienModel  = new PasienModel();
        $this->dokterModel  = new DokterModel();
        $this->poliModel    = new PoliModel();
    }

    // Tampilkan form pendaftaran
    public function index()
    {
        $data = [
            'dokter' => $this->dokterModel->findAll(),
            'poli'   => $this->poliModel->findAll()
        ];
        return view('pendaftaran', $data);
    }

    // Simpan pendaftaran pasien
    public function simpan()
    {
        // Simpan data pasien (langsung ambil ID terakhir yang disimpan)
        $id_pasien = $this->pasienModel->insert([
            'nama_pasien' => $this->request->getPost('nama_pasien'),
            'alamat'      => $this->request->getPost('alamat'),
            'no_hp'       => $this->request->getPost('no_hp'),
        ], true);

        // Buat nomor antrian (auto increment per hari)
        $tanggal = date('Y-m-d');
        $jumlah = $this->antrianModel->where('tanggal', $tanggal)->countAllResults();
        $nomor_antrian = $jumlah + 1;

        // Ambil id dokter & poli dari form
        $id_dokter = $this->request->getPost('id_dokter');
        $id_poli   = $this->request->getPost('id_poli');

        // Simpan data antrian
        $this->antrianModel->insert([
            'id_pasien'      => $id_pasien,
            'id_dokter'      => $id_dokter,
            'id_poli'        => $id_poli,
            'tanggal'        => $tanggal,
            'waktu'          => date('H:i:s'),
            'nomor_antrian'  => $nomor_antrian
        ]);

        // Ambil nama dokter & poli dari database
        $dokter = $this->dokterModel->find($id_dokter);
        $poli   = $this->poliModel->find($id_poli);

        // Kirim data ke view sukses
        $data = [
            'nomor_antrian' => $nomor_antrian,
            'nama_pasien'   => $this->request->getPost('nama_pasien'),
            'nama_dokter'   => $dokter['nama_dokter'] ?? '-',
            'nama_poli'     => $poli['nama_poli'] ?? '-',
            'tanggal'       => $tanggal,
            'waktu'         => date('H:i:s')
        ];

        return view('pendaftaran_sukses', $data);
    }

    // Halaman sukses
    public function sukses()
    {
        return view('pendaftaran_sukses');
    }
}
