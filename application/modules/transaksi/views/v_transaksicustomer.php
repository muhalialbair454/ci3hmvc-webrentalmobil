<div class="container" style="margin-bottom:50px; margin-top: 50px;">
    <div class="card" style="width: 100%;">
        <div class="card-header">
            Data Transaksi Anda
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

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Customer</th>
                        <th class="text-center">Merek Mobil</th>
                        <th class="text-center">No. Plat</th>
                        <th class="text-center">Harga Sewa</th>
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
                            <td><?php echo $dataTransaksi->no_plat; ?></td>
                            <td>Rp.<?php echo number_format($dataTransaksi->harga, 0, ",", "."); ?></td>
                            <td>
                                <?php
                                if ($dataTransaksi->status_rental == "1") { ?>
                                    <button class="btn btn-sm btn-danger">Rental Selesai</button>
                                <?php } else { ?>
                                    <a href="<?php echo site_url("customer/transaksi/pembayaran/" . $dataTransaksi->id_rental); ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                <?php } ?>
                            </td>
                            <td>

                                <?php if ($dataTransaksi->status_rental == "0") { ?>
                                    <a onclick="return confirm('Anda yakin ingin membatalkan transaksi?')" href=" <?php echo site_url("customer/transaksi/cancelpembayaran/" . $dataTransaksi->id_rental); ?>" class="btn btn-sm btn-danger">Batal</a>
                                <?php } else { ?>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Batal
                                    </button>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Maaf, Transaksi ini sudah selesai, dan tidak bisa dibatalkan!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>