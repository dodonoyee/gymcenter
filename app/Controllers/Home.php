<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "judul_halaman" => "home",
            "halaman_aktif" => "index"
        ];
        echo view('template/header', $data);
        echo view('template/body');
        echo view('template/footer');
    }

    public function about()
    {
        $data = [
            "judul_halaman" => "about",
            "halaman_aktif" => "about"
        ];
        echo view('template/header', $data);
        echo view('template/about');
        echo view('template/footer');
    }
}
