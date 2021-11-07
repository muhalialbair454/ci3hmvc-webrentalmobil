<?php

class Migration_Tbl_mobil extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_mobil' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'kode_type' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'merek' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'no_plat' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'warna' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'tahun' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'status' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'harga' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'denda' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'ac' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'supir' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'mp3_player' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'central_lock' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'gambar1' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gambar2' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
            'gambar3' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
        ));
        $this->dbforge->add_key('id_mobil');
        $this->dbforge->create_table('tbl_mobil');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_mobil');
    }
}
