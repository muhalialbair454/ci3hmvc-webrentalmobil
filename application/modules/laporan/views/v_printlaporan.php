<?php echo $this->load->view("includes/load-styles"); ?>

<h3 style="text-align:center;">Laporan Transaksi Rental Mobil</h3>
<table>
    <tr>
        <?php $dariTanggal = $this->uri->segment("4"); ?>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo $dariTanggal; ?></td>
    </tr>
    <tr>
        <?php $sampaiTanggal = $this->uri->segment("5"); ?>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo $sampaiTanggal; ?></td>
    </tr>
</table>

<table class="table table-bordered table-striped mt-5">
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

<?php echo $this->load->view("includes/load-scripts"); ?>
<script type="text/javascript">
    window.print();
</script>