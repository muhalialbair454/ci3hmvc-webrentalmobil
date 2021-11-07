<?php

class Migration_Tbl_customer extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_customer' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'nama' => array(
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
            'alamat' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'gender' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'no_telepon' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'no_ktp' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'role_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('id_customer');
        $this->dbforge->create_table('tbl_customer');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_customer');
    }
}
