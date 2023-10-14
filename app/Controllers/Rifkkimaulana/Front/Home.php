<?php

namespace App\Controllers\Rifkkimaulana\Front;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('Rifkkimaulana/Front/Pages/Home', $data);
	}

	//--------------------------------------------------------------------

}
