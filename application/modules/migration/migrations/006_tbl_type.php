<?php

class Migration_Tbl_type extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_type' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'kode_type' => array(
                'type' => 'VARCHAR',
                'constraint' => "50",
            ),
            'nama_type' => array(
                'type' => 'VARCHAR',
                'constraint' => "50",
            ),
        ));
        $this->dbforge->add_key('id_type');
        $this->dbforge->create_table('tbl_type');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_type');
    }
}
