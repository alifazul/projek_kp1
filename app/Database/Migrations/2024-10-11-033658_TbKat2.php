<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKat2 extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kat2'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kat2'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id_kat2', TRUE);

		// Membuat tabel news
		$this->forge->createTable('tb_kat2', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tb_kat2');
    }
}
