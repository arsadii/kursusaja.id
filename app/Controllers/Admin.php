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

class Admin extends BaseController
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
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Admin - Kursusaja.id',
            'menu' => '',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/dashboard');
        echo view('layout/admin_footer');
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Pangaturan Admin - Kursusaja.id',
            'menu' => '',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/pengaturan');
        echo view('layout/admin_footer');
    }
    public function user_portfolio()
    {
        $data = [
            'title' => 'Pangaturan Akun User - Kursusaja.id',
            'menu' => 'Pengguna',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/user_portfolio');
        echo view('layout/admin_footer');
    }
    public function user_akun()
    {
        $role = 'Peserta';
        $data = [
            'title' => 'Pangaturan Akun Pengguna - Kursusaja.id',
            'menu' => 'Pengguna',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id')),
            'pengguna' => $this->penggunaModel->pilihPengguna($role)
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/user_akun');
        echo view('layout/admin_footer');
    }
    public function user_perkembangan()
    {
        $data = [
            'title' => 'Perkembangan Pengguna - Kursusaja.id',
            'menu' => 'Pengguna',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/user_perkembangan');
        echo view('layout/admin_footer');
    }
    public function mitra_akun()
    {
        $data = [
            'title' => 'Pangaturan Akun Mitra - Kursusaja.id',
            'menu' => 'Mitra',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/mitra_akun');
        echo view('layout/admin_footer');
    }
    public function mitra_layanan()
    {
        $data = [
            'title' => 'Pangaturan Layanan Mitra - Kursusaja.id',
            'menu' => 'Mitra',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/mitra_layanan');
        echo view('layout/admin_footer');
    }
    public function mitra_promosi()
    {
        $data = [
            'title' => 'Pangaturan Promosi Mitra - Kursusaja.id',
            'menu' => 'Mitra',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/mitra_promosi');
        echo view('layout/admin_footer');
    }
    public function ubahprofil($id)
    {
        $user = $this->penggunaModel->getPengguna(session()->get('id'));
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong!'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pengguna tidak boleh kosong!',
                ]
            ],
            'hp' => [
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
            'ttl' => [
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
            return redirect()->to('/admin/pengaturan')->withInput()->with('validation', $validation);
        }
        $id = session()->get('id');
        date_default_timezone_set('Asia/Makassar');
        if (($this->request->getVar('pass')) == $user['password']) {
            $this->penggunaModel->save([
                'id' => $id,
                'username' => $this->request->getVar('username'),
                'nama_lngkp' => $this->request->getVar('nama'),
                'ttl' => $this->request->getVar('ttl'),
                'alamat' => $this->request->getVar('alamat'),
                'hp' => $this->request->getVar('hp'),
                'email' => $this->request->getVar('email')
            ]);
            session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
            return redirect()->to('/admin/pengaturan');
        } else {
            session()->setFlashdata('flashdata', 'Kata Sandi salah!');
            return redirect()->to('/admin/pengaturan');
        }
    }
    public function ubahsandi($id)
    {
        $user = $this->penggunaModel->getPengguna(session()->get('id'));
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
            ],

        ])) {
            session()->setFlashdata('flashdata', 'Data Gagal Di Ubah!');
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/pengaturan')->withInput()->with('validation', $validation);
        }
        $id = session()->get('id');
        if (($this->request->getVar('passlama')) == $user['password']) {
            $this->penggunaModel->save([
                'id' => $id,
                'password' => $this->request->getVar('passbaru'),
            ]);
            session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
            return redirect()->to('/admin/pengaturan');
        } else {
            session()->setFlashdata('flashdata', 'Kata Sandi Salah!');
            return redirect()->to('/admin/pengaturan');
        }
    }
    public function ubahfotoprofil($id)
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,5120]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Foto Belum Di Pilih!',
                    'max_size' => 'Ukuran Gambar Terlalu Besar!',
                    'is_image' => 'File Yang Anda Pilih Bukan Gambar!',
                    'mime_in' => 'File Yang Anda Pilih Bukan Gambar!'
                ]
            ],
        ])) {
            session()->setFlashdata('flashdata', 'Data Gagal Di Ubah!');
            return redirect()->to('/admin/pengaturan')->withInput();
        }
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $fileGambar->getName();
        $fileGambar->move('assets/img/profil/admin');
        $id = session()->get('id');

        $this->penggunaModel->save([
            'id' => $id,
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
        return redirect()->to('/admin/pengaturan');
    }
}
