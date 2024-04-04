<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cuidador extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'sobrenome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'senha' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('cuidadores');
    }

    public function down()
    {
        $this->forge->dropTable('cuidadores');
    }
}
