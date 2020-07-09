<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;

class Pages extends BaseController
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
    }
    public function katalog()
    {
        $data = [
            'title' => 'Katalog Kursus - Kursusaja.id',
            'menu' => 'Kursus',
            'kursus' => $this->kursusModel->getKursus()
        ];
        echo view('layout/header', $data);
        echo view('pages/katalog', $data);
        echo view('layout/footer');
    }

    public function login()
    {
        redirect('pengguna/pengguna');
    }
    public function event()
    {
        $data = [
            'title' => 'Event - Kursusaja.id',
            'menu' => 'Event',
            'event' => $this->eventModel->getEvent()
        ];
        echo view('layout/header', $data);
        echo view('pages/event');
        echo view('layout/footer');
    }
    public function portfolio()
    {
        $data = [
            'title' => 'Event - Kursusaja.id',
            'menu' => 'Portfolio'
        ];
        echo view('layout/header', $data);
        echo view('pages/portfolio');
        echo view('layout/footer');
    }
    public function masuk()
    {
        $data = [
            'title' => 'Masuk - Kursusaja.id',
            'menu' => 'Masuk'
        ];
        echo view('layout/header', $data);
        echo view('pages/masuk');
        echo view('layout/footer');
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar - Kursusaja.id',
            'menu' => 'Daftar'
        ];
        echo view('layout/header', $data);
        echo view('pages/daftar');
        echo view('layout/footer');
    }
    public function detail_kursus()
    {
        $data = [
            'title' => 'Detail Kursus - Kursusaja.id'
        ];
        echo view('pages/detail_kursus', $data);
        echo view('layout/user_footer');
    }
    public function detail_event()
    {
        $data = [
            'title' => 'Detail Event - Kursusaja.id'
        ];
        echo view('pages/detail_event', $data);
        echo view('layout/user_footer');
    }
    public function detailkursus($id)
    {
        $data = [
            'title' => 'Detail Kursus - Kursusaja.id',
            'menu' => 'Detail Kursus',
            'kursus' => $this->kursusModel->getKursus($id)
        ];
        echo view('pages/detail_kursus', $data);
        echo view('layout/user_footer');
    }

    public function detailevent($id)
    {
        $data = [
            'title' => 'Detail Event - Kursusaja.id',
            'menu' => 'Detail Event',
            'event' => $this->eventModel->getEvent($id)
        ];
        echo view('pages/detail_event', $data);
        echo view('layout/user_footer');
    }

    // User ----------------------------------------------------
    // public function dashboard_user()
    // {
    //     $data = [
    //         'title' => 'Dashboard - Kursusaja.id',
    //         'menu' => 'Kursus'
    //     ];
    //     echo view('layout/user_header', $data);
    //     echo view('user/dashboard_user');
    //     echo view('layout/user_footer');
    // }
    // public function karya_user()
    // {
    //     $data = [
    //         'title' => 'Karya Saya - Kursusaja.id',
    //         'menu' => 'Portfolio'
    //     ];
    //     echo view('layout/user_header', $data);
    //     echo view('user/karya_user');
    //     echo view('layout/user_footer');
    // }
    // public function reward()
    // {
    //     $data = [
    //         'title' => 'Rewards - Kursusaja.id',
    //         'menu' => 'Rewards'
    //     ];
    //     echo view('layout/user_header', $data);
    //     echo view('user/reward');
    //     echo view('layout/user_footer');
    // }
    // public function profil_user()
    // {
    //     $data = [
    //         'title' => 'Profil Saya - Kursusaja.id',
    //         'menu' => 'Profil'
    //     ];
    //     echo view('layout/user_header', $data);
    //     echo view('user/profil');
    //     echo view('layout/user_footer');
    // }
    // public function materi()
    // {
    //     $data = [
    //         'title' => 'Materi - Kursusaja.id',

    //     ];
    //     echo view('user/materi_kursus', $data);
    //     echo view('layout/user_footer');
    // }

    // Mitra-------------------------------------------------------
    // public function layanan()
    // {
    //     $data = [
    //         'title' => 'Layanan - Kursusaja.id',
    //         'menu' => 'Layanan'
    //     ];
    //     echo view('layout/mitra_header', $data);
    //     echo view('mitra/layanan');
    //     echo view('layout/mitra_footer');
    // }
    // public function promosi()
    // {
    //     $data = [
    //         'title' => 'Promosi - Kursusaja.id',
    //         'menu' => 'Promosi'
    //     ];
    //     echo view('layout/mitra_header', $data);
    //     echo view('mitra/promosi');
    //     echo view('layout/mitra_footer');
    // }
    // public function profil_mitra()
    // {
    //     $data = [
    //         'title' => 'Promosi - Kursusaja.id',
    //         'menu' => 'Profil'
    //     ];
    //     echo view('layout/mitra_header', $data);
    //     echo view('mitra/profil');
    //     echo view('layout/mitra_footer');
    // }
}
