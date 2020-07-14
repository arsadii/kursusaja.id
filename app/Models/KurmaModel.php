<?php

namespace App\Models;

use CodeIgniter\Model;

class KurmaModel extends Model
{
    protected $table = 'kurma';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_lmbg', 'judul', 'deskripsi', 'harga', 'daerah', 'tgl_mulai', 'lama_kursus'];

    public function getKurma($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getKurmaMitra($idmitra)
    {
        return $this->where(['id_lmbg'])->findAll();
    }
}
