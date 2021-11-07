<?php

class MListdatacustomer extends CI_Model
{
    public function getDataListDataCustomer()
    {
        $this->db->select("*");
        $this->db->from("tbl_customer");
        $query = $this->db->get();

        return $query->result();
    }

    public function insertDataListDataCustomer($addDataListDataCustomer = array())
    {
        if ($this->db->insert("tbl_customer", $addDataListDataCustomer)) {
            return true;
        } else {
            return false;
        }
    }

    public function getDataCustomer($idCustomer)
    {
        $this->db->select("*");
        $this->db->from("tbl_customer");
        $this->db->where("id_customer", $idCustomer);
        $query = $this->db->get();

        return $query->row();
    }

    public function updateDataListDataCustomer($idCustomer, $addDataListDataCustomer = array())
    {
        $this->db->where("id_customer", $idCustomer);
        return $this->db->update("tbl_customer", $addDataListDataCustomer);
    }

    public function deleteListDataCustomer($idCustomer)
    {
        $this->db->where("id_customer", $idCustomer);
        return $this->db->delete("tbl_customer");
    }
}
