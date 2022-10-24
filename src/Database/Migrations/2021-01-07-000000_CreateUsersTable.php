<?php

namespace Conquer\Auth\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'null'           => false,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unsigned'   => false,
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unsigned'   => false,
                'null'       => false,
                'unique'     => true,
            ],
            'email_verified_at' => [
                'type'     => 'TIMESTAMP',
                'unsigned' => false,
                'null'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unsigned'   => false,
                'null'       => false,
            ],
            'remember_token' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unsigned'   => false,
                'null'       => true,
            ],
            'created_at' => [
                'type'     => 'TIMESTAMP',
                'unsigned' => false,
                'null'     => true,
            ],
            'updated_at' => [
                'type'     => 'TIMESTAMP',
                'unsigned' => false,
                'null'     => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        // Create `users` Table
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        // Drop `users` Table
        $this->forge->dropTable('users', true);
    }
}
