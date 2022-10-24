<?php

namespace Conquer\Auth\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Create `users` Table
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        // Drop `users` Table
        $this->forge->dropTable('users', true);
    }
}
