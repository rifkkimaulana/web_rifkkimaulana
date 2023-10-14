<?php

namespace App\Controllers\Rifkkimaulana\Front;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('Rifkkimaulana/Front/Pages/About', $data);
    }

    //--------------------------------------------------------------------

}
