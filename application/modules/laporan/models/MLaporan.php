<?php

class MLaporan extends CI_Model
{
    public function getDataLaporan($dariTanggal, $sampaiTanggal)
    {
        $query = $this->db->query(" SELECT * FROM tbl_transaksi, tbl_mobil, tbl_customer
                                    WHERE tbl_transaksi.id_mobil = tbl_mobil.id_mobil AND 
                                    tbl_transaksi.id_customer = tbl_customer.id_customer 
                                    AND date(tanggal_rental) >= '$dariTanggal' AND date(tanggal_rental) <= '$sampaiTanggal'")->result();

        return $query;
    }
}
