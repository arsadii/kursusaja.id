<?php

namespace App\Models;

use CodeIgniter\Model;

class KursusModel extends Model
{
    protected $table = 'kursus';
    protected $useTimestamps = true;

    public function getKursus($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
