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

        <a href="<?php echo site_url("admin/listdatamobil/addlistdatamobil"); ?>" id="btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Merek</th>
                        <th class="text-center">No. Plat</th>
                        <th class="text-center">Status</th>
                        <th class="text-center" colspan="3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataListDataMobil as $dataListDataMobil) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><img width="100px" src="<?php echo base_url() . "assets/images/" . $dataListDataMobil->gambar1; ?>" alt="<?php echo $dataListDataMobil->gambar1; ?>"></td>
                            <td><?php echo $dataListDataMobil->kode_type; ?></td>
                            <td><?php echo $dataListDataMobil->merek; ?></td>
                            <td><?php echo $dataListDataMobil->no_plat; ?></td>
                            <td class="text-center"><?php if ($dataListDataMobil->status == "0") {
                                                        echo "<span class = 'badge badge-danger'> Tidak Tersedia</span>";
                                                    } else {
                                                        echo "<span class = 'badge badge-primary'> Tersedia</span>";
                                                    } ?>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatamobil/detaillistdatamobil/" . $dataListDataMobil->id_mobil); ?>" id="btndetaildata" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatamobil/deletelistdatamobil/" . $dataListDataMobil->id_mobil); ?>" id="btndeletedata" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatamobil/editlistdatamobil/" . $dataListDataMobil->id_mobil); ?>" id="btneditdata" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </section>
</div>