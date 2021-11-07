<div class="container" style="margin-bottom:50px; margin-top: -150px;">
    <div class="card" style="margin-top: 200px;">
        <div class="card-header">
            <?php echo $title; ?>
        </div>

        <div class="card-body">
            <?php foreach ($getDataMobil as $dataMobil) : ?>
                <form action="<?php echo site_url("customer/dashboard/addformrentalmobil"); ?>" method="POST" name="formrentalmobil" id="formrentalmobil">
                    <input type="hidden" name="hidmobil" id="hidmobil" class="form-control" placeholder="Masukan ID Mobil" value="<?php echo $dataMobil->id_mobil; ?>">
                    <div class="form-group">
                        <label for="txtHarga">Harga Sewa /Hari</label>
                        <input type="text" name="txtHarga" id="txtHarga" class="form-control" placeholder="Masukan Harga Sewa Mobil" value="<?php echo $dataMobil->harga; ?>" readonly>
                    </div>
                    <div class="form-group mt-2">
                        <label for="txtdenda">Denda /Hari</label>
                        <input type="text" name="txtdenda" id="txtdenda" class="form-control" placeholder="Masukan Harga Denda" value="<?php echo $dataMobil->denda; ?>" readonly>
                    </div>
                    <div class="form-group mt-2">
                        <label for="dtanggalrental">Tanggal Rental</label>
                        <input type="date" name="dtanggalrental" id="dtanggalrental" class="form-control" placeholder="Masukan Tanggal Rental" value="<?php echo set_value("dtanggalrental"); ?>">
                        <div class="form-error" style="color: red;">
                            <?php echo form_error("dtanggalrental"); ?>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="dtanggalkembali">Tanggal Kembali</label>
                        <input type="date" name="dtanggalkembali" id="dtanggalkembali" class="form-control" placeholder="Masukan Tanggal Kembali" value="<?php echo set_value("dtanggalkembali"); ?>">
                        <div class="form-error" style="color: red;">
                            <?php echo form_error("dtanggalkembali"); ?>
                        </div>
                    </div>
                    <div class="text-left mt-3">
                        <button type="submit" name="btnrental" id="btnrental" class="btn btn-primary">Rental</button>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>