# ci3hmvc-webrentalmobil

## Overview

Web Rental Mobil An Example Website For Renting a Car.

## What's Inside

- Web Rental Mobil
  - User :
    - Admin
    - Customer
  - Menus Admin:
    - login
    - Dashboard
    - List Data Mobil
    - List Data Type
    - List Data Customer
    - List Data Bank
    - Transaksi
    - Laporan
    - Ganti Password
    - Logout
  - Menus Customer:
    - Login
    - Beranda
    - Transaksi
    - Ganti Password
    - Logout
  - Menus Privilege :
    - Admin : Login, Dashboard, List Data Mobil, List Data Type, List Data Customer, List Data Bank, Transaksi, Laporan, Ganti Password, Logout.
    - Customer : Login, Beranda, Transaksi, Ganti Password, Logout.
- PHP v5.2.0
- Code Igniter 3 With HMVC Pattern
- Authentication
- Session
- Form Validation
- Stisla Templates
- Bootstrap Templates
- Bootstrap v5.0
- Query SQL
- etc..

## File Structure
```bash
├───application
│   ├───...
│   ├───...
│   ├───modules
│   │   ├───Auth
│   │   │   ├───controllers
│   │   │   │       Auth.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MAuth.php
│   │   │   │
│   │   │   └───views
│   │   │           v_login.php
│   │   │
│   │   ├───dashboard
│   │   │   ├───controllers
│   │   │   │       DashboardAdmin.php
│   │   │   │       DashboardCustomer.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MDashboardadmin.php
│   │   │   │       MDashboardcustomer.php
│   │   │   │
│   │   │   └───views
│   │   │           v_dashboardadmin.php
│   │   │           v_dashboardcustomer.php
│   │   │           v_detailmobil.php
│   │   │           v_formrentalmobil.php
│   │   │
│   │   ├───gantipassword
│   │   │   ├───controllers
│   │   │   │       GantiPasswordAdmin.php
│   │   │   │       GantiPasswordCustomer.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MGantipasswordadmin.php
│   │   │   │       MGantipasswordcustomer.php
│   │   │   │
│   │   │   └───views
│   │   │           v_gantipasswordadmin.php
│   │   │           v_gantipasswordcustomer.php
│   │   │
│   │   ├───laporan
│   │   │   ├───controllers
│   │   │   │       Laporan.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MLaporan.php
│   │   │   │
│   │   │   └───views
│   │   │       │   v_laporan.php
│   │   │       │   v_printlaporan.php
│   │   │       │   v_tampilkanlaporan.php
│   │   │       │
│   │   │       └───includes
│   │   │               load-scripts.php
│   │   │               load-styles.php
│   │   │
│   │   ├───listdatabank
│   │   │   ├───controllers
│   │   │   │       ListDataBank.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatabank.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatabank.php
│   │   │           v_editlistdatabank.php
│   │   │           v_listdatabank.php
│   │   │
│   │   ├───listdatacustomer
│   │   │   ├───controllers
│   │   │   │       ListDataCustomer.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatacustomer.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatacustomer.php
│   │   │           v_editlistdatacustomer.php
│   │   │           v_listdatacustomer.php
│   │   │
│   │   ├───listdatamobil
│   │   │   ├───controllers
│   │   │   │       ListDataMobil.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatamobil.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatamobil.php
│   │   │           v_detaillistdatamobil.php
│   │   │           v_editlistdatamobil.php
│   │   │           v_listdatamobil.php
│   │   │
│   │   ├───listdatatype
│   │   │   ├───controllers
│   │   │   │       ListDataType.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MListdatatype.php
│   │   │   │
│   │   │   └───views
│   │   │           v_addlistdatatype.php
│   │   │           v_editlistdatatype.php
│   │   │           v_listdatatype.php
│   │   │
│   │   ├───migration
│   │   │   ├───config
│   │   │   │       migration.php
│   │   │   │       routes.php
│   │   │   │
│   │   │   ├───controllers
│   │   │   │       Migration.php
│   │   │   │
│   │   │   ├───migrations
│   │   │   │       001_tbl_admin.php
│   │   │   │       002_tbl_customer.php
│   │   │   │       003_tbl_mobil.php
│   │   │   │       004_tbl_transaksi.php
│   │   │   │       005_tbl_rental.php
│   │   │   │       006_tbl_type.php
│   │   │   │       007_tbl_bank.php
│   │   │   │
│   │   │   └───views
│   │   │           v_runmigration.php
│   │   │
│   │   ├───register
│   │   │   ├───controllers
│   │   │   │       Register.php
│   │   │   │
│   │   │   ├───models
│   │   │   │       MRegister.php
│   │   │   │
│   │   │   └───views
│   │   │           v_register.php
│   │   │
│   │   ├───templates
│   │   │   ├───controllers
│   │   │   │       Templates.php
│   │   │   │
│   │   │   └───views
│   │   │           blank_template.php
│   │   │           v_exampletemplates.php
│   │   │           v_templatesadmin.php
│   │   │           v_templatescustomer.php
│   │   │           v_templateslogin.php
│   │   │           v_templatesregister.php
│   │   │
│   │   └───transaksi
│   │       ├───controllers
│   │       │       TransaksiAdmin.php
│   │       │       TransaksiCustomer.php
│   │       │
│   │       ├───models
│   │       │       MTransaksiadmin.php
│   │       │       MTransaksicustomer.php
│   │       │
│   │       └───views
│   │               v_cekpembayaran.php
│   │               v_pembayaran.php
│   │               v_printpembayaran.php
│   │               v_transaksiadmin.php
│   │               v_transaksicustomer.php
│   │               v_transaksiselesai.php
│   │
│   ├───...
├───assets
    ├───...
```


## Quick Start

- Clone the project to your htdocs directory
- Configure the Database(application/config/database.php)
- Configure the config file(application/config/config.php)
- Run Migration with url http://your-hostname/ci3hmvc-webrentalmobil/migration
- Open file webrentalmobil.sql in the root folder of the project, run it(Query INSERT)
- Run Web Rental Mobil with url http://your-hostname/ci3hmvc-webrentalmobil/login
- Login as Admin with username: Admin and Password: 123
- if you want to login as a customer, please register via url http://your-hostname/ci3hmvc-webrentalmobil/register or http://localhost/ci3hmvc-webrentalmobil/login     then click create one!!!
- Its :coffee: time!!! 

## KnownIssues

- No Issues (Let me know if there are issues).
