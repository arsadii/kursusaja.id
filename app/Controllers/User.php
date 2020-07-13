<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;

class User extends BaseController
{
    // // Pages
    protected $kursusModel;
    public function __construct()
    {
        $this->kursusModel = new KursusModel();
        $this->eventModel = new EventModel();
        $this->penggunaModel = new PenggunaModel();
        $this->mitraModel = new MitraModel();
        $this->materiModel = new MateriModel();
    }
    // User 
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus'
        ];
        echo view('layout/user_header', $data);
        echo view('user/dashboard');
        echo view('layout/user_footer');
    }
    public function kursus()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus'
        ];
        echo view('layout/user_header', $data);
        echo view('user/kursus');
        echo view('layout/user_footer');
    }
    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio - Kursusaja.id',
            'menu' => 'Portfolio'
        ];
        echo view('layout/user_header', $data);
        echo view('user/portfolio');
        echo view('layout/user_footer');
    }
    public function reward()
    {
        $data = [
            'title' => 'Rewards - Kursusaja.id',
            'menu' => 'Rewards'
        ];
        echo view('layout/user_header', $data);
        echo view('user/reward');
        echo view('layout/user_footer');
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil Saya - Kursusaja.id',
            'menu' => 'Profil'
        ];
        echo view('layout/user_header', $data);
        echo view('user/profil');
        echo view('layout/user_footer');
    }
    public function materi()
    {
        $data = [
            'title' => 'Materi - Kursusaja.id',

        ];
        echo view('user/materi_kursus', $data);
        echo view('layout/user_footer');
    }
}
