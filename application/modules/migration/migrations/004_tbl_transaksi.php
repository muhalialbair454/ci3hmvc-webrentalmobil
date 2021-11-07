<?php

class Migration_Tbl_transaksi extends Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id_rental' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'id_customer' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'id_mobil' => array(
                'type' => 'INT',
                'constraint' => 11,
            ),
            'tanggal_rental' => array(
                'type' => 'DATE',
            ),
            'tanggal_kembali' => array(
                'type' => 'DATE',
            ),
            'harga' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'denda' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'total_denda' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'tanggal_pengembalian' => array(
                'type' => 'DATE',
            ),
            'status_pengembalian' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'status_rental' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'bukti_pembayaran' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'status_pembayaran' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        ));
        $this->dbforge->add_key('id_rental');
        $this->dbforge->create_table('tbl_transaksi');
    }
    public function down()
    {
        $this->dbforge->drop_table('tbl_transaksi');
    }
}
