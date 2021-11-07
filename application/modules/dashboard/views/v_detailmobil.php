<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-body">
            <?php foreach ($getDataDetailMobil as $dataDetailMobil) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img width="500px" class="mb-3 mt-3" src="<?php echo base_url("assets/images/" . $dataDetailMobil->gambar1); ?>" alt="<?php echo $dataDetailMobil->gambar1; ?>">
                        <img width="500px" class="mb-3" src="<?php echo base_url("assets/images/" . $dataDetailMobil->gambar2); ?>" alt="<?php echo $dataDetailMobil->gambar2; ?>">
                        <img width="500px" class="mb-3" src="<?php echo base_url("assets/images/" . $dataDetailMobil->gambar3); ?>" alt="<?php echo $dataDetailMobil->gambar3; ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Merek</th>
                                <td><?php echo $dataDetailMobil->merek; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Plat</th>
                                <td><?php echo $dataDetailMobil->no_plat; ?></td>
                            </tr>
                            <tr>
                                <th>Warna</th>
                                <td><?php echo $dataDetailMobil->warna; ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Produksi</th>
                                <td><?php echo $dataDetailMobil->tahun; ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php
                                    if ($dataDetailMobil->status == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga /Hari</th>
                                <td><?php echo $dataDetailMobil->harga; ?></td>
                            </tr>
                            <tr>
                                <th>Denda</th>
                                <td><?php echo $dataDetailMobil->denda; ?></td>
                            </tr>
                            <tr>
                                <th>Supir</th>
                                <td><?php
                                    if ($dataDetailMobil->supir == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>MP3 Player</th>
                                <td><?php
                                    if ($dataDetailMobil->mp3_player == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Central Lock</th>
                                <td><?php
                                    if ($dataDetailMobil->central_lock == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <th>AC</th>
                                <td><?php
                                    if ($dataDetailMobil->ac == "1") {
                                        echo "Tersedia";
                                    } else {
                                        echo "Tidak Tersedia";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php
                                    if ($dataDetailMobil->status == "0") {
                                        echo "<span class='btn btn-danger' disable> Telah di Rental</span>";
                                    } else {
                                        echo anchor('customer/dashboard/formrentalmobil/' . $dataDetailMobil->id_mobil, '<button class="btn btn-success">Rental</button>');
                                    } ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>