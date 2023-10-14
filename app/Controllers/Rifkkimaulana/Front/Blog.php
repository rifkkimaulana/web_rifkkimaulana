<?php

namespace App\Controllers\Rifkkimaulana\Front;

use App\Models\Rifkkimaulana\KategoriModel;
use App\Models\Rifkkimaulana\TagModel;
use App\Models\Rifkkimaulana\ArtikelModel;
use App\Models\Rifkkimaulana\UsersModel;
use App\Models\Rifkkimaulana\KomentarModel;

class Blog extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $tagModel = new TagModel();
        $artikelModel = new ArtikelModel();


        // Hitung jumlah artikel untuk setiap kategori
        $kategoriArticleCount = [];
        foreach ($kategoriModel->findAll() as $kategori) {
            $articleCount = $artikelModel->where("FIND_IN_SET({$kategori['id']}, kategori_id)")->countAllResults();
            $kategoriArticleCount[$kategori['id']] = $articleCount;
        }

        $tagMap = [];
        foreach ($tagModel->findAll() as $tag) {
            $tagMap[$tag['id']] = $tag;
        }

        $data = [
            'title' => 'Blog Rifkkimaulana',
            'kategoriData' => $kategoriModel->findAll(),
            'tagData' => $tagModel->findAll(),
            'artikelData' => $artikelModel->paginate(10, 'rifkkimaulana'),
            'artikelDataWidgets' => $artikelModel->limit(10)->findAll(),
            'kategoriArticleCount' => $kategoriArticleCount,
            'tagMap' => $tagMap,
            'pager' => $artikelModel->pager
        ];
        return view('Rifkkimaulana/Front/Pages/Blog', $data);
    }

    public function detail($slug)
    {
        $kategoriModel = new KategoriModel();
        $tagModel = new TagModel();
        $artikelModel = new ArtikelModel();
        $komentarModel = new KomentarModel();

        $artikel = $artikelModel->where('slug', $slug)->first();

        // Hitung jumlah artikel untuk setiap kategori
        $kategoriArticleCount = [];
        foreach ($kategoriModel->findAll() as $kategori) {
            $articleCount = $artikelModel->where("FIND_IN_SET({$kategori['id']}, kategori_id)")->countAllResults();
            $kategoriArticleCount[$kategori['id']] = $articleCount;
        }

        $komentarCount = [];
        foreach ($komentarModel->findAll() as $komen) {
            $jumlahKomentar = $komentarModel->where('artikel_id', $komen['artikel_id'])->countAllResults();

            $komentarCount[$komen['artikel_id']] = $jumlahKomentar;
        }


        $tagMap = [];
        foreach ($tagModel->findAll() as $tag) {
            $tagMap[$tag['id']] = $tag;
        }

        $usersModel = new UsersModel();
        $userMap = [];
        foreach ($usersModel->findAll() as $user) {
            $userMap[$user['id']] = $user;
        }



        $data = [
            'title' => 'Blog Rifkkimaulana',
            'kategoriData' => $kategoriModel->findAll(),
            'tagData' => $tagModel->findAll(),
            'artikel' => $artikel,
            'artikelDataWidgets' => $artikelModel->limit(10)->findAll(),
            'kategoriArticleCount' => $kategoriArticleCount,
            'tagMap' => $tagMap,
            'pager' => $artikelModel->pager,
            'userMap' => $userMap,
            'komentarCount' => $komentarCount,
            'komentarDataByArtikel' => $komentarModel->where('artikel_id', $artikel['id'])->findAll()
        ];

        return view('Rifkkimaulana/Front/Pages/BlogDetail', $data);
    }
    //--------------------------------------------------------------------

}
