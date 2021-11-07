<?php

class TransaksiAdmin extends HMVC_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MTransaksiadmin");
        $this->load->helper("download");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function transaksi()
    {
        $data["title"] = "Data Transaksi";
        $data["mainContent"] = "transaksi/v_transaksiadmin";

        $data["getDataTransaksi"] = $this->MTransaksiadmin->getDataTransaksi();

        $this->templates->templatesAdmin($data);
    }

    public function cekPembayaran($idRental)
    {
        $data["title"] = "Cek Pembayaran";
        $data["mainContent"] = "transaksi/v_cekpembayaran";

        $data["getDataPembayaran"] = $this->MTransaksiadmin->getDataPembayaran($idRental);

        $this->templates->templatesAdmin($data);
    }

    public function updateCekPembayaran()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);

        $idRental = $this->input->post("hidrental");
        $this->form_validation->set_rules("cbuktipembayaran", "Konfirmasi Pembayaran", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->cekPembayaran($idRental);
        } else {
            $buktiPemabayaran = $this->input->post("cbuktipembayaran");

            $dataCekPembayaran = array(
                "bukti_pembayaran" => $buktiPemabayaran,
                "status_pembayaran" => "1"
            );

            if ($this->MTransaksiadmin->updateBuktiPembayaran($idRental, $dataCekPembayaran)) {
                $this->session->set_flashdata("success", "Pembayaran berhasil dikonfirmasi!!!");
            } else {
                $this->session->set_flashdata("error", "Pembayaran gagal dikonfirmasi!!!");
            }
            redirect("admin/transaksi");
        }
    }

    public function downloadBuktiPembayaran($idRental)
    {
        $fileBuktiPembayaran = $this->MTransaksiadmin->downloadBuktiPembayaran($idRental);
        $file = "assets/images/" . $fileBuktiPembayaran["bukti_pembayaran"];
        force_download($file, NULL);
    }

    public function transaksiSelesai($idRental)
    {
        $data["title"] =  "Transaksi Selesai";
        $data["mainContent"] = "transaksi/v_transaksiselesai";

        $data["getDataTransaksi"] = $this->MTransaksiadmin->getDataPembayaran($idRental);

        $this->templates->templatesAdmin($data);
    }

    public function updateTransaksiSelesai()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;

        $idRental = $this->input->post("hidrental");
        $this->form_validation->set_rules("dtanggalpengembalian", "Tanggal Pengembalian", "required");
        $this->form_validation->set_rules("ddstatuspengembalian", "Status Pengembalian", "required");
        $this->form_validation->set_rules("ddstatusrental", "Status Rental", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->transaksiSelesai($idRental);
        } else {
            $tanggalPengembalian = $this->input->post("dtanggalpengembalian");
            $statusPengembalian = $this->input->post("ddstatuspengembalian");
            $statusRental = $this->input->post("ddstatusrental");
            $tanggalKembali = $this->input->post("htanggalkembali");
            $denda = $this->input->post("hdenda");

            $tglPengembalian = strtotime($tanggalPengembalian); // mengubah ke detik
            $tanggalKembali = strtotime($tanggalKembali); // mengubah ke detik
            $selisihTanggal = abs($tglPengembalian - $tanggalKembali) / (60 * 60 * 24);
            // var_dump($selisihTanggal);
            // die;
            $totalDenda = $selisihTanggal * $denda;

            $dataTransaksi = array(
                "tanggal_pengembalian" => $tanggalPengembalian,
                "status_pengembalian" => $statusPengembalian,
                "status_rental" => $statusRental,
                "total_denda" => $totalDenda,
            );

            if ($this->MTransaksiadmin->insertDataTransaksi($idRental, $dataTransaksi)) {
                $this->session->set_flashdata("success", "Transaksi berhasil!!!");
            } else {
                $this->session->set_flashdata("error", "Transaksi gagal!!!");
            }
            redirect("admin/transaksi");
        }
    }

    public function transaksiBatal($idRental)
    {
        $data["getDataCancelPembayaran"] = $this->MTransaksiadmin->getDataCancelPembayaran($idRental);

        $idMobil = $data["getDataCancelPembayaran"]->id_mobil;
        $dataStatusMobil = array(
            "status" => "1"
        );
        $this->MTransaksiadmin->updateStatusMobil($idMobil, $dataStatusMobil);

        if (!empty($idRental)) {
            if ($this->MTransaksiadmin->deleteDataTransaksi($idRental)) {
                $this->session->set_flashdata("success", "Data berhasil dihapus!!!");
            } else {
                $this->session->set_flashdata("error", "Data gagal dihapus!!!");
            }
        }
        redirect("admin/transaksi");
    }
}
