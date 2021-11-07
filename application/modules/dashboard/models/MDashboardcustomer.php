<?php


class MDashboardcustomer extends CI_Model
{
    public function getDataListDataMobil()
    {
        $this->db->select("*");
        $this->db->from("tbl_mobil");
        $query = $this->db->get();

        return $query->result();
    }

    public function getDataDetailMobil($idMobil)
    {
        $this->db->select("*");
        $this->db->from("tbl_mobil");
        $this->db->where("id_mobil", $idMobil);
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataRentalMobil($idMobil, $addDataRentalMobil = array())
    {
        $this->db->where("id_mobil", $idMobil);
        return $this->db->insert("tbl_transaksi", $addDataRentalMobil);
    }

    public function updateDataStatusMobil($idMobil, $status = array())
    {
        $this->db->where("id_mobil", $idMobil);
        return $this->db->update("tbl_mobil", $status);
    }
}
