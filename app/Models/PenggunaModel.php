<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'role', 'nama_lngkp', 'ttl', 'alamat', 'hp', 'email', 'created_at', 'updated_at'];

    public function getPengguna($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function cariuser($username)
    {
        return $this->where(['username' => $username])->first();
    }

    public function ceklogin($username)
    {
        $hasil = $this->where('username', $username)->get()->getRowArray();

        return $hasil;
    }
    public function pilihPengguna($id)
    {
        $hasil = $this->where($id)->get()->getRowArray();

        return $hasil;
        // return $this->db->table('pengguna')
        //     ->where($id)
        //     ->get()->getRowArray();
    }
}
