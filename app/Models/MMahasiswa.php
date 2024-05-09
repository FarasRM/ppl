<?php

namespace App\Models;

use CodeIgniter\Model;

class MMahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields = ['ID', 'NAMA' , 'NIM', 'UMUR'];
}
