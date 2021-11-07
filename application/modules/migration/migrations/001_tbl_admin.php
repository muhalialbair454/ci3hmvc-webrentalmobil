<?php

class Migration_Tbl_admin extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_admin' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nama_admin' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('id_admin');
        $this->dbforge->create_table('tbl_admin');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_admin');
    }
}
