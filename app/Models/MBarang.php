<?php

namespace App\Models;

use CodeIgniter\Model;

class MBarang extends Model
{
    protected $table = 'barang';
    protected $allowedFields = ['kode', 'nama_barang', 'harga', 'aksi'];

    public function deleteBarang($id)
    {
        return $this->where('kode', $id)->delete();
    }

    public function getBarangByKode($id)
    {
        return $this->where('kode', $id)->first();
    }

    public function insertBarang($data)
    {
        return $this->insert($data);
    }
}
