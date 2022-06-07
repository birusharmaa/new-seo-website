<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addadress extends Migration
{
    protected $table = "seo_customers_address";
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'address' => [
                'type' => 'text',
                'null' => true
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
