<?php

class Auth extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MAuth");
    }

    public function login()
    {
        $data["title"] = "Login";
        $data["mainContent"] = "auth/v_login";

        $this->templates->templatesLogin($data);
    }

    public function doLogin()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Password", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->login();
        } else {
            $username = $this->input->post("txtusername");
            $password = $this->input->post("ppassword");

            $checkLogin = $this->MAuth->checkLogin($username, $password);
            // var_dump($checkLogin);
            // die;

            if ($checkLogin === FALSE) {
                $this->session->set_flashdata("error", "Username atau password salah!");
                redirect("login");
            } else {
                $this->session->set_userdata("username", $checkLogin->username);
                $this->session->set_userdata("role_id", $checkLogin->role_id);
                $this->session->set_userdata("id_customer", $checkLogin->id_customer);
                $this->session->set_userdata("nama", $checkLogin->nama);

                switch ($checkLogin->role_id) {
                    case 1:
                        redirect("admin/dashboard");
                        break;
                    case 2:
                        redirect("customer/dashboard");
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("customer/dashboard");
    }
}
