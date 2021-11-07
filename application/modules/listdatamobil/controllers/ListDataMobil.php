<?php

class ListDataMobil extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MListdatamobil");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function listDataMobil()
    {
        $data["title"] = "List Data Mobil";
        $data["mainContent"] = "listdatamobil/v_listdatamobil";

        $data["getDataListDataMobil"] = $this->MListdatamobil->getDataListDataMobil();

        $this->templates->templatesAdmin($data);
    }

    public function addListDataMobil()
    {
        $data["title"] = "Tambah List Data Mobil";
        $data["mainContent"] = "listdatamobil/v_addlistdatamobil";

        $data["getDataTypeMobil"] = $this->MListdatamobil->getDataTypeMobil();
        // var_dump($data["getDataTypeMobil"]);
        // die;

        $this->templates->templatesAdmin($data);
    }

    public function updateAddListDataMobil()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $this->form_validation->set_rules("ddtypemobil", "Type Mobil", "required");
        $this->form_validation->set_rules("txtmerek", "Merek", "required");
        $this->form_validation->set_rules("txtnoplat", "No. Plat", "required");
        $this->form_validation->set_rules("txtwarna", "Warna", "required");
        $this->form_validation->set_rules("txttahun", "Tahun", "required");
        $this->form_validation->set_rules("ddstatus", "Status", "required");
        $this->form_validation->set_rules("nhargasewa", "Harga Sewa/Hari", "required");
        $this->form_validation->set_rules("ndenda", "Denda", "required");
        $this->form_validation->set_rules("ddac", "AC", "required");
        $this->form_validation->set_rules("ddsupir", "Supir", "required");
        $this->form_validation->set_rules("ddmp3player", "Status", "required");
        $this->form_validation->set_rules("ddcentrallock", "Status", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataMobil();
        } else {
            $typeMobil  = $this->input->post("ddtypemobil");
            $merek      = $this->input->post("txtmerek");
            $noPlat     = $this->input->post("txtnoplat");
            $warna      = $this->input->post("txtwarna");
            $tahun      = $this->input->post("txttahun");
            $status     = $this->input->post("ddstatus");
            $harga     = $this->input->post("nhargasewa");
            $denda     = $this->input->post("ndenda");
            $ac     = $this->input->post("ddac");
            $supir     = $this->input->post("ddsupir");
            $mp3Player     = $this->input->post("ddmp3player");
            $centralLock     = $this->input->post("ddcentrallock");
            $gambar1     = $_FILES["fgambar1"]["name"];
            if ($gambar1 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar1")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar1 = $this->upload->data("file_name");
                }
            }

            $gambar2     = $_FILES["fgambar2"]["name"];
            if ($gambar2 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar2")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar2 = $this->upload->data("file_name");
                }
            }

            $gambar3     = $_FILES["fgambar3"]["name"];
            if ($gambar3 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar3")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar3 = $this->upload->data("file_name");
                }
            }

            $addDataListDataMobil = array(
                "kode_type" => $typeMobil,
                "merek"     => $merek,
                "no_plat"   => $noPlat,
                "warna"     => $warna,
                "tahun"     => $tahun,
                "status"    => $status,
                "harga"    => $harga,
                "denda"    => $denda,
                "ac"    => $ac,
                "supir"    => $supir,
                "mp3_player"    => $mp3Player,
                "central_lock"    => $centralLock,
                "gambar1"    => $gambar1,
                "gambar2"    => $gambar2,
                "gambar3"    => $gambar3
            );

            if ($this->MListdatamobil->insertDataListDataMobil($addDataListDataMobil)) {
                $this->session->set_flashdata("success", "Data berhasil ditambahkan!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal ditambahkan!!!");
            }
            redirect("admin/listdatamobil");
        }
    }

    public function detailListDataMobil($idMobil)
    {
        $data["title"] = "Detail List Data Mobil";
        $data["mainContent"] = "listdatamobil/v_detaillistdatamobil";

        $data["getDetailListDataMobil"] = $this->MListdatamobil->getDetailListDataMobil($idMobil);
        // var_dump($data["getDetailListDataMobil"]);
        // die;

        $this->templates->templatesAdmin($data);
    }

    public function editListDataMobil($idMobil)
    {
        $data["title"] = "Edit List Data Mobils";
        $data["mainContent"] = "listdatamobil/v_editlistdatamobil";

        $data["getDataMobil"]  = $this->MListdatamobil->getDataMobil($idMobil);

        $this->templates->templatesAdmin($data);
    }

    public function updateeditListDataMobil()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $idMobil = $this->input->post("hidmobil");
        $this->form_validation->set_rules("ddtypemobil", "Type Mobil", "required");
        $this->form_validation->set_rules("txtmerek", "Merek", "required");
        $this->form_validation->set_rules("txtnoplat", "No. Plat", "required");
        $this->form_validation->set_rules("txtwarna", "Warna", "required");
        $this->form_validation->set_rules("txttahun", "Tahun", "required");
        $this->form_validation->set_rules("ddstatus", "Status", "required");
        $this->form_validation->set_rules("nhargasewa", "Harga Sewa/Hari", "required");
        $this->form_validation->set_rules("ndenda", "Denda", "required");
        $this->form_validation->set_rules("ddac", "AC", "required");
        $this->form_validation->set_rules("ddsupir", "Supir", "required");
        $this->form_validation->set_rules("ddmp3player", "Status", "required");
        $this->form_validation->set_rules("ddcentrallock", "Status", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->addListDataMobil();
        } else {
            $typeMobil  = $this->input->post("ddtypemobil");
            $merek      = $this->input->post("txtmerek");
            $noPlat     = $this->input->post("txtnoplat");
            $warna      = $this->input->post("txtwarna");
            $tahun      = $this->input->post("txttahun");
            $status     = $this->input->post("ddstatus");
            $harga     = $this->input->post("nhargasewa");
            $denda     = $this->input->post("ndenda");
            $ac     = $this->input->post("ddac");
            $supir     = $this->input->post("ddsupir");
            $mp3Player     = $this->input->post("ddmp3player");
            $centralLock     = $this->input->post("ddcentrallock");
            $gambar1     = $_FILES["fgambar1"]["name"];
            if ($gambar1 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar1")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar1 = $this->upload->data("file_name");
                }
            }

            $gambar2     = $_FILES["fgambar2"]["name"];
            if ($gambar2 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar2")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar2 = $this->upload->data("file_name");
                }
            }

            $gambar3     = $_FILES["fgambar3"]["name"];
            if ($gambar3 = "") {
            } else {
                $config["upload_path"]  = "./assets/images";
                $config["allowed_types"]  = "jpg|jpeg|png|tiff";

                $this->load->library("upload", $config);
                if (!$this->upload->do_upload("fgambar3")) {
                    echo "Gambar Mobil Gagal Diupload!!!";
                } else {
                    $gambar3 = $this->upload->data("file_name");
                }
            }

            $updateDataListDataMobil = array(
                "kode_type" => $typeMobil,
                "merek"     => $merek,
                "no_plat"   => $noPlat,
                "warna"     => $warna,
                "tahun"     => $tahun,
                "status"    => $status,
                "harga"    => $harga,
                "denda"    => $denda,
                "ac"    => $ac,
                "supir"    => $supir,
                "mp3_player"    => $mp3Player,
                "central_lock"    => $centralLock,
                "gambar1"    => $gambar1,
                "gambar2"    => $gambar2,
                "gambar3"    => $gambar3
            );

            if ($this->MListdatamobil->updateDataListDataMobil($idMobil, $updateDataListDataMobil)) {
                $this->session->set_flashdata("success", "Data berhasil diubah!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal diubah!!!");
            }
            redirect("admin/listdatamobil");
        }
    }

    public function deleteListdatamobil($idMobil)
    {
        if (!empty($idMobil)) {
            if ($this->MListdatamobil->deleteDataListDataMobil($idMobil)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!!!");
            }
        }
        redirect("admin/listdatamobil");
    }
}
