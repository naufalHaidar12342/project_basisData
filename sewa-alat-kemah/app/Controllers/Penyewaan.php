<?php


namespace App\Controllers;

class Penyewaan extends BaseController
{
    public function index()
    {
        $pageTitles = [
            'title' => 'Home'
        ];
        return view('pages/index', $pageTitles);
    }

    public function daftar_barang()
    {
        $pageTitles = [
            'title' => 'Stok Alat Kemah'
        ];

        return view('pages/stockBarang', $pageTitles);
    }

    public function sewa_barang()
    {
        $pageTitles = [
            'title' => 'Sewa Barang'
        ];

        return view('pages/sewaBarang', $pageTitles);
    }
}
