<?php

class ListDataCustomer extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatacustomer");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataCustomer()
    {
        $data["title"] = "List Data Customer";
        $data["mainContent"] = "listdatacustomer/v_listdatacustomer";

        $data["getDataListDataCustomer"] = $this->MListdatacustomer->getDataListDataCustomer();

        $this->templates->templatesAdmin($data);
    }

    public function addListDataCustomer()
    {
        $data["title"] = "Tambah List Data Customer";
        $data["mainContent"] = "listdatacustomer/v_addlistdatacustomer";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataCustomer()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("txtnama", "Nama", "required");
        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Password", "required");
        $this->form_validation->set_rules("txtalamat", "Alamat", "required");
        $this->form_validation->set_rules("ddgender", "Gender", "required");
        $this->form_validation->set_rules("txtnotelepon", "No. Telepon", "required");
        $this->form_validation->set_rules("txtnoktp", "No. KTP", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataCustomer();
        } else {
            $nama  = $this->input->post("txtnama");
            $username      = $this->input->post("txtusername");
            $password     = md5($this->input->post("ppassword"));
            $alamat      = $this->input->post("txtalamat");
            $gender      = $this->input->post("ddgender");
            $noTelp     = $this->input->post("txtnotelepon");
            $noKtp     = $this->input->post("txtnoktp");
            $roleid     = "1";

            $addDataListDataCustomer = array(
                "nama" => $nama,
                "username" => $username,
                "password" => $password,
                "alamat" => $alamat,
                "gender" => $gender,
                "no_telepon" => $noTelp,
                "no_ktp" => $noKtp,
                "role_id" => $roleid,

            );

            if ($this->MListdatacustomer->insertDataListDataCustomer($addDataListDataCustomer)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!!!");
            }
            redirect("admin/listdatacustomer");
        }
    }

    public function editListDataCustomer($idCustomer)
    {
        $data["title"] = "Edit List Data Customer";
        $data["mainContent"] = "listdatacustomer/v_editlistdatacustomer";

        $data["getDataCustomer"] = $this->MListdatacustomer->getDataCustomer($idCustomer);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListDataCustomer()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $idCustomer = $this->input->post("hidcustomer");
        $this->form_validation->set_rules("txtnama", "Nama", "required");
        $this->form_validation->set_rules("txtusername", "Username", "required");
        $this->form_validation->set_rules("ppassword", "Password", "required");
        $this->form_validation->set_rules("txtalamat", "Alamat", "required");
        $this->form_validation->set_rules("ddgender", "Gender", "required");
        $this->form_validation->set_rules("txtnotelepon", "No. Telepon", "required");
        $this->form_validation->set_rules("txtnoktp", "No. KTP", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->editListDataCustomer($idCustomer);
        } else {
            $nama  = $this->input->post("txtnama");
            $username      = $this->input->post("txtusername");
            $password     = md5($this->input->post("ppassword"));
            $alamat      = $this->input->post("txtalamat");
            $gender      = $this->input->post("ddgender");
            $noTelp     = $this->input->post("txtnotelepon");
            $noKtp     = $this->input->post("txtnoktp");
            $roleid     = "1";

            $addDataListDataCustomer = array(
                "nama" => $nama,
                "username" => $username,
                "password" => $password,
                "alamat" => $alamat,
                "gender" => $gender,
                "no_telepon" => $noTelp,
                "no_ktp" => $noKtp,
                "role_id" => $roleid,

            );

            if ($this->MListdatacustomer->updateDataListDataCustomer($idCustomer, $addDataListDataCustomer)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!!!");
            }
            redirect("admin/listdatacustomer");
        }
    }

    public function deleteListDataCustomer($idCustomer)
    {
        if (!empty($idCustomer)) {
            if ($this->MListdatacustomer->deleteListDataCustomer($idCustomer)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!!!");
            } else {
                $this->session->set_flashdata("success", "Data gagal dihapus!!!");
            }
            redirect("admin/listdatacustomer");
        }
    }
}
