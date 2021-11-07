<?php

class ListDataBank extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mlistdatabank");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listdatabank()
    {
        $data["title"] = "List Data Bank";
        $data["mainContent"] = "listdatabank/v_listdatabank";

        $data["getDataListDataBank"] = $this->Mlistdatabank->getDataListDataBank();

        $this->templates->templatesAdmin($data);
    }

    public function addListdatabank()
    {
        $data["title"] = "Tambah List Data Bank";
        $data["mainContent"] = "listdatabank/v_addlistdatabank";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataBank()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("txtnamabank", "Nama Bank", "required");
        $this->form_validation->set_rules("txtnorek", "Nomor Rekening", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListdatabank();
        } else {
            $namaBank = $this->input->post("txtnamabank");
            $noRek = $this->input->post("txtnorek");

            $addDataBank = array(
                "nama_bank" => $namaBank,
                "no_rek" => $noRek,
            );

            if ($this->Mlistdatabank->insertDataListDataBank($addDataBank)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!!!");
            }
            redirect("admin/listdatabank");
        }
    }

    public function editListDataBank($idBank)
    {
        $data["title"] = "Edit List Data Bank";
        $data["mainContent"] = "listdatabank/v_editlistdatabank";

        $data["getDataBank"] = $this->Mlistdatabank->getDataBank($idBank);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListDataBank()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $idBank = $this->input->post("hidbank");
        $this->form_validation->set_rules("txtnamabank", "Nama Bank", "required");
        $this->form_validation->set_rules("txtnorek", "Nomor Rekening", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->editListDataBank($idBank);
        } else {
            $namaBank = $this->input->post("txtnamabank");
            $noRek = $this->input->post("txtnorek");

            $editDataBank = array(
                "nama_bank" => $namaBank,
                "no_rek" => $noRek,
            );

            if ($this->Mlistdatabank->updateDatabank($idBank, $editDataBank)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!!!");
            }
            redirect("admin/listdatabank");
        }
    }

    public function deleteListDataBank($idBank)
    {
        if (!empty($idBank)) {
            if ($this->Mlistdatabank->deleteDatabank($idBank)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!!!");
            } else {
                $this->session->set_flashdata("success", "Data gagal dihapus!!!");
            }
        }
        redirect("admin/listdatabank");
    }
}
