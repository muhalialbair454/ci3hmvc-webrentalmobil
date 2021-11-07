<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <form action="<?php echo site_url("admin/laporan/findlaporan"); ?>" method="POST" name="formlaporan" id="formlaporan">
            <div class="form-group">
                <label for="ddaritanggal">Dari Tanggal</label>
                <input type="date" name="ddaritanggal" id="ddaritanggal" class="form-control" placeholder="Masukan Dari Tanggal" value="<?php echo set_value("ddaritanggal"); ?>">
                <div class="form-error" style="color: red;">
                    <?php echo form_error("ddaritanggal"); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="dsampaitanggal">Sampai Tanggal</label>
                <input type="date" name="dsampaitanggal" id="dsampaitanggal" class="form-control" placeholder="Masukan Sampai Tanggal" value="<?php echo set_value("dsampaitanggal"); ?>">
                <div class="form-error" style="color: red;">
                    <?php echo form_error("dsampaitanggal"); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
        </form>
    </section>
</div>