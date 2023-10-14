<?php

namespace App\Models\Rifkkimaulana;

use CodeIgniter\Model;

class ActivityModel extends Model
{
    protected $table = 'tb_log_user';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'keterangan',
        'ip_address',
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
