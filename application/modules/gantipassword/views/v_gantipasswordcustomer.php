<?php if ($this->session->flashdata("success")) { ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata("success"); ?>
    </div>
<?php }
if ($this->session->flashdata("error")) { ?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata("error"); ?>
    </div>
<?php  } ?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?php echo base_url("assets/libraries/assetsstisla"); ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4><?php echo $title; ?></h4>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo site_url("customer/updategantipassword"); ?>" name="formlogin" id="formlogin">
                                <div class="form-group">
                                    <label for="ppasswordbaru1">Password Baru</label>
                                    <input type="password" name="ppasswordbaru1" id="ppasswordbaru1" class="form-control" placeholder="Password Baru" value="<?php echo set_value("ppasswordbaru1"); ?>">
                                    <div class="form-error">
                                        <?php echo form_error("ppasswordbaru1"); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="ppasswordbaru2" class="control-label">Ulangi Password</label>
                                    </div>
                                    <input type="password" name="ppasswordbaru2" id="ppasswordbaru2" class="form-control" placeholder="Ulangi Password" value="<?php echo set_value("ppasswordbaru2"); ?>">
                                    <div class="form-error">
                                        <?php echo form_error("ppasswordbaru2"); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Ganti Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Web Rental Mobil 2021
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>