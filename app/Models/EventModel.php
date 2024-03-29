<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'event';
    protected $useTimestamps = true;

    public function getEvent($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getEventMitra($idmitra)
    {
        return $this->where(['id_lmbg'])->findAll();
    }
}
