<?php

namespace App\Models;

use CodeIgniter\Model;

class MitraModel extends Model
{
    protected $table = 'mitra';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'nama_lmbg', 'tnggl_brdr', 'alamat', 'hp', 'email', 'gambar', 'created_at', 'updated_at'];

    public function getMitra($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function ceklogin($username)
    {
        $hasil = $this->where('username', $username)->get()->getRowArray();

        return $hasil;
    }
}
