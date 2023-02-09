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
    ];


    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


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
