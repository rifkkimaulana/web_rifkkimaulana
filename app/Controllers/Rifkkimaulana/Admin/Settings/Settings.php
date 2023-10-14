<?php

namespace App\Controllers\Rifkkimaulana\Admin\Settings;

use App\Models\Rifkkimaulana\UsersModel;

use App\Controllers\Rifkkimaulana\Admin\BaseController;

class Settings extends BaseController
{
    public function users()
    {
        $usersModel = new UsersModel();

        $data = [
            'title' => 'Settings Users',
            'user' => $this->user,
            'userData' => $usersModel->findAll()
        ];
        return view('Rifkkimaulana/Admin/Pages/Settings/Users.php', $data);
    }

    public function profile()
    {
        $usersModel = new UsersModel();

        $data = [
            'title' => 'Settings Profile User',
            'user' => $this->user,
            'userDataById' => $usersModel->where('id', session('user_id'))->first()
        ];
        return view('Rifkkimaulana/Admin/Pages/Settings/Profile.php', $data);
    }
    //--------------------------------------------------------------------

}
