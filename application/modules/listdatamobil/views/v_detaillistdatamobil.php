<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <?php foreach ($getDetailListDataMobil as $detailListDataMobil) : ?>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="mb-3 mt-5" src="<?php echo base_url() . "assets/images/" . $detailListDataMobil->gambar1; ?>" alt="<?php echo $detailListDataMobil->gambar1; ?>" width="370px">
                            <img src="<?php echo base_url() . "assets/images/" . $detailListDataMobil->gambar2; ?>" alt="<?php echo $detailListDataMobil->gambar2; ?>" width="370px">
                            <img class="mb-5 mt-3" src="<?php echo base_url() . "assets/images/" . $detailListDataMobil->gambar3; ?>" alt="<?php echo $detailListDataMobil->gambar3; ?>" width="370px">
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Type Mobil</th>
                                    <td> <?php
                                            if ($detailListDataMobil->kode_type == "SDN") {
                                                echo "Sedan";
                                            } elseif ($detailListDataMobil->kode_type == "HTB") {
                                                echo "Hatchback";
                                            } elseif ($detailListDataMobil->kode_type == "MPV") {
                                                echo "Multi Purpose Vechile";
                                            } else {
                                                echo "<span class='text-danger'>Type mobil belum terdaftar</span>";
                                            }
                                            ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Merek</th>
                                    <td><?php echo $detailListDataMobil->merek; ?></td>
                                </tr>
                                <tr>
                                    <th>No. Plat</th>
                                    <td><?php echo $detailListDataMobil->no_plat; ?></td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td><?php echo $detailListDataMobil->warna; ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td><?php echo $detailListDataMobil->tahun; ?></td>
                                </tr>
                                <tr>
                                    <th>Harga /Hari</th>
                                    <td><?php echo $detailListDataMobil->harga; ?></td>
                                </tr>
                                <tr>
                                    <th>Denda</th>
                                    <td><?php echo $detailListDataMobil->denda; ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td> <?php
                                            if ($detailListDataMobil->status == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'> Tersedia</span>";
                                            } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Supir</th>
                                    <td> <?php
                                            if ($detailListDataMobil->supir == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'> Tersedia</span>";
                                            } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>MP3 Player</th>
                                    <td> <?php
                                            if ($detailListDataMobil->mp3_player == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'> Tersedia</span>";
                                            } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Central Lock</th>
                                    <td> <?php
                                            if ($detailListDataMobil->central_lock == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'> Tersedia</span>";
                                            } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>AC</th>
                                    <td> <?php
                                            if ($detailListDataMobil->ac == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'> Tersedia</span>";
                                            } ?>
                                    </td>
                                </tr>
                            </table>
                            <div class="text-left ml-4">
                                <a href="<?php echo site_url("admin/listdatamobil"); ?>" id="btnback" class="btn btn-sm btn-danger">Kembali</a>
                                <a href="<?php echo site_url("admin/listdatamobil/editlistdatamobil/" . $detailListDataMobil->id_mobil); ?>" id="btnupdate" class="btn btn-sm btn-primary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>