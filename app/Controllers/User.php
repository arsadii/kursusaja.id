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
    public function dashboard_user()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus'
        ];
        echo view('layout/user_header', $data);
        echo view('user/dashboard_user');
        echo view('layout/user_footer');
    }
    public function kursus_user()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus'
        ];
        echo view('layout/user_header', $data);
        echo view('user/kursus_user');
        echo view('layout/user_footer');
    }
    public function karya_user()
    {
        $data = [
            'title' => 'Karya Saya - Kursusaja.id',
            'menu' => 'Portfolio'
        ];
        echo view('layout/user_header', $data);
        echo view('user/karya_user');
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
    public function profil_user()
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
