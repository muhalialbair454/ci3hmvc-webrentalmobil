<?php

class Register extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MRegister");
    }

    public function register()
    {
        $data["title"] = "Register";
        $data["mainContent"] = "register/v_register";

        $this->templates->templatesRegister($data);
    }

    public function doRegister()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("txtnama", "Nama", "required");
        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("txtalamat", "Alamat", "required");
        $this->form_validation->set_rules("ddgender", "Gender", "required");
        $this->form_validation->set_rules("txtnotlp", "No. Telepon", "required");
        $this->form_validation->set_rules("txtnoktp", "No. KTP", "required");
        $this->form_validation->set_rules("ppassword", "password", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->register();
        } else {
            $nama = $this->input->post("txtnama");
            $username = $this->input->post("txtusername");
            $alamat = $this->input->post("txtalamat");
            $gender = $this->input->post("ddgender");
            $noTelepon = $this->input->post("txtnotlp");
            $noKtp = $this->input->post("txtnoktp");
            $password = md5($this->input->post("ppassword"));
            $roleid = "2";

            $addDataRegister = array(
                "nama" => $nama,
                "username" => $username,
                "alamat" => $alamat,
                "gender" => $gender,
                "no_telepon" => $noTelepon,
                "no_ktp" => $noKtp,
                "password" => $password,
                "role_id" => $roleid
            );

            if ($this->MRegister->insertDataRegister($addDataRegister)) {
                $this->session->set_flashdata("success", "Berhasil register, silahkan login!!!");
            } else {
                $this->session->set_flashdata("error", "gagal register, silahkan register kembali!!!");
            }
            redirect("/");
        }
    }
}
