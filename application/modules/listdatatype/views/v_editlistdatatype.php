<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url("admin/listdatacustomer/updateeditlistdatatype"); ?>" method="POST" name="formaddlistdatatype" id="formaddlistdatatype">
                    <input type="hidden" name="hidtype" id="hidtype" class="form-control" placeholder="Masukan ID Type" value="<?php echo $getDataType->id_type; ?>">

                    <div class="form-group">
                        <label for="txtkodetype" class="col-sm-2 col-form-label">Kode Type</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtkodetype" id="txtkodetype" class="form-control" placeholder="Masukan Kode Type" value="<?php echo $getDataType->kode_type; ?>">
                            <div class="form-error">
                                <?php echo form_error("txtkodetype"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txtnamatype" class="col-sm-2 col-form-label">Nama Type</label>
                        <div class="col-sm-12">
                            <input type="text" name="txtnamatype" id="txtnamatype" class="form-control" placeholder="Masukan Nama Type" value="<?php echo $getDataType->nama_type; ?>">
                            <div class="form-error">
                                <?php echo form_error("txtnamatype"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <div id="btn-action-group" class="text-right">
                            <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary">Save</button>
                            <button type="reset" name="btnreset" id="btnreset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>