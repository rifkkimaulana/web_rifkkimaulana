<?php

namespace App\Controllers\Rifkkimaulana\Admin\Artikel;

use App\Models\Rifkkimaulana\TagModel;

use App\Controllers\Rifkkimaulana\Admin\BaseController;

class Tag extends BaseController
{
    public function index()
    {
        $tagModel = new TagModel();

        $data = [
            'title' => 'Tag Artikel',
            'user' => $this->user,
            'tagData' => $tagModel->findAll()
        ];
        return view('Rifkkimaulana/Admin/Pages/Artikel/Tag', $data);
    }

    public function delete($id)
    {
        $tagModel = new TagModel();

        $tag = $tagModel->find($id);

        if (!$tag) {
            return redirect()->to(base_url('artikel/tag'))->with('error', 'Tag tidak ditemukan.');
        }

        try {
            $tagModel->deleteId($id);
            return redirect()->to(base_url('artikel/tag'))->with('success', 'Tag berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->to(base_url('artikel/tag'))->with('error', 'Tag ini terkait dengan artikel.');
        }
    }

    public function tambah()
    {
        if ($this->request->getMethod() === 'post') {

            $tagModel = new TagModel();

            $data = [
                'nama' => $this->request->getPost('nama')
            ];

            $tagModel->insertData($data);

            return redirect()->to(base_url('artikel/tag'))->with('success', 'Tag Artikel berhasil ditambahkan.');
        }
    }

    public function ubah()
    {
        if ($this->request->getMethod() === 'post') {

            $id = $this->request->getPost('id');

            $tagModel = new TagModel();

            $data = [
                'nama' => $this->request->getPost('nama')
            ];

            $tagModel->updateId($id, $data);

            return redirect()->to(base_url('artikel/tag'))->with('success', 'Tag Artikel berhasil diubah.');
        }
    }

    //--------------------------------------------------------------------

}
