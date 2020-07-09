<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Beranda - Kursusaja.id',
			'menu' => 'Beranda'
		];
		echo view('layout/header', $data);
		echo view('index');
		echo view('layout/footer');
	}
}
