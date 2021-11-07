<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><?php echo $title; ?></h1>
        </div>
        <div class="table-responsive">
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
                        <th class="text-center">Cek Pembayaran</th>
                        <th class="text-center" colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($getDataTransaksi as $dataTransaksi) : ?>
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
                            <td>
                                <center>
                                    <?php
                                    if (empty($dataTransaksi->bukti_pembayaran)) { ?>
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                    <?php } else { ?>
                                        <a href="<?php echo site_url("admin/transaksi/cekpembayaran/" . $dataTransaksi->id_rental); ?>" class="btn btn-sm btn-primary"><i class="fas fa-check-circle"></i></a>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <?php
                                if ($dataTransaksi->status == "1") {
                                    echo "-";
                                } else { ?>
                                    <a href="<?php echo site_url("admin/transaksi/transaksiselesai/" . $dataTransaksi->id_rental); ?>" id="btntransaksiberhasil" class="btn btn-sm btn-success"><i class="fas fa-check"></i></i></a>
                                <?php } ?>
                            </td>
                            <td>
                                <?php
                                if ($dataTransaksi->status == "1") {
                                    echo "-";
                                } else { ?>
                                    <a onclick="return confirm('Anda yakin ingin membatalkan transaksi?')" href="<?php echo site_url("admin/transaksi/transaksibatal/" . $dataTransaksi->id_rental); ?>" id="btnbataltransaksi" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></i></a>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>