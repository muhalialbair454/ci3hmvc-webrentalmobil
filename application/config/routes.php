<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes Modules Global

// Routes Home
// $route['home'] = "home/callHome";

// Routes Migration
$route['migration'] = "migration/runMigration";

// Routes Auth
$route['login'] = "auth/Auth/doLogin";
$route['logout'] = "auth/Auth/logout";


// Routes Admin
// Routes Dashboard
$route['admin/dashboard'] = "dashboard/DashboardAdmin/dashboard";

// Routes List Data Mobil
$route['admin/listdatamobil'] = "listdatamobil/ListDataMobil/listDataMobil";
$route['admin/listdatamobil/addlistdatamobil'] = "listdatamobil/ListDataMobil/addListDataMobil";
$route['admin/listdatamobil/updateAddlistdatamobil'] = "listdatamobil/ListDataMobil/updateAddListDataMobil";
$route['admin/listdatamobil/detaillistdatamobil/(:any)'] = "listdatamobil/ListDataMobil/detailListDataMobil/$1";
$route['admin/listdatamobil/editlistdatamobil/(:any)'] = "listdatamobil/ListDataMobil/editListDataMobil/$1";
$route['admin/listdatamobil/updateeditlistdatamobil'] = "listdatamobil/ListDataMobil/updateeditListDataMobil";
$route['admin/listdatamobil/deletelistdatamobil/(:any)'] = "listdatamobil/ListDataMobil/deleteListdatamobil/$1";

// Routes List Data Type
$route['admin/listdatatype'] = "listdatatype/ListDataType/listDataType";
$route['admin/listdatatype/addlistdatatype'] = "listdatatype/ListDataType/addListDataType";
$route['admin/listdatacustomer/updateaddlistdatatype'] = "listdatatype/ListDataType/updateAddListDataType";
$route['admin/listdatacustomer/editlistdatatype/(:any)'] = "listdatatype/ListDataType/editListDataType/$1";
$route['admin/listdatacustomer/updateeditlistdatatype'] = "listdatatype/ListDataType/updateEditListDataType";
$route['admin/listdatacustomer/deletelistdatatype/(:any)'] = "listdatatype/ListDataType/deleteListDataType/$1";

// Routes List Data Customer
$route['admin/listdatacustomer'] = "listdatacustomer/ListDataCustomer/listDataCustomer";
$route['admin/listdatacustomer/addlistdatacustomer'] = "listdatacustomer/ListDataCustomer/addListDataCustomer";
$route['admin/listdatacustomer/updateaddlistdatacustomer'] = "listdatacustomer/ListDataCustomer/updateAddListDataCustomer";
$route['admin/listdatacustomer/editlistdatacustomer/(:any)'] = "listdatacustomer/ListDataCustomer/editListDataCustomer/$1";
$route['admin/listdatacustomer/updateeditlistdatacustomer'] = "listdatacustomer/ListDataCustomer/updateEditListDataCustomer";
$route['admin/listdatacustomer/deletelistdatacustomer/(:any)'] = "listdatacustomer/ListDataCustomer/deleteListDataCustomer/$1";

// Routes List Data Bank
$route['admin/listdatabank'] = "listdatabank/ListDataBank/listDataBank";
$route['admin/listdatabank/addlistdatabank'] = "listdatabank/ListDataBank/addListDataBank";
$route['admin/listdatabank/updateaddlistdatabank'] = "listdatabank/ListDataBank/updateAddListDataBank";
$route['admin/listdatabank/editlistdatabank/(:any)'] = "listdatabank/ListDataBank/editListDataBank/$1";
$route['admin/listdatabank/updateeditlistdatabank'] = "listdatabank/ListDataBank/updateEditListDataBank";
$route['admin/listdatabank/deletelistdatabank/(:any)'] = "listdatabank/ListDataBank/deleteListDataBank/$1";


// Routes Transaksi
$route['admin/transaksi'] = "transaksi/TransaksiAdmin/transaksi";
$route['admin/transaksi/cekpembayaran/(:any)'] = "transaksi/TransaksiAdmin/cekPembayaran/$1";
$route['admin/transaksi/updatecekpembayaran'] = "transaksi/TransaksiAdmin/updateCekPembayaran";
$route['admin/transaksi/downloadbuktipembayaran/(:any)'] = "transaksi/TransaksiAdmin/downloadBuktiPembayaran/$1";
$route['admin/transaksi/transaksiselesai/(:any)'] = "transaksi/TransaksiAdmin/transaksiSelesai/$1";
$route['admin/transaksi/updatetransaksiselesai'] = "transaksi/TransaksiAdmin/updateTransaksiSelesai";
$route['admin/transaksi/transaksibatal/(:any)'] = "transaksi/TransaksiAdmin/transaksiBatal/$1";
$route['admin/transaksi/transaksibatal/(:any)'] = "transaksi/TransaksiAdmin/transaksiBatal/$1";
$route['admin/transaksi/transaksibatal/(:any)'] = "transaksi/TransaksiAdmin/transaksiBatal/$1";

// Routes Laporan
$route['admin/laporan'] = "laporan/Laporan/laporan";
$route['admin/laporan/findlaporan'] = "laporan/Laporan/findLaporan";
$route['admin/laporan/printlaporan/(:any)/(:any)'] = "laporan/Laporan/printLaporan/$1/$1";


// Ganti Password
$route['admin/gantipassword'] = "gantipassword/GantiPasswordAdmin/gantiPassword";
$route['admin/updategantipassword'] = "gantipassword/GantiPasswordAdmin/updateGantiPassword";

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Routes Customer
// Routes Dashboard a.k.a home
$route['customer/dashboard'] = "dashboard/DashboardCustomer/dashboard";
$route['customer/dashboard/detailstatusmobil/(:any)'] = "dashboard/DashboardCustomer/detailStatusMobil/$1";
$route['customer/dashboard/formrentalmobil/(:any)'] = "dashboard/DashboardCustomer/formRentalMobil/$1";
$route['customer/dashboard/addformrentalmobil'] = "dashboard/DashboardCustomer/addFormRentalMobil";

// Routes Transaksi
$route['customer/transaksi'] = "transaksi/TransaksiCustomer/transaksi";
$route['customer/transaksi/pembayaran/(:any)'] = "transaksi/TransaksiCustomer/pembayaran/$1";
$route['customer/transaksi/updatepembayaran'] = "transaksi/TransaksiCustomer/updatePembayaran";
$route['customer/transaksi/printpembayaran/(:any)'] = "transaksi/TransaksiCustomer/printPembayaran/$1";
$route['customer/transaksi/cancelpembayaran/(:any)'] = "transaksi/TransaksiCustomer/cancelPembayaran/$1";

// Routes Register
$route['register'] = "register/Register/register";

// Ganti Password
$route['customer/gantipassword'] = "gantipassword/GantiPasswordCustomer/gantiPassword";
$route['customer/updategantipassword'] = "gantipassword/GantiPasswordCustomer/updateGantiPassword";
