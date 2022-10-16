<?php

namespace App\Models;

use CodeIgniter\Model;

class AlmacenModel extends Model
{
    protected $table = 'almacen';

    public function getAlmacen($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}