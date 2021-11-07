<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <center class="card mx-auto" style="width: 55%;">
            <div class="card-header">
                <h5>Konfirmasi Pembayaran</h5>
            </div>

            <div class="card-body">
                <form action="<?php echo site_url("admin/transaksi/updatecekpembayaran"); ?>" method="POST" name="formupdatecekpembayaran" id="formupdatecekpembayaran">
                    <?php foreach ($getDataPembayaran as $dataPembayaran) : ?>
                        <input type="hidden" name="hidrental" id="cbuktipembayaran" class="form-control" value="<?php echo $dataPembayaran->id_rental; ?>">
                        <a href="<?php echo site_url("admin/transaksi/downloadbuktipembayaran/" . $dataPembayaran->id_rental); ?>" id="btndownload" class="btn btn-sm btn-success">
                            <i class="fas fa-download"> Download Bukti Pemabayraan</i>
                        </a>
                        <div class="form-check form-switch mt-3">
                            <input type="checkbox" name="cbuktipembayaran" id="cbuktipembayaran" class="form-check-input" value="1">
                            <label class="form-check-label" for="cbuktipembayaran">konfirmasi pembayaran</label>
                            <div class="form-error">
                                <?php echo form_error("cbuktipembayaran"); ?>
                            </div>
                        </div>
                        <hr>
                        <button name="btnsave" id="btnsave" class="btn btn-sm btn-primary">Save</button>
                    <?php endforeach; ?>
                </form>
            </div>

</div>
</center>
</section>
</div>