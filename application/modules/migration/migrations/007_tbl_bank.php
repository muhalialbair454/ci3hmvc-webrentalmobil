<?php

class Migration_Tbl_bank extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_bank' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'no_rek' => array(
                'type' => 'VARCHAR',
                'constraint' => "50",
            ),
            'nama_bank' => array(
                'type' => 'VARCHAR',
                'constraint' => "50",
            ),
        ));
        $this->dbforge->add_key('id_bank');
        $this->dbforge->create_table('tbl_bank');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_bank');
    }
}
