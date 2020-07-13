<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard Admin - Kursusaja.id',
            'menu' => ''
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/dashboard');
        echo view('layout/admin_footer');
    }
    public function pengaturan()
    {
        $data = [
            'title' => 'Pangaturan Admin - Kursusaja.id',
            'menu' => ''
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
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/user_portfolio');
        echo view('layout/admin_footer');
    }
    public function user_akun()
    {
        $data = [
            'title' => 'Pangaturan Akun Pengguna - Kursusaja.id',
            'menu' => 'Pengguna',
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
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/mitra_promosi');
        echo view('layout/admin_footer');
    }
}
