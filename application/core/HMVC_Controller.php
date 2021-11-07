<?php

/*Parent Controller for our moduler bases controllers */

class HMVC_Controller extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array("form_validation", "session"));
        $this->load->helper(array("url", "form"));
        $this->load->module(array("templates"));
    }
}
