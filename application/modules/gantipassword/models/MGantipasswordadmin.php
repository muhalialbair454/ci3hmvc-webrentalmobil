<?php

class MGantipasswordadmin extends CI_Model
{
    public function updateGantiPassword($idCustomer, $dataGantiPassword = array())
    {
        $this->db->where("id_customer", $idCustomer);
        return $this->db->update('tbl_customer', $dataGantiPassword);
    }
}
