<?php

class MRegister extends CI_Model
{
    public function insertDataRegister($addDataRegister)
    {
        if ($this->db->insert("tbl_customer", $addDataRegister)) {
            return true;
        } else {
            return false;
        }
    }
}
