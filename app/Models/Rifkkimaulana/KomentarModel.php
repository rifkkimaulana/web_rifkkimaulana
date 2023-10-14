<?php

namespace App\Models\Rifkkimaulana;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'tb_komentar';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'komentar_id',
        'user_id',
        'artikel_id',
        'komentar'
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
