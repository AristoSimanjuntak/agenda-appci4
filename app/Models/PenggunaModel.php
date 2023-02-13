<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pengguna';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'pengguna_nama',
        'pengguna_username',
        'pengguna_password',
        'pengguna_email',
        'role',
        'created_by',
        'updated_by'
    ];





    // public function get_data($email, $password)
    // {
    //     return $this->db->table('pengguna')
    //         ->where(array('pengguna_username' => $email, 'pengguna_password' => $password))
    //         ->get()->getRowArray();
    // }

    // protected $table      = 'pengguna';
    // protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;
    // protected $allowedFields = ['pengguna_nama', 'pengguna_username', 'pengguna_password'];
}
