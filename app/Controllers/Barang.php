<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MBarang;

class Barang extends BaseController
{
    public function display()
    {
        $model = new MBarang();
        $data['barang'] = $model->orderBy('kode', 'DESC')->findAll();
        return view('v_barang', $data);
    }

    public function delete($id)
    {
        // Panggil model untuk menghapus data berdasarkan ID
        $model = new MBarang();
        $model->deleteBarang($id);

        // Redirect kembali ke halaman yang sesuai, misalnya halaman daftar barang
        return redirect()->to('/');
    }

    public function view($kode)
    {
        $model = new MBarang();
        $data['barang'] = $model->where('kode', $kode)->first();

        if (!$data['barang']) {
            // Barang tidak ditemukan, mungkin berikan pesan error atau redirect ke halaman lain
            return redirect()->to('/');
        }

        return view('v_barang_detail', $data);
    }

    public function create()
    {
        return view('v_barang_create');
    }

    public function save()
    {
        // Ambil data yang diposting dari formulir
        $data = [
            'kode' => $this->request->getPost('kode'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'harga' => $this->request->getPost('harga')
        ];

        // Validasi data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required|numeric'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembalikan ke halaman tambah barang dengan pesan validasi
            return redirect()->to('/barang/create')->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data ke dalam database
        $model = new MBarang();
        $model->insertBarang($data);

        // Set pesan berhasil
        session()->setFlashdata('msg', 'Data barang berhasil disimpan.');

        // Redirect kembali ke halaman daftar barang
        return redirect()->to('/');
    }
}
