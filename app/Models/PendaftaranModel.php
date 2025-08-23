<?php
namespace App\Models;
use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pasien','id_dokter','id_poli','tanggal','waktu','nomor_antrian'];

    public function getDetailById($id)
    {
        return $this->db->table('pendaftaran p')
            ->select('p.id, p.nama_pasien, p.tanggal, p.waktu, p.nomor_antrian, d.nama_dokter, l.nama_poli')
            ->join('dokter d', 'd.id = p.id_dokter')
            ->join('layanan l', 'l.id = p.id_poli')
            ->where('p.id', $id)
            ->get()
            ->getRowArray();
    }
}
