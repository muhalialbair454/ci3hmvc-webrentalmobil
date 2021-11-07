<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>WRB &mdash; <?php echo $title; ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url("assets/libraries/assetsshop/"); ?>dist/assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url("assets/libraries/assetsshop/"); ?>dist/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="<?php echo site_url("customer/dashboard"); ?>">Web Rental Mobil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo site_url("customer/dashboard"); ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url("customer/transaksi"); ?>">Transaksi</a></li>
                </ul>
                <form class="d-flex">
                    <?php if ($this->session->userdata("nama")) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item"> <a href="" class="nav-link">Welcome, <?php echo $this->session->userdata('nama'); ?></a></li>
                        </ul>
                        <a href="<?php echo site_url("logout"); ?>" id="btnlogout" class="btn btn-outline-dark" style="margin-right: 10px;"> <i class="bi bi-box-arrow-left"></i> Logout</a>
                        <a href="<?php echo site_url("customer/gantipassword"); ?>" id="btnlogout" class="btn btn-outline-dark"> <i class="bi bi-lock"></i> Ganti Password</a>
                    <?php } else { ?>
                        <a href="<?php echo site_url(""); ?>" id="btnlogin" class="btn btn-outline-dark"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
                    <?php } ?>

                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">WEB RENTAL MOBIL</h1>
                <p class="lead fw-normal text-white-50 mb-0">web rental mobil</p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <?php $this->load->view($mainContent); ?>
    <!-- End Main Content -->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo base_url("assets/libraries/assetsshop/"); ?>dist/js/scripts.js"></script>
</body>

</html>