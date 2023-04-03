<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="pull-right">
      <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
      <a href="generate.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"> Tambah Data</i></a>
    </div>
    <h1>
      Alternatif
      <small>Alternatif</small>
    </h1>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Alternatif</h3>
          </div>
          <!-- /.box-header -->
          <form method="post" name="proses">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Peternak</th>
                    <th>harga</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                    <th>K6</th>
                    <th>K7</th>
                    <?php
                    if ($data_level == "Admin") { ?>
                      <th>Pengguna</th>
                    <?php
                    } ?>
                    <th>
                      <center>
                        <input type="checkbox" id="select_all" value="">
                      </center>
                    </th>
                  </tr>
                </thead>
                <?php
                if ($data_level == "Admin") { ?>
                  <tbody>
                    <?php
                    $no = 1;
                    $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif") or die(mysqli_error($con));
                    if (mysqli_num_rows($sql_a) > 0) {
                      while ($data = mysqli_fetch_array($sql_a)) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $data['nama'] ?></td>
                          <?php $format_rupiah = "Rp " . number_format($data['harga'], 0, ',', '.');
                          echo "<td>{$format_rupiah}</td>"; ?>
                          <td><?= $data['k1'] ?></td>
                          <td><?= $data['k2'] ?></td>
                          <td><?= $data['k3'] ?></td>
                          <td><?= $data['k4'] ?></td>
                          <td><?= $data['k5'] ?></td>
                          <td><?= $data['k6'] ?></td>
                          <td><?= $data['k7'] ?></td>
                          <td><?= $data['pengguna'] ?></td>
                          <td style="width: 10px" align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_alternatif'] ?>">
                          </td>
                        </tr>
                    <?php
                      }
                    } else {
                      echo "<tr> <td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                    }
                    ?>
                  </tbody>
                <?php
                } else if ($data_level == "pengguna" && $data_nama != "Tamu") { ?>
                  <tbody>
                    <?php
                    $no = 1;
                    $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif WHERE pengguna = '$data_user'") or die(mysqli_error($con));
                    if (mysqli_num_rows($sql_a) > 0) {
                      while ($data = mysqli_fetch_array($sql_a)) { ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $data['nama'] ?></td>
                          <?php $format_rupiah = "Rp " . number_format($data['harga'], 0, ',', '.');
                          echo "<td>{$format_rupiah}</td>"; ?>
                          <td><?= $data['k1'] ?></td>
                          <td><?= $data['k2'] ?></td>
                          <td><?= $data['k3'] ?></td>
                          <td><?= $data['k4'] ?></td>
                          <td><?= $data['k5'] ?></td>
                          <td><?= $data['k6'] ?></td>
                          <td><?= $data['k7'] ?></td>
                          <td style="width: 10px" align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_alternatif'] ?>">
                          </td>
                        </tr>
                    <?php
                      }
                    } else {
                      echo "<tr> <td colspan=\"4\" align=\"center\">Mohon masukkan data !</td></tr>";
                    }
                    ?>
                  </tbody>
                <?php
                }
                ?>
              </table>
            </div>
          </form>
        </div>
        <div class="pull-right">
          <button type="button" class="btn btn-warning" onclick="edit()"><i class="glyphicon glyphicon-edit"></i> Edit</button>
          <button type="button" class="btn btn-danger" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include_once('../_footer.php'); ?>