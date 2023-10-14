<?php

namespace App\Controllers\Rifkkimaulana\Admin\Artikel;

use App\Models\Rifkkimaulana\ArtikelModel;
use App\Models\Rifkkimaulana\TagModel;
use App\Models\Rifkkimaulana\KategoriModel;

use App\Controllers\Rifkkimaulana\Admin\BaseController;

class Artikel extends BaseController
{
    public function index()
    {
        $artikelModel = new ArtikelModel();
        $tagModel = new TagModel();
        $kategoriModel = new KategoriModel();

        $tagMap = [];
        foreach ($tagModel->findAll() as $tag) {
            $tagMap[$tag['id']] = $tag;
        }

        $kategoriMap = [];
        foreach ($kategoriModel->findAll() as $kt) {
            $kategoriMap[$kt['id']] = $kt;
        }

        $data = [
            'title' => 'Artikel',
            'user' => $this->user,
            'artikelData' => $artikelModel->findAll(),
            'kategoriMap' => $kategoriMap,
            'tagMap' => $tagMap
        ];
        return view('Rifkkimaulana/Admin/Pages/Artikel/Artikel', $data);
    }

    public function new()
    {
        $artikelModel = new ArtikelModel();
        $tagModel = new TagModel();
        $kategoriData = new KategoriModel();

        $data = [
            'title' => 'New Post Artikel',
            'user' => $this->user,
            'tagData' => $tagModel->findAll(),
            'kategoriData' => $kategoriData->findAll()
        ];

        return view('Rifkkimaulana/Admin/Pages/Artikel/Form-Artikel', $data);
    }

    public function new_post()
    {

        $artikelModel = new ArtikelModel();

        // Get and handle kategori_id
        $kategoriIds = $this->request->getPost('kategori_id');
        $kategoriIdString = is_array($kategoriIds) ? implode(',', $kategoriIds) : '0';

        // Get and handle tag_id
        $tagIds = $this->request->getPost('tag_id');
        $tagIdString = is_array($tagIds) ? implode(',', $tagIds) : '0';

        $judul = $this->request->getPost('judul');

        // Menghapus karakter khusus dan mengganti spasi dengan tanda hubung
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $judul);

        // Mengubah huruf menjadi huruf kecil
        $slug = strtolower($slug);

        // Menghapus strip atau tanda hubung berlebihan
        $slug = trim($slug, '-');


        $data = [
            'judul' => $judul,
            'isi' => $this->request->getPost('isi'),
            'kategori_id' => $kategoriIdString,
            'tag_id' => $tagIdString,
            'status' => $this->request->getPost('status'),
            'slug' => $slug
        ];

        $gambar = $this->request->getFile('gambar');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaUnik = $gambar->getRandomName();
            $gambar->move(FCPATH . 'assets/image/artikel/', $namaUnik);

            $data['cover'] = $namaUnik;
        }

        $artikelModel->insertData($data);

        return redirect()->to(base_url('artikel'))->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function ubah($id)
    {
        $artikelModel = new ArtikelModel();
        $tagModel = new TagModel();
        $kategoriData = new KategoriModel();

        $data = [
            'title' => 'New Post Artikel',
            'user' => $this->user,
            'tagData' => $tagModel->findAll(),
            'kategoriData' => $kategoriData->findAll(),
            'artikel' => $artikelModel->find($id)
        ];

        return view('Rifkkimaulana/Admin/Pages/Artikel/Ubah-Artikel', $data);
    }

    public function ubah_post()
    {

        $artikelModel = new ArtikelModel();

        $id = $this->request->getPost('id');

        // Get and handle kategori_id
        $kategoriIds = $this->request->getPost('kategori_id');
        $kategoriIdString = is_array($kategoriIds) ? implode(',', $kategoriIds) : '0';

        // Get and handle tag_id
        $tagIds = $this->request->getPost('tag_id');
        $tagIdString = is_array($tagIds) ? implode(',', $tagIds) : '0';

        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'kategori_id' => $kategoriIdString,
            'tag_id' => $tagIdString,
            'status' => $this->request->getPost('status'),
        ];

        $gambar = $this->request->getFile('gambar');
        $gambarLama = $this->request->getPost('gambar_lama');

        if ($gambar->isValid() && !$gambar->hasMoved()) {
            $namaUnik = $gambar->getRandomName();
            $gambar->move(FCPATH . 'assets/image/artikel/', $namaUnik);

            if (!empty($gambarLama)) {
                $gambarPath = FCPATH . 'assets/image/artikel/' . $gambarLama;
                if (file_exists($gambarPath)) {
                    unlink($gambarPath);
                }
            }

            $data['cover'] = $namaUnik;
        }

        $artikelModel->updateId($id, $data);

        return redirect()->to(base_url('artikel'))->with('success', 'Artikel berhasil diubah.');
    }

    public function delete($id)
    {
        $artikelModel = new ArtikelModel();

        $artikel = $artikelModel->find($id);

        if (!$artikel) {
            return redirect()->to(base_url('artikel'))->with('error', 'Artikel tidak ditemukan.');
        }

        try {
            $artikelModel->deleteId($id);

            $gambarPath = FCPATH . 'assets/image/artikel/' . $artikel['cover'];
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }

            return redirect()->to(base_url('artikel'))->with('success', 'Artikel berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->to(base_url('artikel'))->with('error', 'Artikel ini terkait dengan artikel.');
        }
    }

    //--------------------------------------------------------------------

}
