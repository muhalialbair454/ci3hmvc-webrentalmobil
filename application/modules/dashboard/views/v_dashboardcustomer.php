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

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($getDataListDataMobil as $dataListDataMobil) : ?>
                <div class="col mb-5">
                    <div class="card">
                        <!-- Product image-->
                        <img height="150px" class="card-img-top" src="<?php echo base_url("assets/images/" . $dataListDataMobil->gambar1); ?>" alt="<?php echo $dataListDataMobil->gambar1; ?>" />
                        <!-- Product details-->
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="#"><?php echo $dataListDataMobil->merek; ?></a>
                            </h4>
                            <h5 style="font-size: 18px;">Rp.<?php echo $dataListDataMobil->harga; ?> /Hari</h5>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer">
                            <?php
                            if ($dataListDataMobil->status == "0") {
                                echo "<span class='btn btn-danger' disable> Telah di Rental</span>";
                            } else {
                                echo anchor('customer/dashboard/detailstatusmobil/' . $dataListDataMobil->id_mobil, '<button class="btn btn-success">Rental</button>');
                            } ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>