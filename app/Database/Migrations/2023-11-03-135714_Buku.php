<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
{
  $this->forge->addField([
      'id'           => [
           'type'           => 'INT',
           'constraint'     => 11,
           'unsigned'       => TRUE,
           'auto_increment' => TRUE
        ],
        'namabuku'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'jenisbuku'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'tahunterbit'       => [
            'type'           => 'YEAR',
            'constraint'     => 4,
        ],
        'penulis'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'penerbit'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '50',
        ],
        'isbn'       => [
            'type'           => 'BIGINT',
            'constraint'     => '30',
        ],
  ]);
  $this->forge->addKey('id', TRUE);
  $this->forge->createTable('buku');
}

    public function down()
    {
        //
    }
}
