<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url("admin/listdatamobil/updateeditlistdatamobil"); ?>" method="POST" name="formaddlistdatamobil" id="formaddlistdatamobil" enctype="multipart/form-data">
                    <input type="hidden" name="hidmobil" id="hidmobil" class="form-control" placeholder="Masukan Id Mobil" value="<?php echo $getDataMobil->id_mobil; ?>">
                    <div class="row">
                        <div class="col-md-6 add-layout-left">
                            <div class="form-group">
                                <label for="ddtypemobil">Type Mobil</label>
                                <select name="ddtypemobil" id="ddtypemobil" class="form-control">
                                    <option value="<?php echo $getDataMobil->kode_type; ?>"><?php if ($getDataMobil->kode_type == "SDN") {
                                                                                                echo "Sedan";
                                                                                            } elseif ($getDataMobil->kode_type == "HTB") {
                                                                                                echo "Hatchback";
                                                                                            } elseif ($getDataMobil->kode_type == "MPV") {
                                                                                                echo "Multi Purpose Vechile";
                                                                                            } else {
                                                                                                echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                                                                            } ?></option>
                                    <?php
                                    $oldValue = set_value("ddtypemobile");
                                    foreach ($getDataType as $dataType) : ?>
                                        <option value="<?php echo $dataType->kode_type;
                                                        if ($oldValue == "ddtypemobile") {
                                                            echo "selected";
                                                        } ?>"><?php echo $dataType->nama_type; ?></option>
                                    <?php endforeach; ?>
                                    <div class="form-error">
                                        <?php echo form_error("ddtypemobil"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="txtmerek">Merek</label>
                                <input type="text" name="txtmerek" id="txtmerek" class="form-control" placeholder="Masukan Merek Mobil" value="<?php echo $getDataMobil->merek; ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtmerek"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtnoplat">No. Plat</label>
                                <input type="text" name="txtnoplat" id="txtnoplat" class="form-control" placeholder="Masukan Nomor Plat Mobil" value="<?php echo $getDataMobil->no_plat; ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtnoplat"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txtwarna">Warna</label>
                                <input type="text" name="txtwarna" id="txtwarna" class="form-control" placeholder="Masukan Warna Mobil" value="<?php echo $getDataMobil->warna; ?>">
                                <div class="form-error">
                                    <?php echo form_error("txtwarna"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddsupir">Supir</label>
                                <select name="ddsupir" id="ddsupir" class="form-control">
                                    <option value="<?php echo $getDataMobil->supir; ?>"><?php if ($getDataMobil->supir == "1") {
                                                                                            echo "Tersedia";
                                                                                        } else {
                                                                                            echo "Tidak Tersedia";
                                                                                        } ?></option>
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
                                    <option value="<?php echo $getDataMobil->mp3_player; ?>"><?php if ($getDataMobil->mp3_player == "1") {
                                                                                                    echo "Tersedia";
                                                                                                } else {
                                                                                                    echo "Tidak Tersedia";
                                                                                                } ?></option>
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
                                    <option value="<?php echo $getDataMobil->central_lock; ?>"><?php if ($getDataMobil->central_lock == "1") {
                                                                                                    echo "Tersedia";
                                                                                                } else {
                                                                                                    echo "Tidak Tersedia";
                                                                                                } ?></option>
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
                                    <option value="<?php echo $getDataMobil->ac; ?>"><?php if ($getDataMobil->ac == "1") {
                                                                                            echo "Tersedia";
                                                                                        } else {
                                                                                            echo "Tidak Tersedia";
                                                                                        } ?></option>
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
                        <div class="col-md-6 add-layout-right">
                            <div class="form-group">
                                <label for="nhargasewa">Harga Sewa/Hari</label>
                                <input type="number" name="nhargasewa" id="nhargasewa" class="form-control" placeholder="Masukan Harga Sewa" value="<?php echo $getDataMobil->harga; ?>">
                                <div class="form-error">
                                    <?php echo form_error("nhargasewa"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ndenda">Denda</label>
                                <input type="number" name="ndenda" id="ndenda" class="form-control" placeholder="Masukan Denda" value="<?php echo $getDataMobil->denda; ?>">
                                <div class="form-error">
                                    <?php echo form_error("ndenda"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="txttahun">Tahun</label>
                                <input type="text" name="txttahun" id="txttahun" class="form-control" placeholder="Masukan Tahun Mobil" value="<?php echo $getDataMobil->tahun; ?>">
                                <div class="form-error">
                                    <?php echo form_error("txttahun"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ddstatus">Status</label>
                                <select name="ddstatus" id="ddstatus" class="form-control">
                                    <?php $oldValue = set_value("ddstatus"); ?>
                                    <option value="<?php echo $getDataMobil->status; ?>"><?php if ($getDataMobil->status == "1") {
                                                                                                echo "Tersedia";
                                                                                            } else {
                                                                                                echo "Tidak Tersedia";
                                                                                            } ?></option>
                                    <option value="1" <?php if ($oldValue == "1") {
                                                            echo "selected";
                                                        } ?>>Tersedia</option>
                                    <option value="" <?php if ($oldValue == "0") {
                                                            echo "selected";
                                                        } ?>>Tidak Tersedia</option>
                                    <div class="form-error">
                                        <?php echo form_error("ddstatus"); ?>
                                    </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fgambar1">Gambar 1</label>
                                <input type="file" name="fgambar1" id="fgambar1" class="form-control" value="<?php echo $getDataMobil->gambar1; ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar1"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fgambar2">Gambar 2</label>
                                <input type="file" name="fgambar2" id="fgambar2" class="form-control" value="<?php echo $getDataMobil->gambar2; ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar2"); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fgambar3">Gambar 3</label>
                                <input type="file" name="fgambar3" id="fgambar3" class="form-control" value="<?php echo $getDataMobil->gambar3; ?>">
                                <div class="form-error">
                                    <?php echo form_error("fgambar3"); ?>
                                </div>
                            </div>
                            <div id="btn-action-group" class="text-right">
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