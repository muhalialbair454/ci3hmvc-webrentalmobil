<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url("admin/listdatacustomer/updateaddlistdatacustomer"); ?>" method="POST" name="formaddlistdatamobil" id="formaddlistdatamobil">
                    <div class="form-group">
                        <label for="txtnama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnama" id="txtnama" class="form-control" placeholder="Masukan Nama" value="<?php echo set_value("txtnama"); ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnama"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtusername" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtusername" id="txtusername" class="form-control" placeholder="Masukan Username" value="<?php echo set_value("txtusername"); ?>">
                            <div class="form-error">
                                <?php echo form_error("txtusername"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ppassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-12">
                            <input type="password" name="ppassword" id="ppassword" class="form-control" placeholder="Masukan Password" value="<?php echo set_value("ppassword"); ?>">
                            <div class="form-error">
                                <?php echo form_error("ppassword"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtalamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtalamat" id="txtalamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo set_value("txtalamat"); ?>">
                            <div class="form-error">
                                <?php echo form_error("txtalamat"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtalamat" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-12">
                            <select name="ddgender" id="ddgender" class="form-control">
                                <?php $oldValue = set_value("ddgender"); ?>
                                <option value="">--Pilih Gender--</option>
                                <option value="Laki-Laki" <?php if ($oldValue) {
                                                                echo "selected";
                                                            } ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if ($oldValue) {
                                                                echo "selected";
                                                            } ?>>Perempuan</option>
                                <div class="form-error">
                                    <?php echo form_error("txtalamat"); ?>
                                </div>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtnotelepon" class="col-sm-2 col-form-label">No. Telepon</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnotelepon" id="txtnotelepon" class="form-control" placeholder="Masukan No. Telepon" value="<?php echo set_value("txtnotelepon"); ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnotelepon"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtnoktp" class="col-sm-2 col-form-label">No. KTP</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnoktp" id="txtnoktp" class="form-control" placeholder="Masukan No. KTP" value="<?php echo set_value("txtnoktp"); ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnoktp"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div id="btn-action-group" class="text-right">
                            <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                            <button type="submit" name="btnreset" id="btnreset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>