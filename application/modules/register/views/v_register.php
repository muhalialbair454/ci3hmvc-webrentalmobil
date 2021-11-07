<div class="card-body">
    <form method="POST" action="<?php echo site_url("register/doregister"); ?>" name="formregister" id="formregister">
        <div class="row">
            <div class="form-group col-6">
                <label for="txtnama">Nama</label>
                <input type="text" name="txtnama" id="txtnama" class="form-control" placeholder="Masukan Nama" value="<?php echo set_value("txtnama"); ?>">
                <div class="form-error">
                    <?php echo form_error("txtnama"); ?>
                </div>
            </div>
            <div class="form-group col-6">
                <label for="txtusername">Username</label>
                <input type="text" name="txtusername" id="txtusername" class="form-control" placeholder="Masukan Username" value="<?php echo set_value("txtusername"); ?>">
                <div class="form-error">
                    <?php echo form_error("txtusername"); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="txtalamat">Alamat</label>
            <input type="text" name="txtalamat" id="txtalamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo set_value("txtalamat"); ?>">
            <div class="form-error">
                <?php echo form_error("txtalamat"); ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label for="ddgender" class="d-block">Gender</label>
                <select name="ddgender" id="ddgender" class="form-control">
                    <?php $oldValue = set_value("ddgender"); ?>
                    <option value="">--Pilih Gender--</option>
                    <option value="Laki-Laki" <?php if ($oldValue == "Laki-Laki") {
                                                    echo "Selected";
                                                } ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($oldValue == "Perempuan") {
                                                    echo "Selected";
                                                } ?>>Perempuan</option>
                    <div class="form-error">
                        <?php echo form_error("ddgender"); ?>
                    </div>
                </select>
            </div>
            <div class="form-group col-6">
                <label for="txtnotlp" class="d-block">No. Telepon</label>
                <input type="text" name="txtnotlp" id="txtnotlp" class="form-control" placeholder="Masukan No. Telepon" value="<?php echo set_value("txtnotlp"); ?>">
                <div class="form-error">
                    <?php echo form_error("txtnotlp"); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-6">
                <label>No. KTP</label>
                <input type="text" name="txtnoktp" id="txtnoktp" class="form-control" placeholder="Masukan No. KTP" value="<?php echo set_value("txtnoktp"); ?>">
                <div class="form-error">
                    <?php echo form_error("txtnoktp"); ?>
                </div>
            </div>
            <div class="form-group col-6">
                <label>Password</label>
                <input type="password" name="ppassword" id="ppassword" class="form-control" placeholder="Masukan Password" value="<?php echo set_value("ppassword"); ?>">
                <div class="form-error">
                    <?php echo form_error("ppassword"); ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                Register
            </button>
        </div>
    </form>
</div>