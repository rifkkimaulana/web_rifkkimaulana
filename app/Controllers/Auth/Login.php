<?php

namespace App\Controllers\Auth;

use App\Models\Rifkkimaulana\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Login'
        ];
        return view('Rifkkimaulana/Auth/Pages/Login', $data);
    }

    public function login_post()
    {
        $identitas = $this->request->getPost('usernameOrEmail');
        $password = $this->request->getPost('password');

        $usersModel = new UsersModel();
        if (filter_var($identitas, FILTER_VALIDATE_EMAIL)) {
            $pengguna = $usersModel->where('email', $identitas)->first();
        } else {
            $pengguna = $usersModel->where('user_username', $identitas)->first();
        }

        if ($pengguna && password_verify($password, $pengguna['password'])) {
            session()->set('user_id', $pengguna['id']);
            session()->set('user_level', $pengguna['user_level']);

            if ($this->request->getPost('remember')) {
                $cookieValue = $pengguna['user_id'] . '|' . $pengguna['user_password'];

                $this->response->setCookie('remember_me', $cookieValue, 3600 * 24 * 30);
            }

            return redirect()->to(base_url('dashboard'));
        } else {
            session()->setFlashdata('error', 'Kredensial tidak valid. Silakan coba lagi.');
            return redirect()->to(base_url('login'));
        }
    }

    //--------------------------------------------------------------------

}
