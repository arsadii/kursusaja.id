<?php

namespace App\Controllers;

use App\Models\KursusModel;
use App\Models\EventModel;
use App\Models\PenggunaModel;
use App\Models\MitraModel;
use App\Models\MateriModel;
use App\Models\PortofolioModel;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController
{
    use ResponseTrait;
    // // Pages
    protected $kursusModel;
    public function __construct()
    {
        $this->kursusModel = new KursusModel();
        $this->eventModel = new EventModel();
        $this->penggunaModel = new PenggunaModel();
        $this->mitraModel = new MitraModel();
        $this->materiModel = new MateriModel();
        $this->portofolioModel = new PortofolioModel();
    }
    // User 
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/dashboard');
        echo view('layout/user_footer');
    }
    public function kursus()
    {
        $data = [
            'title' => 'Dashboard - Kursusaja.id',
            'menu' => 'Kursus',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/kursus');
        echo view('layout/user_footer');
    }
    public function portfolio()
    {
        $data = [
            'title' => 'Portfolio - Kursusaja.id',
            'menu' => 'Portfolio',
            'user' => $this->penggunaModel->getPengguna(session()->get('id')),
            'portofolio' => $this->portofolioModel->getPortofolioPeserta(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/portfolio');
        echo view('layout/user_footer');
    }
    public function reward()
    {
        $data = [
            'title' => 'Rewards - Kursusaja.id',
            'menu' => 'Rewards',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/reward');
        echo view('layout/user_footer');
    }
    public function profil()
    {
        $data = [
            'title' => 'Profil - Kursusaja.id',
            'menu' => 'Profil',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/profil');
        echo view('layout/user_footer');
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Pangaturan Admin - Kursusaja.id',
            'menu' => '',
            'validation' => \Config\Services::validation(),
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))
        ];
        echo view('layout/user_header', $data);
        echo view('user/pengaturan');
        echo view('layout/user_footer');
    }
    public function materi()
    {
        $data = [
            'title' => 'Materi - Kursusaja.id',
            'user' => $this->penggunaModel->getPengguna(session()->get('id'))

        ];
        echo view('user/materi_kursus', $data);
        echo view('layout/user_footer');
    }
    public function ubahprofil($id)
    {
        $user = $this->penggunaModel->getPengguna(session()->get('id'));
        //Cek username
        $unamelama = $user['username'];
        if ($unamelama == $this->request->getVar('username')) {
            $rule_uname = 'required';
        } else {
            $rule_uname = 'required|is_unique[pengguna.username]';
        }

        $unameemail = $user['email'];
        if ($unameemail == $this->request->getVar('email')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|is_unique[pengguna.email]';
        }
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong!'
                ]
            ],
            'username' => [
                'rules' => $rule_uname,
                'errors' => [
                    'required' => 'Nama Pengguna tidak boleh kosong!',
                    'is_unique' => 'Nama Pengguna Sudah dugunakan!'
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
                'rules' => $rule_email,
                'errors' => [
                    'required' => 'Email tidak boleh kosong!',
                    'is_unique' => 'Email Sudah dugunakan!'

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
            return redirect()->to('/user/pengaturan')->withInput()->with('validation', $validation);
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
            return redirect()->to('/user/pengaturan');
        } else {
            session()->setFlashdata('flashdata', 'Kata Sandi salah!');
            return redirect()->to('/user/pengaturan');
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
            return redirect()->to('/user/pengaturan')->withInput()->with('validation', $validation);
        }
        $id = session()->get('id');
        if (($this->request->getVar('passlama')) == $user['password']) {
            $this->penggunaModel->save([
                'id' => $id,
                'password' => $this->request->getVar('passbaru'),
            ]);
            session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
            return redirect()->to('/user/pengaturan');
        } else {
            session()->setFlashdata('flashdata', 'Kata Sandi Salah!');
            return redirect()->to('/user/pengaturan');
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
            return redirect()->to('/user/pengaturan')->withInput();
        }
        // $gambar = $this->penggunaModel->getPengguna(session()->get('id'));
        // $hapus = "assets/img/profil/peserta/" . $gambar['gambar'];
        // unlink($hapus);
        $fileGambar = $this->request->getFile('gambar');
        $namaGambar = $fileGambar->getName();
        $fileGambar->move('assets/img/profil/peserta');
        $id = session()->get('id');

        $this->penggunaModel->save([
            'id' => $id,
            'gambar' => $namaGambar
        ]);

        session()->setFlashdata('flashdata', 'Data Berhasil Di Ubah!');
        return redirect()->to('/user/pengaturan');
    }

    public function ambil_portofolio($id)
    {
        $portofolio = $this->portofolioModel->getPortofolio($id);

        if (!$portofolio) {
            return $this->respond("ID portofolio tidak ditemukan");
        }

        return $this->respond([
            "portofolio" => $portofolio
        ]);
    }

    public function tambahportofolio()
    {
        $id = session()->get('id');

        if (!$this->validate([
            'judulportofolio' => 'required',
            'keteranganportofolio' => 'required'
        ])) {
            return $this->respond("Semua kolom harus diisi!");
        } else {
            $fileGambar = $this->request->getFile('gambarportofolio');
            $namaGambar = $fileGambar->getName();
            $fileGambar->move('assets/img/portfolio');
            $this->portofolioModel->save([
                'id_peserta' => $id,
                'judul' => $this->request->getVar('judulportofolio'),
                'deskripsi' => $this->request->getVar('keteranganportofolio'),
                'gambar' => $namaGambar
            ]);
            return $this->respond("Data berhasil di tambah!");
            return redirect()->to('/user/portfolio');
        }
    }

    // Cbacbacba

    public function ubah_portofolio()
    {
        if (!$this->validate([
            'judul-portofolio' => 'required',
            'keterangan-portofolio' => 'required'
        ])) {
            return $this->respond("Semua kolom harus diisi!");
        } else {


            $fileGambar = $this->request->getFile('gambar-portofolio');
            $namaGambar = $fileGambar->getName();
            if ($namaGambar == null) {
                $this->portofolioModel->save([
                    'id' => $this->request->getVar('id-portofolio'),
                    'judul' => $this->request->getVar('judul-portofolio'),
                    'deskripsi' => $this->request->getVar('keterangan-portofolio'),
                ]);
            } else {
                $gambar = $this->portofolioModel->getPortofolio($this->request->getVar('id-portofolio'));
                $hapus = "assets/img/portfolio/" . $gambar['gambar'];
                unlink($hapus);
                $fileGambar->move('assets/img/portfolio');
                $this->portofolioModel->save([
                    'id' => $this->request->getVar('id-portofolio'),
                    'judul' => $this->request->getVar('judul-portofolio'),
                    'deskripsi' => $this->request->getVar('keterangan-portofolio'),
                    'gambar' => $namaGambar,
                ]);
            }
            return $this->respond("Data berhasil diubah!");
        }
    }
    public function hapusportofolio($id)
    {
        $gambar = $this->portofolioModel->getPortofolio($id);
        $hapus = "assets/img/portfolio/" . $gambar['gambar'];
        unlink($hapus);
        $this->portofolioModel->delete($id);

        // return $this->respond("Portofolio berhasil dihapus!");
        return redirect()->to('/user/portfolio');
    }
}
