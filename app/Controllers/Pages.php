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
            'title' => 'Portfolio - Kursusaja.id',
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
        echo view('pages/masuk', $data);
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar - Kursusaja.id'
        ];
        echo view('layout/header', $data);
        echo view('pages/daftar');
        echo view('layout/footer');
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

    public function cekmasuk()
    {
        $data = [
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ];

        $profil = $this->penggunaModel->ceklogin($data['username']);

        if ($profil != null) {
            if ($profil['password'] == $data['password']) {
                //Login Berhasil
                echo "Data Benar";
            } else {
                echo "Password Salah";
            }
        } else {
            //Belum Daftar
            echo "Pengguna tidak terdaftar";
        }
    }

    public function aksidaftar()
    {
        $role = 'admin';

        //Ambil username dan Cek Data berdasarkan Username
        $username = $this->request->getVar('username');
        $ada = $this->penggunaModel->cariuser($username);

        if ($ada != null) {
            echo "Username" . $username . "sudah digunakan!";
        } else {
            //Insert ke database
            $this->penggunaModel->save([
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
                'role' => $role,
                'nama_lngkp' => $this->request->getVar('nama'),
                'ttl' => $this->request->getVar('tanggallahir'),
                'alamat' => $this->request->getVar('alamat'),
                'hp' => $this->request->getVar('no_hp'),
                'email' => $this->request->getVar('email')
            ]);
        }

        echo view('layout/header');
        echo view('pages/masuk');
        echo view('layout/footer');
    }
}
