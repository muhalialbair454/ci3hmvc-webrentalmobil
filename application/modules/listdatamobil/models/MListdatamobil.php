<?php

class MListdatamobil extends CI_Model
{
    public function getDataListDataMobil()
    {
        $this->db->select("*");
        $this->db->from("tbl_mobil");
        $query = $this->db->get();

        return $query->result();
    }

    public function getDataTypeMobil()
    {
        $this->db->select("*");
        $this->db->from("tbl_type");
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataListDataMobil($addDataListDataMobil = array())
    {
        if ($this->db->insert("tbl_mobil", $addDataListDataMobil)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDetailListDataMobil($idMobil)
    {
        $this->db->select("*");
        $this->db->from("tbl_mobil");
        $this->db->where("id_mobil", $idMobil);;
        $query = $this->db->get();

        return $query->result();
    }

    public function getDataMobil($idMobil)
    {
        $this->db->select("*");
        $this->db->from("tbl_mobil");
        $this->db->where("id_mobil", $idMobil);;
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataListDataMobil($idMobil, $updateDataListDataMobil = array())
    {
        $this->db->where("id_mobil", $idMobil);
        return $this->db->update("tbl_mobil", $updateDataListDataMobil);
    }

    public function deleteDataListDataMobil($idMobil)
    {
        $this->db->where("id_mobil", $idMobil);
        return $this->db->delete("tbl_mobil");
    }
}
