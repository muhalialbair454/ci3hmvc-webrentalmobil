<?php

class MListdatatype extends CI_Model
{
    public function getDataListDataType()
    {
        $this->db->select("*");
        $this->db->from("tbl_type");
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataListDataType($addDataListDataType = array())
    {
        if ($this->db->insert("tbl_type", $addDataListDataType)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataType($idType)
    {
        $this->db->select("*");
        $this->db->from("tbl_type");
        $this->db->where("id_type", $idType);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataListDataType($idType, $updateDataListDataType = array())
    {
        $this->db->where("id_type", $idType);
        return $this->db->update("tbl_type", $updateDataListDataType);
    }

    public function deleteDataListDataType($idType)
    {
        $this->db->where("id_type", $idType);
        return $this->db->delete("tbl_type");
    }
}
