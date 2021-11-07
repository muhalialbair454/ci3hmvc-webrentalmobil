<?php

class MAuth extends CI_Model
{
    public function checkLogin($username, $password)
    {
        $username = set_value("txtusername");
        $password = set_value("ppassword");

        $query = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get("tbl_customer");

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }
}
