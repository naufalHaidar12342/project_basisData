<?php

namespace App\Models;

use CodeIgniter\Model;

class MstBarangModel extends Model
{
    //menentukan tabel yang akan digunakan
    protected $table = "mst_barang";

    //menentukan primary key dari table
    protected $primaryKey = "id";

    //menentukan data dikembalikan dalam bentuk apa
    protected $returnType = "array";

    //menentukan field yang bisa dimanipulasi
    protected $allowedFields = ['kode_barang', 'nama', 'harga',];

    //menyanmbungkan ke database
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        parent::__construct($this->db);
    }
}
