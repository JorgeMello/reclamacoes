<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsuariosResposta extends Migration
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
            'id_usuarios' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
            ],
            'resposta' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'id_avisos' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true
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
        ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('usuarios_resposta');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios_resposta');
    }
}
