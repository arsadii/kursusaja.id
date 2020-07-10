<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard_admin()
    {
        $data = [
            'title' => 'Pangaturan Akun User - Kursusaja.id',
            'menu' => 'Dashboard Admin',
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/dashboard_admin');
        echo view('layout/admin_footer');
    }
    public function user_akun()
    {
        $data = [
            'title' => 'Pangaturan Akun User - Kursusaja.id',
            'menu' => 'Akun User',
        ];
        echo view('layout/admin_header', $data);
        echo view('admin/user_akun');
        echo view('layout/admin_footer');
    }
}
