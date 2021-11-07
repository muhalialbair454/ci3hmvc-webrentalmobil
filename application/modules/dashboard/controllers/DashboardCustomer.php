<?php

class DashboardCustomer extends HMVC_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("MDashboardcustomer");
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata("error", "Anda belum login!");
            redirect("login");
        }
    }

    public function dashboard()
    {
        $data["mainContent"] = "dashboard/v_dashboardcustomer";
        $data["title"] = "Beranda";

        $data["getDataListDataMobil"] = $this->MDashboardcustomer->getDataListDataMobil();

        $this->templates->templatesCustomer($data);
    }

    public function detailStatusMobil($idMobil)
    {
        $data["mainContent"] = "dashboard/v_detailmobil";

        $data["getDataDetailMobil"] = $this->MDashboardcustomer->getDataDetailMobil($idMobil);
        // var_dump($data["getDataDetailMobil"]);
        // die;

        $this->templates->templatesCustomer($data);
    }

    public function formRentalMobil($idMobil)
    {
        $data["title"] = "Form Rental Mobil";
        $data["mainContent"] = "dashboard/v_formrentalmobil";

        $data["getDataMobil"] = $this->MDashboardcustomer->getDataDetailMobil($idMobil);

        $this->templates->templatesCustomer($data);
    }

    public function addFormRentalMobil()
    {
        // $data["getData"] = $this->input->post();
        // var_dump($data["getData"]);
        // die;
        $idCustomer = $this->session->userdata("id_customer");
        $idMobil = $this->input->post("hidmobil");
        $this->form_validation->set_rules("dtanggalrental", "Tanggal Rental", "required");
        $this->form_validation->set_rules("dtanggalkembali", "Tanggal Kembali", "required");

        if ($this->form_validation->run() === FALSE) {
            $this->formRentalMobil($idMobil);
        } else {
            $tanggalRental = $this->input->post("dtanggalrental");
            $tanggalKembali = $this->input->post("dtanggalkembali");
            $denda = $this->input->post("txtdenda");
            // var_dump($denda);
            $harga = $this->input->post("txtHarga");

            $addDataRentalMobil = array(
                "id_customer" => $idCustomer,
                "id_mobil" => $idMobil,
                "tanggal_rental" => $tanggalRental,
                "tanggal_kembali" => $tanggalKembali,
                "denda" => $denda,
                "harga" => $harga,
                "tanggal_pengembalian" => "-",
                "status_rental" => "0",
                "status_pengembalian" => "0",
                "status_pembayaran" => "0",
                "total_denda" => "0"
            );

            $status = array(
                "status" => "0"
            );
            $this->MDashboardcustomer->updateDataStatusMobil($idMobil, $status);

            if ($this->MDashboardcustomer->insertDataRentalMobil($idMobil, $addDataRentalMobil)) {
                $this->session->set_flashdata("success", "Transaksi berhasil, silahkan checkout!!!");
            } else {
                $this->session->set_flashdata("error", "Transaksi gagal, silahkan coba lagi!!!");
            }
            redirect("customer/dashboard");
        }
    }
}
