<?php

class DashboardAdmin extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function dashboard()
    {
        $data["title"] = "Dashboard";
        $data["mainContent"] = "dashboard/v_dashboardadmin";

        $this->templates->templatesAdmin($data);
    }
}
