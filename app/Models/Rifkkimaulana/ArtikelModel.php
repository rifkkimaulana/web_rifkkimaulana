<?php

namespace App\Models\Rifkkimaulana;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'tb_artikel';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul',
        'isi',
        'kategori_id',
        'tag_id',
        'status',
        'cover',
        'slug'
    ];

    public function insertData($data)
    {
        return $this->insert($data);
    }

    public function updateId($id, $data)
    {
        $this->set($data)->where('id', $id)->update();
    }

    public function deleteId($id)
    {
        return $this->where('id', $id)->delete();
    }
}
