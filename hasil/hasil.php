<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="pull-right">
      <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
    </div>
    <h1>
      Hasil
      <small>Hasil</small>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header">
            <h3 class="box-title">Data Bobot</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>Jumlah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qr = mysqli_query($con, "SELECT * FROM tb_kriteria ") or die(mysqli_error($con));
                  $i = 1;
                  $total = 0;
                  while ($data = mysqli_fetch_array($qr)) {
                    $angka[$i] = $data['nilai_kriteria'];
                    $total = $total + $angka[$i];
                    $i++;
                  }
                  $j = 1;
                  $total_w = 0;
                  $qr2 = mysqli_query($con, "SELECT * FROM tb_kriteria ") or die(mysqli_error($con));
                  while ($dt2 = mysqli_fetch_array($qr2)) {
                    $w[$j] = 0;
                    $w[$j] = $angka[$j] / $total;
                    $total_w = $total_w + $w[$j];
                    $j++;
                  }
                  ?>
                  <tr>
                    <td>bobot</td>
                    <td><?php echo $angka[1]; ?></td>
                    <td><?php echo $angka[2]; ?></td>
                    <td><?php echo $angka[3]; ?></td>
                    <td><?php echo $angka[4]; ?></td>
                    <td><?php echo $angka[5]; ?></td>
                    <td><?php echo $angka[6]; ?></td>
                    <td><?php echo $angka[7]; ?></td>
                    <td><?php echo $total; ?></td>
                  </tr>
                  <tr>
                    <td>W</td>
                    <td><?php echo number_format($w[1], 2); ?></td>
                    <td><?php echo number_format($w[2], 2); ?></td>
                    <td><?php echo number_format($w[3], 2); ?></td>
                    <td><?php echo number_format($w[4], 2); ?></td>
                    <td><?php echo number_format($w[5], 2); ?></td>
                    <td><?php echo number_format($w[6], 2); ?></td>
                    <td><?php echo number_format($w[7], 2); ?></td>
                    <td><?php echo $total_w; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Alternatif</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pendaftar</th>
                  <th>K1</th>
                  <th>K2</th>
                  <th>K3</th>
                  <th>K4</th>
                  <th>K5</th>
                  <th>K6</th>
                  <th>K7</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                if ($data_level == "Admin") {
                  $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                } else {
                  $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif where pengguna = '$data_user'") or die(mysqli_error($con));
                }
                if (mysqli_num_rows($sql_a) > 0) {
                  while ($data = mysqli_fetch_array($sql_a)) { ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama'] ?></td>
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
                  echo "<tr> <td colspan=\"4\" align=\"center\">Mohon Masukkan Data Alternatif !</td></tr>";
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Hasil Utility</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.box-header -->

          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pendaftar</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $bb = 1;

                  if ($data_level == "Admin") {
                    //MIN & MAX (K1)
                    $mink1 = mysqli_fetch_array($con->query("SELECT MIN(k1) FROM tb_alternatif"));
                    $maxk1 = mysqli_fetch_array($con->query("SELECT MAX(k1) FROM tb_alternatif"));
                    //MIN & MAX (K2)
                    $mink2 = mysqli_fetch_array($con->query("SELECT MIN(k2) FROM tb_alternatif"));
                    $maxk2 = mysqli_fetch_array($con->query("SELECT MAX(k2) FROM tb_alternatif"));
                    //MIN & MAX (K3)
                    $mink3 = mysqli_fetch_array($con->query("SELECT MIN(k3) FROM tb_alternatif"));
                    $maxk3 = mysqli_fetch_array($con->query("SELECT MAX(k3) FROM tb_alternatif"));
                    //MIN & MAX (K4)
                    $mink4 = mysqli_fetch_array($con->query("SELECT MIN(k4) FROM tb_alternatif"));
                    $maxk4 = mysqli_fetch_array($con->query("SELECT MAX(k4) FROM tb_alternatif"));
                    //MIN & MAX (K5)
                    $mink5 = mysqli_fetch_array($con->query("SELECT MIN(k5) FROM tb_alternatif"));
                    $maxk5 = mysqli_fetch_array($con->query("SELECT MAX(k5) FROM tb_alternatif"));
                    //MIN & MAX (K6)
                    $mink6 = mysqli_fetch_array($con->query("SELECT MIN(k6) FROM tb_alternatif"));
                    $maxk6 = mysqli_fetch_array($con->query("SELECT MAX(k6) FROM tb_alternatif"));
                    //MIN & MAX (K7)
                    $mink7 = mysqli_fetch_array($con->query("SELECT MIN(k7) FROM tb_alternatif"));
                    $maxk7 = mysqli_fetch_array($con->query("SELECT MAX(k7) FROM tb_alternatif"));

                    $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                  } else {
                    //MIN & MAX (K1)
                    $mink1 = mysqli_fetch_array($con->query("SELECT MIN(k1) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk1 = mysqli_fetch_array($con->query("SELECT MAX(k1) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K2)
                    $mink2 = mysqli_fetch_array($con->query("SELECT MIN(k2) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk2 = mysqli_fetch_array($con->query("SELECT MAX(k2) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K3)
                    $mink3 = mysqli_fetch_array($con->query("SELECT MIN(k3) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk3 = mysqli_fetch_array($con->query("SELECT MAX(k3) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K4)
                    $mink4 = mysqli_fetch_array($con->query("SELECT MIN(k4) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk4 = mysqli_fetch_array($con->query("SELECT MAX(k4) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K5)
                    $mink5 = mysqli_fetch_array($con->query("SELECT MIN(k5) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk5 = mysqli_fetch_array($con->query("SELECT MAX(k5) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K6)
                    $mink6 = mysqli_fetch_array($con->query("SELECT MIN(k6) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk6 = mysqli_fetch_array($con->query("SELECT MAX(k6) FROM tb_alternatif where pengguna = '$data_user'"));
                    //MIN & MAX (K7)
                    $mink7 = mysqli_fetch_array($con->query("SELECT MIN(k7) FROM tb_alternatif where pengguna = '$data_user'"));
                    $maxk7 = mysqli_fetch_array($con->query("SELECT MAX(k7) FROM tb_alternatif where pengguna = '$data_user'"));

                    $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif where pengguna = '$data_user'") or die(mysqli_error($con));
                  }
                  if (mysqli_num_rows($sql_a) > 0) {
                    while ($data = mysqli_fetch_array($sql_a)) {
                  ?>
                      <?php
                      if (($maxk1['MAX(k1)'] - $mink1['MIN(k1)']) != 0) {
                        $a[$bb] = ($data['k1'] - $mink1['MIN(k1)']) / ($maxk1['MAX(k1)'] - $mink1['MIN(k1)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai dedault
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $a[$bb] = ($data['k1'] - $mink1['MIN(k1)']) / (($maxk1['MAX(k1)'] + 0.0001) - $mink1['MIN(k1)']);
                      } ?>

                      <?php
                      if (($maxk2['MAX(k2)'] - $mink2['MIN(k2)']) != 0) {
                        $b[$bb] = ($data['k2'] - $mink2['MIN(k2)']) / ($maxk2['MAX(k2)'] - $mink2['MIN(k2)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai dedault
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $b[$bb] = ($data['k2'] - $mink2['MIN(k2)']) / (($maxk2['MAX(k2)'] + 0.0001) - $mink2['MIN(k2)']);
                      } ?>

                      <?php
                      if (($maxk3['MAX(k3)'] - $mink3['MIN(k3)']) != 0) {
                        $c[$bb] = ($maxk3['MAX(k3)'] - $data['k3']) / ($maxk3['MAX(k3)'] - $mink3['MIN(k3)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai default
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $c[$bb] = ($maxk3['MAX(k3)'] - $data['k3']) / (($maxk3['MAX(k3)'] + 0.0001) - $mink3['MIN(k3)']);
                      } ?>

                      <?php
                      if (($maxk4['MAX(k4)'] - $mink4['MIN(k4)']) != 0) {
                        $d[$bb] = ($data['k4'] - $mink4['MIN(k4)']) / ($maxk4['MAX(k4)'] - $mink4['MIN(k4)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai dedault
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $d[$bb] = ($data['k4'] - $mink4['MIN(k4)']) / (($maxk4['MAX(k4)'] + 0.0001) - $mink4['MIN(k4)']);
                      } ?>

                      <?php
                      if (($maxk5['MAX(k5)'] - $mink5['MIN(k5)']) != 0) {
                        $e[$bb] = ($maxk5['MAX(k5)'] - $data['k5']) / ($maxk5['MAX(k5)'] - $mink5['MIN(k5)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai default
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $e[$bb] = ($maxk5['MAX(k5)'] - $data['k5']) / (($maxk5['MAX(k5)'] + 0.0001) - $mink5['MIN(k5)']);
                      } ?>




                      <?php
                      if (($maxk6['MAX(k6)'] - $mink6['MIN(k6)']) != 0) {
                        $f[$bb] = ($data['k6'] - $mink6['MIN(k6)']) / ($maxk6['MAX(k6)'] - $mink6['MIN(k6)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai default
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $f[$bb] = ($data['k6'] - $mink6['MIN(k6)']) / (($maxk6['MAX(k6)'] + 0.0001) - $mink6['MIN(k6)']);
                      } ?>



                      <?php
                      if (($maxk7['MAX(k7)'] - $mink7['MIN(k7)']) != 0) {
                        $g[$bb] = ($data['k7'] - $mink7['MIN(k7)']) / ($maxk7['MAX(k7)'] - $mink7['MIN(k7)']);
                      } else {
                        // Nilai pembagi adalah nol, lakukan penanganan error atau berikan nilai dedault
                        // 0.0001 adalah nilai kecil (epsilon) untuk menghindari dengan pembagi bernilai 0
                        $g[$bb] = ($data['k7'] - $mink7['MIN(k7)']) / (($maxk7['MAX(k7)'] + 0.0001) - $mink7['MIN(k7)']);
                      } ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?php echo number_format($a[$bb], 2); ?></td>
                        <td><?php echo number_format($b[$bb], 2); ?></td>
                        <td><?php echo number_format($c[$bb], 2); ?></td>
                        <td><?php echo number_format($d[$bb], 2); ?></td>
                        <td><?php echo number_format($e[$bb], 2); ?></td>
                        <td><?php echo number_format($f[$bb], 2); ?></td>
                        <td><?php echo number_format($g[$bb], 2); ?></td>
                      </tr>
                  <?php
                      $bb++;
                    }
                  } else {
                    echo "<tr> <td colspan=\"4\" align=\"center\">Mohon Masukkan Data Alternatif !</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header">
            <h3 class="box-title">Hasil X Normalisasi</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pendaftar</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <th>Hasil Akhir</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if ($data_level == "Admin") {
                    $qr = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                  } else {
                    $qr = mysqli_query($con, "SELECT * FROM tb_alternatif where pengguna = '$data_user'") or die(mysqli_error($con));
                  }
                  while ($data = mysqli_fetch_array($qr)) {

                    $sa = $a[$no] * $w[1];
                    $sb = $b[$no] * $w[2];
                    $sc = $c[$no] * $w[3];
                    $sd = $d[$no] * $w[4];
                    $se = $e[$no] * $w[5];
                    $sf = $f[$no] * $w[6];
                    $sg = $g[$no] * $w[7];
                  ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $data['nama'] ?></td>
                      <td><?php echo number_format($sa, 2); ?></td>
                      <td><?php echo number_format($sb, 2); ?></td>
                      <td><?php echo number_format($sc, 2); ?></td>
                      <td><?php echo number_format($sd, 2); ?></td>
                      <td><?php echo number_format($se, 2); ?></td>
                      <td><?php echo number_format($sf, 2); ?></td>
                      <td><?php echo number_format($sg, 2); ?></td>
                      <td><?php $re = $sa + $sb + $sc + $sd + $se + $sf + $sg;
                          echo number_format($re, 2); ?></td>
                    </tr>
                  <?php $no++;
                  } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header">
            <h3 class="box-title">Hasil Akhir</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="box-body">
            <div class="table-responsive m-t-40">
              <?php
              if ($data_user == "tamu") { ?>
                <table class="table table-bordered table-striped">
                <?php
              } else { ?>
                  <table id="example1" class="table table-bordered table-striped">
                  <?php
                }
                  ?>
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Peternak</th>
                      <th>Harga</th>
                      <th>Nilai</th>
                      <th>Ranking</th>
                    </tr>
                  </thead>
                  <tbody id="tabel-data">
                    <?php
                    $no = 1;
                    $rank = 1;
                    if ($data_level == "Admin") {
                      $qr = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                    } else {
                      $qr = mysqli_query($con, "SELECT * FROM tb_alternatif where pengguna = '$data_user'") or die(mysqli_error($con));
                    }
                    while ($data = mysqli_fetch_array($qr)) {
                      $sa = $a[$no] * $w[1];
                      $sb = $b[$no] * $w[2];
                      $sc = $c[$no] * $w[3];
                      $sd = $d[$no] * $w[4];
                      $se = $e[$no] * $w[5];
                      $sf = $f[$no] * $w[6];
                      $sg = $g[$no] * $w[7];

                      $re = $sa + $sb + $sc + $sd + $se + $sf + $sg;
                      $data_array[$no] = $re;

                      $format_rupiah = "Rp " . number_format($data['harga'], 0, ',', '.');
                    ?>
                      <tr>
                        <td><?= $no ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $format_rupiah ?></td>
                        <td><?= number_format($re, 2) ?></td>
                        <td></td>
                      </tr>
                    <?php $no++;
                      $rank++;
                    } // Urutkan nilai rank dari yang terbesar ke yang terkecil
                    ?>
                  </tbody>
                  </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include_once('../_footer.php'); ?>