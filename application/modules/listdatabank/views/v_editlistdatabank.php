<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url("admin/listdatabank/updateeditlistdatabank"); ?>" method="POST" name="formeditlistdatabank" id="formeditlistdatabank">
                    <input type="hidden" name="hidbank" id="hidbank" class="form-control" placeholder="Masukan ID Bank" value="<?php echo $getDataBank->id_bank; ?>">
                    <div class="form-group">
                        <label for="txtnamabank" class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnamabank" id="txtnamabank" class="form-control" placeholder="Masukan Nama Bank" value="<?php echo $getDataBank->nama_bank; ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnamabank"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtnorek" class="col-sm-2 col-form-label">Nomor Rekening</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnorek" id="txtnorek" class="form-control" placeholder="Masukan Nomor Rekening" value="<?php echo $getDataBank->no_rek; ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnorek"); ?>
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