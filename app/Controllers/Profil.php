<?php

namespace App\Controllers;

use App\Models\LayananModel;
use App\Models\DokterModel;

class Profil extends BaseController
{
    public function index()
    {
        return view('layout/header')
             . view('home')
             . view('layout/footer');
    }

    public function layanan()
    {
        $layananModel = new LayananModel();
        $data['layanan'] = $layananModel->findAll();

        return view('layout/header')
             . view('layanan', $data)
             . view('layout/footer');
    }

    public function dokter()
    {
        $dokterModel = new DokterModel();
        $data['dokter'] = $dokterModel->findAll();

        return view('layout/header')
             . view('dokter', $data)
             . view('layout/footer');
    }

    public function kontak()
    {
        return view('layout/header')
             . view('kontak')
             . view('layout/footer');
    }
}
