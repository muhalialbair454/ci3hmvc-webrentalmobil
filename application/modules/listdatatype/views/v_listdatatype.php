<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <?php if ($this->session->flashdata("success")) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata("success"); ?>
            </div>
        <?php }
        if ($this->session->flashdata("error")) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata("error"); ?>
            </div>
        <?php  } ?>

        <a href="<?php echo site_url("admin/listdatatype/addlistdatatype"); ?>" id="btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kode Type</th>
                        <th class="text-center">Nama Type</th>
                        <th class="text-center" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataListDataType as $dataListDataType) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $dataListDataType->kode_type; ?></td>
                            <td><?php echo $dataListDataType->nama_type; ?></td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatacustomer/editlistdatatype/" . $dataListDataType->id_type); ?>" id="btnedit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatacustomer/deletelistdatatype/" . $dataListDataType->id_type); ?>" id="btndelete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </section>
</div>