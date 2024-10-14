<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbKat1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kat1'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kat1'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id_kat1', TRUE);

		// Membuat tabel news
		$this->forge->createTable('tb_kat1', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tb_kat1');
    }
}
