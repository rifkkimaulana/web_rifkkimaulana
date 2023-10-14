<?php

namespace App\Controllers\Rifkkimaulana\Admin\Artikel;

use App\Models\Rifkkimaulana\KategoriModel;

use App\Controllers\Rifkkimaulana\Admin\BaseController;

class Kategori extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();

        $data = [
            'title' => 'Kategori Artikel',
            'user' => $this->user,
            'kategoriData' => $kategoriModel->findAll()
        ];
        return view('Rifkkimaulana/Admin/Pages/Artikel/Kategori', $data);
    }

    public function delete($id)
    {
        $kategoriModel = new KategoriModel();

        $kategori = $kategoriModel->find($id);

        if (!$kategori) {
            return redirect()->to(base_url('artikel/kategori'))->with('error', 'Kategori tidak ditemukan.');
        }

        try {
            $kategoriModel->deleteId($id);
            return redirect()->to(base_url('artikel/kategori'))->with('success', 'Kategori berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->to(base_url('artikel/kategori'))->with('error', 'Kategori ini terkait dengan artikel.');
        }
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {

            $kategoriModel = new KategoriModel();

            $data = [
                'nama' => $this->request->getPost('nama')
            ];

            $kategoriModel->insertData($data);

            return redirect()->to(base_url('artikel/kategori'))->with('success', 'Kategori Artikel berhasil ditambahkan.');
        }
    }

    public function ubah()
    {
        if ($this->request->getMethod() === 'post') {

            $id = $this->request->getPost('id');

            $kategoriModel = new KategoriModel();

            $data = [
                'nama' => $this->request->getPost('nama')
            ];

            $kategoriModel->updateId($id, $data);

            return redirect()->to(base_url('artikel/kategori'))->with('success', 'Kategori Artikel berhasil diubah.');
        }
    }

    //--------------------------------------------------------------------

}
