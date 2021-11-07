<?php

class ListDataType extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatatype");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataType()
    {
        $data["title"] = "List Data Type";
        $data["mainContent"] = "listdatatype/v_listdatatype";

        $data["getDataListDataType"] = $this->MListdatatype->getDataListDataType();

        $this->templates->templatesAdmin($data);
    }

    public function addListDataType()
    {
        $data["title"] = "Tambah List Data Type";
        $data["mainContent"] = "listdatatype/v_addlistdatatype";

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataType()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("txtkodetype", "Kode Type", "required");
        $this->form_validation->set_rules("txtnamatype", "Nama Type", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataType();
        } else {
            $kodeType = $this->input->post("txtkodetype");
            $namaType = $this->input->post("txtnamatype");

            $addDataListDataType = array(
                "kode_type" => $kodeType,
                "nama_type" => $namaType,
            );

            if ($this->MListdatatype->insertDataListDataType($addDataListDataType)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!!!");
            }
            redirect("admin/listdatatype");
        }
    }

    public function editListDataType($idType)
    {
        $data["title"] = "Edit List Data Type";
        $data["mainContent"] = "listdatatype/v_editlistdatatype";

        $data["getDataType"] = $this->MListdatatype->getDataType($idType);

        $this->templates->templatesAdmin($data);
    }

    public function updateEditListDataType()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;


        $idType = $this->input->post("hidtype");
        $this->form_validation->set_rules("txtkodetype", "Kode Type", "required");
        $this->form_validation->set_rules("txtnamatype", "Nama Type", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->editListDataType($idType);
        } else {
            $kodeType = $this->input->post("txtkodetype");
            $namaType = $this->input->post("txtnamatype");

            $updateDataListDataType = array(
                "kode_type" => $kodeType,
                "nama_type" => $namaType,
            );

            if ($this->MListdatatype->updateDataListDataType($idType, $updateDataListDataType)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!!!");
            }
            redirect("admin/listdatatype");
        }
    }

    public function deleteListDataType($idType)
    {
        if (!empty($idType)) {
            if ($this->MListdatatype->deleteDataListDataType($idType)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!!!");
            }
        }
        redirect("admin/listdatatype");
    }
}
