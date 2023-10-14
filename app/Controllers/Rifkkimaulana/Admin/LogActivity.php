<?php

namespace App\Controllers\Rifkkimaulana\Admin;

use App\Models\Rifkkimaulana\ActivityModel;

class LogActivity extends BaseController
{
    public function index()
    {
        $activityModel = new ActivityModel();
        $data = [
            'title' => 'Log Activity',
            'user' => $this->user,
            'activityDataByUserId' => $activityModel->where('user_id', session('user_id'))->findAll(),
        ];
        return view('Rifkkimaulana/Admin/Pages/LogActivity', $data);
    }
    //--------------------------------------------------------------------

}
