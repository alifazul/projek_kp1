<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_user'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'level'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
            'bidang'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
            'jabatan'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
            'nip'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'tempat_lhr'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true,
			],
            'tgl_lhr'      => [
				'type'           => 'DATE',
                'null'           => true,
			],
			'alamat' => [
				'type'           => 'TEXT',
				'null'           => true,
			],
			'jenis_kelamin'      => [
				'type'           => 'ENUM',
				'constraint'     => ['Laki-Laki', 'Perempuan'],
                'null'           => true,
			],
            'foto'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

		// Membuat primary key
		$this->forge->addKey('id_user', TRUE);

		// Membuat tabel news
		$this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
