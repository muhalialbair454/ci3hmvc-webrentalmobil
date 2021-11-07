<?php

class Laporan extends HMVC_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MLaporan");
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function laporan()
    {
        $data["title"] = "Filter Laporan Transaksi";
        $data["mainContent"] = "laporan/v_laporan";

        $this->templates->templatesAdmin($data);
    }

    public function findLaporan()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;
        $data["title"] = "Filter Laporan Transaksi";
        $data["mainContent"] = "laporan/v_tampilkanlaporan";

        $this->form_validation->set_rules("ddaritanggal", "Dari Tanggal", "required");
        $this->form_validation->set_rules("dsampaitanggal", "Sampai Tanggal", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->laporan();
        } else {
            $dariTanggal = $this->input->post("ddaritanggal");
            $sampaiTanggal = $this->input->post("dsampaitanggal");
            // var_dump($dariTanggal . $sampaiTanggal);
            // die;

            if ($data["getDataLaporan"] = $this->MLaporan->getDataLaporan($dariTanggal, $sampaiTanggal)) {
                $this->templates->templatesAdmin($data);
            } else {
                $this->laporan();
            }
        }
    }

    public function printlaporan($dariTanggal, $sampaiTanggal)
    {
        // var_dump($dariTanggal);
        // die;
        $data["title"] = "Print Laporan Transaksi";

        $dariTanggal = $this->uri->segment("4");
        $sampaiTanggal = $this->uri->segment("5");
        // var_dump($data["dariTanggal"]);
        // die;

        $data["getDataLaporan"] = $this->MLaporan->getDataLaporan($dariTanggal, $sampaiTanggal);
        $this->load->view("v_printlaporan", $data);
    }
}
