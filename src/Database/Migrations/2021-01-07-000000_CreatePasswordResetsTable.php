<?php

namespace Conquer\Auth\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unsigned'   => false,
                'null'       => false,
                'unique'     => true,
            ],
            'token' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'unsigned'   => false,
                'null'       => false,
            ],
            'created_at' => [
                'type'     => 'TIMESTAMP',
                'unsigned' => false,
                'null'     => true,
            ],
        ]);

        // Create `password_resets` Table
        $this->forge->createTable('password_resets', true);
    }

    public function down()
    {
        // Drop `password_resets` Table
        $this->forge->dropTable('password_resets', true);
    }
}
