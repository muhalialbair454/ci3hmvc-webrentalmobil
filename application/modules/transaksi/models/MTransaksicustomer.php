<?php

class MTransaksicustomer extends CI_Model
{
    public function getDataTransaksi($customer)
    {
        $query = $this->db->query("  SELECT * FROM
                    tbl_transaksi tr, tbl_mobil mb, tbl_customer cs
                    WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND cs.id_customer='$customer'
                    ORDER BY id_rental DESC");

        return $query->result();
    }

    public function getDataTransaksiRental($idRental)
    {
        $query = $this->db->query("  SELECT * FROM
        tbl_transaksi tr, tbl_mobil mb, tbl_customer cs
        WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND tr.id_rental='$idRental'
        ORDER BY id_rental DESC");

        return $query->result();
    }

    public function getDataListDataBank()
    {
        $this->db->select("*");
        $this->db->from("tbl_bank");
        $query = $this->db->get();

        return $query->result();
    }

    public function updateBuktiPembayaran($idRental, $updateBuktiPembayaran = array())
    {
        $this->db->where("id_rental", $idRental);
        return $this->db->update("tbl_transaksi", $updateBuktiPembayaran);
    }

    public function getDataPembayaran($idRental)
    {
        $query = $this->db->query("  SELECT * FROM
        tbl_transaksi tr, tbl_mobil mb, tbl_customer cs
        WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer AND tr.id_rental='$idRental'");

        return $query->result();
    }

    public function getDataCancelPembayaran($idRental)
    {
        $this->db->select("*");
        $this->db->from("tbl_transaksi");
        $this->db->where("id_rental", $idRental);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateStatusMobil($idRental, $dataStatusMobil = array())
    {
        $this->db->where("id_mobil", $idRental);
        return $this->db->update("tbl_mobil", $dataStatusMobil);
    }

    public function deleteDataTransaksi($idRental)
    {
        $this->db->where("id_rental", $idRental);
        return $this->db->delete("tbl_transaksi");
    }
}
