<div class="container" style="margin-bottom:50px; margin-top: 50px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert alert-success">
                    Invoice Pembayaran Anda
                </div>
                <div class="card-body">
                    <table class="table">
                        <?php foreach ($getDataTransaksiRental as $dataTransaksiRental) : ?>
                            <tr>
                                <th>Merek Mobil</th>
                                <td>:</td>
                                <td><?php echo $dataTransaksiRental->merek; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $dataTransaksiRental->tanggal_rental; ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Rental</th>
                                <td>:</td>
                                <td><?php echo $dataTransaksiRental->tanggal_kembali; ?></td>
                            </tr>
                            <tr>
                                <th>Biaya Sewa/Hari</th>
                                <td>:</td>
                                <td>Rp.<?php echo number_format($dataTransaksiRental->harga, 0, ",", ".") ?></td>
                            </tr>
                            <tr>
                                <?php
                                $tglKembali = strtotime($dataTransaksiRental->tanggal_kembali);
                                $tglRental = strtotime($dataTransaksiRental->tanggal_rental);
                                $jmlHari = abs(($tglKembali - $tglRental) / (60 * 60 * 24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>
                                <td><?php echo $jmlHari; ?></td>
                            </tr>
                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>
                                <td><button class="btn btn-sm btn-success"> Rp.<?php echo number_format($dataTransaksiRental->harga * $jmlHari, 0, ",", ".") ?></button></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo site_url("customer/transaksi/printpembayaran/" . $dataTransaksiRental->id_rental); ?>" id="" class="btn btn-sm btn-secondary">Print Invoice</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class="text-success">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini:</p>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($getDataBank as $dataBank) : ?>
                            <li class="list-group-item"><?php echo $dataBank->nama_bank; ?></li>
                            <li class="list-group-item"><?php echo $dataBank->no_rek; ?></li>
                        <?php endforeach; ?>

                        <?php
                        if (empty($dataTransaksiRental->bukti_pembayaran)) { ?>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn  btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Upload Bukti Pembayaran
                            </button>
                        <?php } else if ($dataTransaksiRental->status_pembayaran == "0") { ?>
                            <button name="btnkonfirmasi" id="btnkonfirmasi" class="btn btn-sm btn-warning"><i class="fas fa-clock-o"></i> Menunggu Konfirmasi</button>
                        <?php } else if ($dataTransaksiRental->status_pembayaran == "1") { ?>
                            <button name="btnkonfirmasi" id="btnkonfirmasi" class="btn btn-sm btn-success"><i class="fas fa-check"></i> Pembayaran Selesai</button>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo site_url("customer/transaksi/updatepembayaran"); ?>" method="POST" name="formuploadbuktipembayaran" id="formuploadbuktipembayaran" enctype="multipart/form-data">
                <input type="hidden" name="hidrental" id="hidrental" class="form-control" value="<?php echo $dataTransaksiRental->id_rental; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fuploadbuktipembayaran">Upload Bukti Pembayaran</label>
                        <input type="file" name="fuploadbuktipembayaran" id="fuploadbuktipembayaran" class="form-control">
                        <div class="form-error">
                            <?php form_error("fuploadbuktipembayaran"); ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>