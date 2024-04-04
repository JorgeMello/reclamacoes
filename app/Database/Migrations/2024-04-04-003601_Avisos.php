<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Avisos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'cuidador_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'mensagem' => [
                'type' => 'VARCHAR',
                'constraint' => 1000
            ],
            'attachment' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
                'null' => true
            ],
            'assunto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ]
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
        ]
        ]);
        $this->forge->addPrimaryKey('id');
        //$this->forge->addForeignKey('cuidador_id', 'cuidadores', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('avisos');

    }

    public function down()
    {
        $this->forge->dropTable('avisos');
    }
}
