<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table      = 'agenda';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_agenda', 'asal_surat', 'no_surat', 'no_bkad', 'tgl', 'tempat', 'disposisi', 'catatan', 'notulensi'];


    public function dateSame()
    {
        $db      = \Config\Database::connect();
        $date_now = date("Y-m-d");

        $builder = $db->table($this->table);
        $agenda  = $builder->get();


        $data = [];
        $count = 0;
        foreach ($agenda->getResult() as $ag) {

            $ag->tgl = explode(" ", $ag->tgl);
            if ($ag->tgl[0] === $date_now) {

                array_push($data, $ag);
                $count++;
            }
        }

        return [
            'count' => $count,
            'data'  => $data
        ];
    }
}
