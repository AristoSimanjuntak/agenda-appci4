<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{

    public function get_data($email, $password)
    {
        return $this->db->table('pengguna')
            ->where(array('pengguna_username' => $email, 'pengguna_password' => $password))
            ->get()->getRowArray();
    }

    // protected $table      = 'pengguna';
    // protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['pengguna_nama', 'pengguna_username', 'pengguna_password'];
}
