<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>

        <form action="<?php echo site_url("admin/laporan/updatelaporan"); ?>" method="POST" name="formlaporan" id="formlaporan">
            <div class="form-group">
                <label for="ddaritanggal">Dari Tanggal</label>
                <input type="date" name="ddaritanggal" id="ddaritanggal" class="form-control" placeholder="Masukan Dari Tanggal" value="<?php echo set_value("ddaritanggal"); ?>">
                <div class="form-error">
                    <?php echo form_error("ddaritanggal"); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="dsampaitanggal">Sampai Tanggal</label>
                <input type="date" name="dsampaitanggal" id="dsampaitanggal" class="form-control" placeholder="Masukan Sampai Tanggal" value="<?php echo set_value("dsampaitanggal"); ?>">
                <div class="form-error">
                    <?php echo form_error("dsampaitanggal"); ?>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i> Tampilkan Data</button>
        </form>
    </section>
    <hr>

    <div class="btn-group">
        <a href="<?php echo site_url() . "admin/laporan/printlaporan/" . set_value("ddaritanggal") . "/" . set_value("dsampaitanggal"); ?>" id="" class="btn btn-sm btn-success" target="_blank">
            <i class="fas fa-print"></i> Print

        </a>
    </div>
    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Customer</th>
                    <th class="text-center">Mobil</th>
                    <th class="text-center">Tgl. Rental</th>
                    <th class="text-center">Tgl. Kembali</th>
                    <th class="text-center">Harga Sewa/Hari</th>
                    <th class="text-center">Denda /Hari</th>
                    <th class="text-center">Total Denda</th>
                    <th class="text-center">Tgl. Dikembalikan</th>
                    <th class="text-center">Status Pengembalian</th>
                    <th class="text-center">Status Rental</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($getDataLaporan as $dataTransaksi) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $dataTransaksi->nama; ?></td>
                        <td><?php echo $dataTransaksi->merek; ?></td>
                        <td><?php echo date("d/m/Y", strtotime($dataTransaksi->tanggal_rental)); ?></td>
                        <td><?php echo date("d/m/Y", strtotime($dataTransaksi->tanggal_kembali)); ?></td>
                        <td>Rp.<?php echo number_format($dataTransaksi->harga, 0, ",", "."); ?></td>
                        <td>Rp.<?php echo number_format($dataTransaksi->denda, 0, ",", "."); ?></td>
                        <td>Rp.<?php echo number_format($dataTransaksi->total_denda, 0, ",", "."); ?></td>
                        <td>
                            <?php
                            if ($dataTransaksi->tanggal_pengembalian == "0000-00-00") {
                                echo "-";
                            } else {
                                echo date("d/m/Y", strtotime($dataTransaksi->tanggal_pengembalian));
                            } ?>
                        </td>
                        <td>
                            <?php
                            if ($dataTransaksi->status_pengembalian == "1") {
                                echo "Kembali";
                            } else {
                                echo "Belum Kembali";
                            } ?>
                        </td>
                        <td>
                            <?php
                            if ($dataTransaksi->status_rental == "1") {
                                echo "Kembali";
                            } else {
                                echo "Belum Kembali";
                            } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>