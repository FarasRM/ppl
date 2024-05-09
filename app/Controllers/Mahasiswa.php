<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Barang; // Perubahan di sini

class MBarang extends BaseController // Perubahan di sini
{
    public function display()
    {
        $model = new MBarang(); // Perubahan di sini
        $data['barang'] = $model->orderBy('id', 'DESC')->findAll();
        return view('v_barang', $data);
    }
}
