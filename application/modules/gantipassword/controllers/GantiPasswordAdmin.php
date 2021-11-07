<?php

class GantiPasswordAdmin extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MGantipasswordadmin");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function gantiPassword()
    {
        $data["mainContent"] = "Gantipassword/v_gantipasswordadmin";
        $data["title"] = "Ganti Password";

        $this->templates->templatesLogin($data);
    }

    public function updateGantiPassword()
    {
        // $data["getData"] = $this->input->post();
        // print_r($data["getData"]);
        // die;

        $this->form_validation->set_rules("ppasswordbaru1", "Password Baru", "required");
        $this->form_validation->set_rules("ppasswordbaru2", "Ulangi Password Baru", "required|matches[ppasswordbaru1]");

        if ($this->form_validation->run() === FALSE) {
            $this->gantiPassword();
        } else {
            $passwordBaru1 = md5($this->input->post("ppasswordbaru1"));
            $passwordBaru2 = md5($this->input->post("ppasswordbaru2"));
            $idCustomer = $this->session->userdata("id_customer");

            $dataGantiPassword = array(
                "password" => $passwordBaru1,
            );

            if ($this->MGantipasswordcustomer->updateGantiPassword($idCustomer, $dataGantiPassword)) {
                $this->session->set_flashdata("success", "Password berhasil diubah !");
            } else {
                $this->session->set_flashdata("error", "Password gagal diubah !");
            }
            redirect("");
        }
    }
}
