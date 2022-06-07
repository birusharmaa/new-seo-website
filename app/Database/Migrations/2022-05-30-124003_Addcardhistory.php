<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addcardhistory extends Migration
{
    protected $table = "seo_cart_history";
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'customer_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => false,
            ],
            'status' => [
                'type' => 'enum("Active", "Deactive")',
                'null' => 'Active',
            ],
            'product_id' => [
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
