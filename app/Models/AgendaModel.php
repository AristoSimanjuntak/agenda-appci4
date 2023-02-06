<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table      = 'agenda';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_agenda', 'asal_surat', 'no_surat', 'no_bkad', 'tgl', 'tempat', 'disposisi', 'catatan'];
}
