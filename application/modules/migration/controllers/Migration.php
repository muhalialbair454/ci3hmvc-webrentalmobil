<?php

class Migration extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("migration");
    }

    public function runMigration()
    {
        if (!$this->migration->current()) {
            $this->migration->error_string();
        } else {
            $this->load->view("v_runmigration");
        }
    }
}
