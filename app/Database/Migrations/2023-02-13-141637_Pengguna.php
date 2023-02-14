<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
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
            'pengguna_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pengguna_username' => [
                'type'       => 'TEXT',
                'null' => true,
            ],
            'pengguna_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pengguna_email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_by' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_by' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
