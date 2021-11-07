<?php

class MTransaksiadmin extends CI_Model
{
    public function getDataTransaksi()
    {
        $query = $this->db->query("  SELECT * FROM
                    tbl_transaksi tr, tbl_mobil mb, tbl_customer cs
                    WHERE tr.id_mobil = mb.id_mobil AND tr.id_customer = cs.id_customer");

        return $query->result();
    }

    public function getDataPembayaran($idRental)
    {
        $this->db->select("*");
        $this->db->from("tbl_transaksi");
        $this->db->where("id_rental", $idRental);
        $query = $this->db->get();

        return $query->result();
    }

    public function updateBuktiPembayaran($idRental, $dataCekPembayaran = array())
    {
        $this->db->where("id_rental", $idRental);
        return $this->db->update("tbl_transaksi", $dataCekPembayaran);
    }

    public function downloadBuktiPembayaran($idRental)
    {
        $query = $this->db->get_where("tbl_transaksi", array(
            "id_rental" => $idRental
        ));
        return $query->row_array();
    }

    public function insertDataTransaksi($idRental, $dataTransaksi = array())
    {
        $this->db->where("id_rental", $idRental);
        return $this->db->update("tbl_transaksi", $dataTransaksi);
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
