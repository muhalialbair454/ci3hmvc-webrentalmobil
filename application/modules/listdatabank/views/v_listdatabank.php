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

        <a href="<?php echo site_url("admin/listdatabank/addlistdatabank"); ?>" id="btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Bank</th>
                        <th class="text-center">No. Rekening</th>
                        <th class="text-center" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataListDataBank as $dataListDataBank) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $dataListDataBank->nama_bank; ?></td>
                            <td><?php echo $dataListDataBank->no_rek; ?></td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatabank/editlistdatabank/" . $dataListDataBank->id_bank); ?>" id="btnedit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatabank/deletelistdatabank/" . $dataListDataBank->id_bank); ?>" id="btndelete" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </section>
</div>