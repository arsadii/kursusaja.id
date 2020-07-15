<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table = 'portofolio';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'role', 'nama_lngkp', 'ttl', 'alamat', 'hp', 'email', 'gambar', 'created_at', 'updated_at'];

    public function getPortofolio($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getPortofolioPeserta($id)
    {
        return $this->where(['id_peserta' => $id])->findAll();
    }
}
