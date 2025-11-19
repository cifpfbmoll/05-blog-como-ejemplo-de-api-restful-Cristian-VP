<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => [
                'type'           => 'INTEGER',
                'auto_increment' => true,
            ],
            'customer_name'    => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'email'            => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'phone'            => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'reservation_date' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'reservation_time' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'people'           => [
                'type'       => 'INTEGER',
                'null'       => false,
            ],
            'table_number'     => [
                'type'       => 'INTEGER',
                'null'       => true,
            ],
            'status'           => [
                'type'       => 'TEXT',
                'default'    => 'pending',
                'null'       => false,
            ],
            'created_at'       => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at'       => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'deleted_at'       => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('reservations');
    }

    public function down()
    {
        $this->forge->dropTable('reservations');
    }
}