<?php echo "<h1>$title</h1>"; ?>

<table class="table" style="width: 80%;">
    <?php foreach ($getDataPembayaran as $dataPebayaran) : ?>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $dataPebayaran->nama; ?></td>
        </tr>
        <tr>
            <td>Merek Mobil</td>
            <td>:</td>
            <td><?php echo $dataPebayaran->merek; ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $dataPebayaran->tanggal_rental; ?></td>
        </tr>
        <tr>
            <td>Tanggal Rental</td>
            <td>:</td>
            <td><?php echo $dataPebayaran->tanggal_kembali; ?></td>
        </tr>
        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp.<?php echo number_format($dataPebayaran->harga, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <?php
            $tglKembali = strtotime($dataPebayaran->tanggal_kembali);
            $tglRental = strtotime($dataPebayaran->tanggal_rental);
            $jmlHari = abs(($tglKembali - $tglRental) / (60 * 60 * 24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jmlHari; ?></td>
        </tr>
        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php if ($dataPebayaran->status_pembayaran == "0") {
                    echo "Belum Lunas";
                } else {
                    echo "Lunas";
                } ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color:red;">
            <td>Jumlah Pembayaran</td>
            <td>:</td>
            <td>Rp.<?php echo number_format($dataPebayaran->harga * $jmlHari, 0, ",", ".") ?></td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <?php foreach ($getDataBank as $dataBank) : ?>
                        <li><?php echo $dataBank->nama_bank . " " . $dataBank->no_rek; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>