<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agenda extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_agenda' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'asal_surat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ], 'no_surat' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'no_bkad' => [
                'type'       => 'INT',
                'constraint' => '11',
            ],
            'tgl' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'tempat' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'disposisi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'catatan' => [
                'type' => 'TEXT',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('agenda');
    }

    public function down()
    {
        $this->forge->dropTable('agenda');
    }
}
