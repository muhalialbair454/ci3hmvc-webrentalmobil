<?php

class Templates extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function exampleTemplates($data = NULL)
    {
        $this->load->view("v_exampletemplates", $data);
    }

    public function templatesAdmin($data = NULL)
    {
        $this->load->view("v_templatesadmin", $data);
    }

    public function templatesCustomer($data = NULL)
    {
        $this->load->view("v_templatescustomer", $data);
    }

    public function templatesLogin($data = NULL)
    {
        $this->load->view("v_templateslogin", $data);
    }

    public function templatesRegister($data = NULL)
    {
        $this->load->view("v_templatesregister", $data);
    }
}
