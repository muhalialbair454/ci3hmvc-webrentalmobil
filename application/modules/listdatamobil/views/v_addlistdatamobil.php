<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url("admin/listdatamobil/updateAddlistdatamobil"); ?>" method="POST" name="formaddlistdatamobil" id="formaddlistdatamobil" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ddtypemobil">Type Mobil</label>
                                <select name="ddtypemobil" id="ddtypemobil" class="form-control">
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php
                                    $oldValue = set_value("ddtypemobil");
                                    foreach ($getDataTypeMobil as $dataTypeMobil) : ?>
                                        <option value="<?php echo $dataTypeMobil->kode_type;
                                                        if ($oldValue == "ddtypemobil") {
                                                            echo "selected";
                                                        } ?>"><?php echo $dataTypeMobil->nama_type; ?></option>
                                    <?php endforeach; ?>
                                    <div class="form-error">
                                        <?php echo form_error("ddtypemobil"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtmerek">Merek</label>
                                <input type="text" name="txtmerek" id="txtmerek" class="form-control" placeholder="Masukan Merek Mobil" value="<?php echo set_value("txtmerek"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtmerek"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtnoplat">No. Plat</label>
                                <input type="text" name="txtnoplat" id="txtnoplat" class="form-control" placeholder="Masukan Nomor Plat Mobil" value="<?php echo set_value("txtnoplat"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtnoplat"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtwarna">Warna</label>
                                <input type="text" name="txtwarna" id="txtwarna" class="form-control" placeholder="Masukan Warna Mobil" value="<?php echo set_value("txtwarna"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtwarna"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddsupir">Supir</label>
                                <select name="ddsupir" id="ddsupir" class="form-control">
                                    <?php $oldValue = set_value("ddsupir"); ?>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="0" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddsupir"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ddmp3player">MP3 Player</label>
                                <select name="ddmp3player" id="ddmp3player" class="form-control">
                                    <?php $oldValue = set_value("ddmp3player"); ?>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="0" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddmp3player"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ddcentrallock">Central Lock</label>
                                <select name="ddcentrallock" id="ddcentrallock" class="form-control">
                                    <?php $oldValue = set_value("ddcentrallock"); ?>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="0" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddcentrallock"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ddac">AC</label>
                                <select name="ddac" id="ddac" class="form-control">
                                    <?php $oldValue = set_value("ddac"); ?>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="0" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddac"); ?>
                                    </div>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nhargasewa">Harga Sewa/Hari</label>
                                <input type="number" name="nhargasewa" id="nhargasewa" class="form-control" placeholder="Masukan Harga Sewa" value="<?php echo set_value("nhargasewa"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("nhargasewa"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ndenda">Denda</label>
                                <input type="number" name="ndenda" id="ndenda" class="form-control" placeholder="Masukan Denda" value="<?php echo set_value("ndenda"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("ndenda"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txttahun">Tahun</label>
                                <input type="text" name="txttahun" id="txttahun" class="form-control" placeholder="Masukan Tahun Mobil" value="<?php echo set_value("txttahun"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("txttahun"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddstatus">Status</label>
                                <select name="ddstatus" id="ddstatus" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <?php $oldValue = set_value("ddstatus"); ?>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="0" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddstatus"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fgambar1">Gambar 1</label>
                                <input type="file" name="fgambar1" id="fgambar1" class="form-control" value="<?php echo set_value("fgambar1"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar1"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fgambar2">Gambar 2</label>
                                <input type="file" name="fgambar2" id="fgambar2" class="form-control" value="<?php echo set_value("fgambar2"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar2"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fgambar3">Gambar 3</label>
                                <input type="file" name="fgambar3" id="fgambar3" class="form-control" value="<?php echo set_value("fgambar3"); ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar3"); ?>
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                                <button type="submit" name="btnreset" id="btnreset" class="btn btn-danger">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>