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
            'menu' => '',
            'validation' => \Config\Services::validation()
        ];
        echo view('pages/masuk', $data);
    }
    public function Daftar()
    {
        $data = [
            'title' => 'Daftar - Kursusaja.id',
            'menu' => '',
            'validation' => \Config\Services::validation()
        ];
        echo view('pages/daftar', $data);
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
            // session()->setFlashdata('flashdata', 'Data Gagal Di Simpan!');
            $validation = \Config\Services::validation();
            return redirect()->to('/pages/daftar')->withInput()->with('validation', $validation);
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
        session()->setFlashdata('flashdata', 'Akun Berhasil Di Dafar!');
        return redirect()->to('/pages/masuk');
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
        $cek = $this->penggunaModel->ceklogin($data['username']);
        $cekmitra = $this->mitraModel->ceklogin($data['username']);
        if ($cek != null) {
            if ($cek['password'] == $data['password']) {
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('nama_lngkp', $cek['nama_lngkp']);
                session()->set('id', $cek['id']);
                session()->set('role', $cek['role']);
                //Login Berhasil
                if (session()->get('role') == 'Admin') {
                    return redirect()->to('/admin/dashboard');
                } elseif (session()->get('role') == 'Mitra') {
                    return redirect()->to('/mitra/dashboard');
                } else {
                    return redirect()->to('/user/dashboard');
                }
            } else {
                // echo "Password Salah";
                session()->setFlashdata('flashdata', 'Password anda Salah !');
                return redirect()->to('/pages/masuk');
            }
        } else if ($cekmitra != null) {
            if ($cekmitra['password'] == $data['password']) {
                session()->set('id', $cekmitra['id']);
                session()->set('username', $cekmitra['username']);
                session()->set('password', $cekmitra['password']);
                session()->set('nama_lngkp', $cekmitra['nama_lmbg']);
                session()->set('role', 'Mitra');
                //Login Berhasil

                return redirect()->to('/mitra/dashboard');
            } else {
                // echo "Password Salah";
                session()->setFlashdata('flashdata', 'Password anda Salah !');
                return redirect()->to('/pages/masuk');
            }
        } else {
            //Belum Daftar
            session()->setFlashdata('flashdata', 'Pengguna belum terdaftar !');
            return redirect()->to('/pages/masuk');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/pages/masuk');
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
}
