<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>
        <div class="card">
            <div class="card-body">
                <?php foreach ($getDataTransaksi as $dataTransaksi) : ?>
                    <form action="<?php echo site_url("admin/transaksi/updatetransaksiselesai"); ?>" method="POST" name="formtransaksiselesai" id="formtransaksiselesai">
                        <input type="hidden" name="hidrental" id="hidrental" class="form-control" value="<?php echo $dataTransaksi->id_rental; ?>">
                        <input type="hidden" name="htanggalkembali" id="htanggalkembali" class="form-control" value="<?php echo $dataTransaksi->tanggal_kembali; ?>">
                        <input type="hidden" name="hdenda" id="hidrentahdendal" class="form-control" value="<?php echo $dataTransaksi->denda; ?>">

                        <div class="form-group">
                            <label for="dtanggalpengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="dtanggalpengembalian" id="dtanggalpengembalian" class="form-control" placeholder="Masukan Tanggal Pengembalian" value="<?php echo set_value("dtanggalpengembalian"); ?>">
                            <div class="form-error">
                                <?php echo form_error("dtanggalpengembalian"); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ddstatuspengembalian">Status Pengembalian</label>
                            <select name="ddstatuspengembalian" id="ddstatuspengembalian" class="form-control">
                                <?php $oldValue = set_value("ddstatuspengembalian"); ?>
                                <option value="<?php echo $dataTransaksi->status_pengembalian; ?>"><?php if ($dataTransaksi->status_pengembalian == 1) {
                                                                                                        echo "Kembali";
                                                                                                    } else {
                                                                                                        echo "Belum Kembali";
                                                                                                    } ?></option>
                                <option value="1" <?php if ($oldValue == "Kembali") {
                                                        echo "selected";
                                                    } ?>>Kembali</option>
                                <option value="0" <?php if ($oldValue == "Belum Kembali") {
                                                        echo "selected";
                                                    } ?>>Belum Kembali</option>
                                <div class="form-error">
                                    <?php echo form_error("ddstatuspengembalian"); ?>
                                </div>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ddstatusrental">Status Rental</label>
                            <select name="ddstatusrental" id="ddstatusrental" class="form-control">
                                <?php $oldValue = set_value("ddstatusrental"); ?>
                                <option value="<?php echo $dataTransaksi->status_rental; ?>"><?php if ($dataTransaksi->status_rental == "1") {
                                                                                                    echo "Selesai";
                                                                                                } else {
                                                                                                    echo "Belum Selesai";
                                                                                                } ?></option>
                                <option value="1" <?php if ($oldValue == "Selesai") {
                                                        echo "selected";
                                                    } ?>>Selesai</option>
                                <option value="0" <?php if ($oldValue == "Belum Selesai") {
                                                        echo "selected";
                                                    } ?>>Belum Selesai</option>
                                <div class="form-error">
                                    <?php echo form_error("ddstatusrental"); ?>
                                </div>
                            </select>
                        </div>
                        <button type="submit" name="btnsave" id="btnsave" class="btn btn-success">Save</button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>