<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <a href="<?php echo site_url("admin/listdatacustomer/addlistdatacustomer"); ?>" id="btntambahdata" class="btn btn-primary mb-3"><i class="fas fa-plus"> Tambah Data</i></a>

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

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">No. Telepon</th>
                        <th class="text-center">No. KTP</th>
                        <th class="text-center" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataListDataCustomer as $dataListDataCustomer) :
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->nama; ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->username; ?></td>
                            <td class="text-center"><?php echo md5($dataListDataCustomer->password); ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->alamat; ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->gender; ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->no_telepon; ?></td>
                            <td class="text-center"><?php echo $dataListDataCustomer->no_ktp; ?></td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatacustomer/editlistdatacustomer/" . $dataListDataCustomer->id_customer); ?>" id="btneditdata" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                            </td>
                            <td class="text-center">
                                <a href="<?php echo site_url("admin/listdatacustomer/deletelistdatacustomer/" . $dataListDataCustomer->id_customer); ?>" id="btndeletedata" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>