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
            'validation' => \Config\Services::validation(),
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
    public function ubahprofil($id)
    {
        $user = $this->mitraModel->getMitra(session()->get('id'));
        if (!$this->validate([
            'nama_lmbg' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lembaga tidak boleh kosong!'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pengguna tidak boleh kosong!',
                ]
            ],
            'tnggl_brdr' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal berdiri tidak boleh kosong!'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir tidak boleh kosong!'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email tidak boleh kosong!',
                ]
            ],
            'hp' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nomor Handphone tidak boleh kosong!',
                    'numeric' => 'Nomor Handphone  harus berupa angka'
                ]
            ],
            'pass' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kata Sandi tidak boleh kosong!',
                    'min_length' => 'Panjang Kata Sandi minimal 8 karakter'
                ]
            ]


        ])) {
            session()->setFlashdata('flashdata', 'Data Gagal Di Ubah!');
            $validation = \Config\Services::validation();
            return redirect()->to('/mitra/pengaturan')->withInput()->with('validation', $validation);
        }
        $id = session()->get('id');
        date_default_timezone_set('Asia/Makassar');
        if (($this->request->getVar('pass')) == $user['password']) {
            $this->mitraModel->save([
                'id' => $id,
                'nama_lmbg' => $this->request->getVar('nama_lmbg'),
                'username' => $this->request->getVar('username'),
                'nama_lngkp' => $this->request->getVar('nama'),
                'tnggl_brdr' => $this->request->getVar('tnggl_brdr'),
                'alamat' => $this->request->getVar('alamat'),
                'hp' => $this->request->getVar('hp'),
                'email' => $this->request->getVar('email')
            ]);
            session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
            return redirect()->to('/mitra/pengaturan');
        } else {
            session()->setFlashdata('flashdata', 'Kata Sandi salah!');
            return redirect()->to('/mitra/pengaturan');
        }
    }
    public function ubahsandi($id)
    {
        $user = $this->mitraModel->getMitra(session()->get('id'));
        if (!$this->validate([
            'passlama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kata Sandi tidak boleh kosong!'
                ]
            ],
            'passbaru' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kata Sandi Baru tidak boleh kosong!',
                ]
            ],
            'confirmpass' => [
                'rules' => 'required|matches[passbaru]',
                'errors' => [
                    'required' => 'Konfirmasi Kata Sandi tidak boleh kosong!',
                    'matches' => 'Konfirmasi Kata Sandi Baru tidak Sesuai!'
                ]
            ]

        ])) {
            session()->setFlashdata('flashdata', 'Data Gagal Di Ubah!');
            $validation = \Config\Services::validation();
            return redirect()->to('/mitra/pengaturan')->withInput()->with('validation', $validation);
        }
        $id = session()->get('id');
        if (($this->request->getVar('passlama')) == $user['password']) {
            $this->mitraModel->save([
                'id' => $id,
                'password' => $this->request->getVar('passbaru')
            ]);
            session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
            return redirect()->to('/mitra/pengaturan');
        } else {
            dd('salah');
            session()->setFlashdata('flashdata', 'Kata Sandi salah!');
            return redirect()->to('/mitra/pengaturan');
        }
    }
}
