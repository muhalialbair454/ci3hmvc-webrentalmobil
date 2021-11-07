<?php

class Mlistdatabank extends CI_Model
{
    public function getDataListDataBank()
    {
        $this->db->select("*");
        $this->db->from("tbl_bank");
        $query = $this->db->get();

        return $query->result();
    }
    public function insertDataListDataBank($addDataBank)
    {
        if ($this->db->insert("tbl_bank", $addDataBank)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataBank($idBank)
    {
        $this->db->select("*");
        $this->db->from("tbl_bank");
        $this->db->where("id_bank", $idBank);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDatabank($idBank, $editDataBank = array())
    {
        $this->db->where("id_bank", $idBank);
        return $this->db->update("tbl_bank", $editDataBank);
    }

    public function deleteDatabank($idBank)
    {
        $this->db->where("id_bank", $idBank);
        return $this->db->delete("tbl_bank");
    }
}
