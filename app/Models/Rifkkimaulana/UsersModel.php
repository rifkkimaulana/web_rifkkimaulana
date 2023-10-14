<?php

namespace App\Models\Rifkkimaulana;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'tb_users';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_name',
        'user_username',
        'password',
        'email',
        'whatsapp',
        'user_foto',
        'description',
        'user_level',
        'token_password'
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
