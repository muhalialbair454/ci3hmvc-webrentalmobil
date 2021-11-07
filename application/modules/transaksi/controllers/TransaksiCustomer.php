<?php

class TransaksiCustomer extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MTransaksicustomer");
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function transaksi()
    {
        $data["title"] = "Transaksi";
        $data["mainContent"] = "transaksi/v_transaksicustomer";
        $customer = $this->session->userdata("id_customer");

        $data["getDataTransaksi"] = $this->MTransaksicustomer->getDataTransaksi($customer);

        $this->templates->templatesCustomer($data);
    }

    public function pembayaran($idRental)
    {
        $data["title"] = "Pembayaran";
        $data["mainContent"] = "transaksi/v_pembayaran";

        $data["getDataBank"] = $this->MTransaksicustomer->getDataListDataBank();
        $data["getDataTransaksiRental"] = $this->MTransaksicustomer->getDataTransaksiRental($idRental);

        $this->templates->templatesCustomer($data);
    }

    public function updatePembayaran()
    {
        $idRental = $this->input->post("hidrental");
        $uploadBuktiPembayaran     = $_FILES["fuploadbuktipembayaran"]["name"];
        if ($uploadBuktiPembayaran = "") {
        } else {
            $config["upload_path"]  = "./assets/images";
            $config["allowed_types"]  = "pdf|jpg|jpeg|png|tiff";

            $this->load->library("upload", $config);
            if (!$this->upload->do_upload("fuploadbuktipembayaran")) {
                echo "Bukti Pembayaran Gagal Diupload!!!";
            } else {
                $uploadBuktiPembayaran = $this->upload->data("file_name");
            }
        }

        $updateBuktiPembayaran = array(
            "bukti_pembayaran" => $uploadBuktiPembayaran
        );

        if ($this->MTransaksicustomer->updateBuktiPembayaran($idRental, $updateBuktiPembayaran)) {
            $this->session->set_flashdata("success", "Bukti pemabyaran anda berhasil di upload!!!");
        } else {
            $this->session->set_flashdata("error", "Bukti pemabyaran anda gagal di upload!!!");
        }
        redirect("customer/transaksi");
    }

    public function printPembayaran($idRental)
    {
        $data["title"] = "Invoice Pembayaran Anda";

        $data["getDataBank"] = $this->MTransaksicustomer->getDataListDataBank();
        $data["getDataPembayaran"] = $this->MTransaksicustomer->getDataPembayaran($idRental);

        $this->load->view("v_printpembayaran", $data);
    }

    public function cancelPembayaran($idRental)
    {
        $data["getDataCancelPembayaran"] = $this->MTransaksicustomer->getDataCancelPembayaran($idRental);

        $idMobil = $data["getDataCancelPembayaran"]->id_mobil;
        $dataStatusMobil = array(
            "status" => "1"
        );
        $this->MTransaksicustomer->updateStatusMobil($idMobil, $dataStatusMobil);

        if (!empty($idRental)) {
            if ($this->MTransaksicustomer->deleteDataTransaksi($idRental)) {
                $this->session->set_flashdata("success", "Transaksi berhasil dibatalkan!!!");
            } else {
                $this->session->set_flashdata("error", "Transaksi gagal dibatalkan!!!");
            }
        }
        redirect("customer/transaksi");
    }
}
