<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Dashboard
            <small>Data Informasi</small>
        </h1>
    </section>
    <section class="content">
        <h4 style="font-weight: 800;">Data Alternatif Yang Tersedia</h4>
        <table class="table table-hover table-responsive" style="border: 1px solid black; background-color: #96c5e1;">
            <thead>
                <tr>
                    <th scope="col ">No</th>
                    <th scope="col ">Nama Alternatif</th>
                    <th scope="col ">Harga</th>
                    <th scope="col ">K1</th>
                    <th scope="col ">K2</th>
                    <th scope="col ">K3</th>
                    <th scope="col ">K4</th>
                    <th scope="col ">K5</th>
                    <th scope="col ">K6</th>
                    <th scope="col ">K7</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                if (mysqli_num_rows($sql_a) > 0) {
                    while ($data = mysqli_fetch_array($sql_a)) {
                        $format_rupiah = "Rp " . number_format($data['harga'], 0, ',', '.'); ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $data['nama'] ?></td>
                            <?php echo "<td>{$format_rupiah}</td>"; ?>
                            <td><?= $data['k1'] ?></td>
                            <td><?= $data['k2'] ?></td>
                            <td><?= $data['k3'] ?></td>
                            <td><?= $data['k4'] ?></td>
                            <td><?= $data['k5'] ?></td>
                            <td><?= $data['k6'] ?></td>
                            <td><?= $data['k7'] ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</div>
<?php include_once('../_footer.php'); ?>