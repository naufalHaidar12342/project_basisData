<?php

namespace App\Models;

use CodeIgniter\Model;

class TrPenyewaanModel extends Model
{
    //menentukan tabel yang akan digunakan
    protected $table = "tr_penyewaan";

    //menentukan primary key dari table
    protected $primaryKey = "id";

    //menentukan data dikembalikan dalam bentuk apa
    protected $returnType = "array";

    //menentukan field yang bisa dimanipulasi
    protected $allowedFields = ['tanggal_pinjam', 'tanggal_harus_kembali', 'harga', 'quantity'];

    //menyanmbungkan ke database
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        parent::__construct($this->db);
    }
}
