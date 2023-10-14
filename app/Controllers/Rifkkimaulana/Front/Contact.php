<?php

namespace App\Controllers\Rifkkimaulana\Front;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('Rifkkimaulana/Front/Pages/Contact', $data);
    }

    //--------------------------------------------------------------------

}
