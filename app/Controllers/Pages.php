<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;
use Config\Services;
use DateTime;
use DateTimeZone;

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
            'menu' => 'Masuk',
            'validation' => \Config\Services::validation()
        ];
        echo view('pages/masuk', $data);
    }
    public function daftarakun()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong!'
                ]
            ],
            'usernamed' => [
                'rules' => 'required|is_unique[pengguna.username]',
                'errors' => [
                    'required' => 'Nama Pengguna tidak boleh kosong!',
                    'is_unique' => 'Nama Pengguna sudah di gunakan'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nomor Handphone tidak boleh kosong!',
                    'numeric' => 'Nomor Handphone  harus berupa angka'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong!'
                ]
            ],
            'tanggallahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir tidak boleh kosong!'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[pengguna.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong!',
                    'is_unique' => 'Email sudah di gunakan'
                ]
            ],
            'passwordd' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kata Sandi tidak boleh kosong!',
                    'min_length' => 'Panjang Kata Sandi minimal 8 karakter'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/masuk')->withInput()->with('validation', $validation);
        }
        date_default_timezone_set('Asia/Makassar');
        $role = 'admin';
        // $date='date()';

        $this->penggunaModel->save([
            'username' => $this->request->getVar('usernamed'),
            'password' => $this->request->getVar('passwordd'),
            'role' => $role,
            'nama_lngkp' => $this->request->getVar('nama'),
            'ttl' => $this->request->getVar('tanggallahir'),
            'alamat' => $this->request->getVar('alamat'),
            'hp' => $this->request->getVar('no_hp'),
            'email' => $this->request->getVar('email')
            // 'created_at'=>$date;
        ]);
        return redirect()->to('/pages/masuk');
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
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pengguna harus di isi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kata Sandi harus di isi'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/masuk')->withInput()->with('validation', $validation);
        }

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
}
