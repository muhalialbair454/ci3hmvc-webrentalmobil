<?php

class Templates extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function exampleTemplates($data = NULL)
    {
        $this->load->view('v_exampletemplates', $data);
    }
}
