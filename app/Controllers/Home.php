<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;

class Home extends BaseController
{
	protected $kursusModel;
	public function __construct()
	{
		$this->kursusModel = new KursusModel();
		$this->eventModel = new EventModel();
		$this->penggunaModel = new PenggunaModel();
		$this->mitraModel = new MitraModel();
		$this->materiModel = new MateriModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Beranda - Kursusaja.id',
			'menu' => 'Beranda',
			'kursus' => $this->kursusModel->getKursus(),
			'event' => $this->eventModel->getEvent()
		];
		echo view('layout/header', $data);
		echo view('index', $data);
		echo view('layout/footer');
	}
}
