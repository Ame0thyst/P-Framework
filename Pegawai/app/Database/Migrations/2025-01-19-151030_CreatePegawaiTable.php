<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelPegawai extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pegawai' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'jabatan_id' => [
                'type'       => 'INT',
                'constraint' =>  11,
                'unsigned'       => true,
            ],
            'alamat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
        ]);
        $this->db->disableForeignKeyChecks();
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('jabatan_id', 'jabatan', 'id', 'CASCADE', 'RESTRICT');
        $this->forge->createTable('pegawai');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('pegawai');
    }
}
