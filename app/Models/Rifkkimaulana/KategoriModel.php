<?php

namespace App\Models\Rifkkimaulana;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'tb_artikel_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama'
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
