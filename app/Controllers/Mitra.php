<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;
use App\Models\KurmaModel;

class Mitra extends BaseController
{
    // Pages
    protected $kursusModel;
    public function __construct()
    {
        $this->kursusModel = new KursusModel();
        $this->eventModel = new EventModel();
        $this->penggunaModel = new PenggunaModel();
        $this->mitraModel = new MitraModel();
        $this->materiModel = new MateriModel();
        $this->kurmaModel = new KurmaModel();
    }
    // Mitra
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Mitra - Kursusaja.id',
            'menu' => 'Dashboard'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/dashboard');
        echo view('layout/mitra_footer');
    }
    public function pengaturan()
    {
        $idmitra = session()->get('id');
        $data = [
            'title' => 'Dashboard Mitra - Kursusaja.id',
            'menu' => 'Profil',
            'akun' => $this->mitraModel->getMitra($idmitra)
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/pengaturan', $data);
        echo view('layout/mitra_footer');
    }
    public function layanan()
    {
        $idmitra = session()->get('id');
        $data = [
            'title' => 'Layanan - Kursusaja.id',
            'menu' => 'Layanan',
            'kursus' => $this->kursusModel->getKursusMitra($idmitra),
            'kurma' => $this->kurmaModel->getKurmaMitra($idmitra),
            'event' => $this->eventModel->getEventMitra($idmitra)
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/layanan', $data);
        echo view('layout/mitra_footer');
    }
    public function promosi()
    {
        $data = [
            'title' => 'Promosi - Kursusaja.id',
            'menu' => 'Promosi'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/promosi');
        echo view('layout/mitra_footer');
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil Mitra - Kursusaja.id',
            'menu' => 'Profil'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/profil');
        echo view('layout/mitra_footer');
    }
    public function detail_layanan()
    {
        $data = [
            'title' => 'Detail Layanan - Kursusaja.id',
            'menu' => 'Layanan'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/detail_layanan');
        echo view('layout/mitra_footer');
    }
    public function peserta_layanan()
    {
        $data = [
            'title' => 'Detail Peserta - Kursusaja.id',
            'menu' => 'Layanan'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/data_peserta');
        echo view('layout/mitra_footer');
    }
    public function detail_promosi()
    {
        $data = [
            'title' => 'Detail Promosi - Kursusaja.id',
            'menu' => 'Promosi'
        ];
        echo view('layout/mitra_header', $data);
        echo view('mitra/detail_promosi');
        echo view('layout/mitra_footer');
    }
}
