<?php
$chk = $_POST['checked'];
if (!isset($chk)) {
  echo "<script>alert('Tidak ada data yang dipilih'); window.location='data.php';</script>";
} else {
  include_once('../_header.php'); ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Kriteria
        <small>Kriteria</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Alternatif</h3>
            </div>
            <form action="proses.php" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12 table-responsive">
                    <input type="hidden" name="total" value="<?= @$_POST['count_add'] ?>">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
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
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($chk as $id) {
                          $sql_a = mysqli_query($con, "SELECT * FROM tb_alternatif WHERE id_alternatif = '$id'") or die(mysqli_error($con));
                          while ($data = mysqli_fetch_array($sql_a)) { ?>
                            <tr>
                              <td><?php echo $no++; ?>
                              </td>
                              <td>
                                <input type="hidden" name="id[]" value="<?= $data['id_alternatif'] ?>" class="form-control" required>
                                <input type="text" name="nama[]" value="<?= $data['nama'] ?>">
                              </td>
                              <td>
                                <input type="text" name="harga[]" value="<?= $data['harga'] ?>">
                              </td>
                              <td>
                                <input type="text" name="k1[]" value="<?= $data['k1'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k2[]" value="<?= $data['k2'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k3[]" value="<?= $data['k3'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k4[]" value="<?= $data['k4'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k5[]" value="<?= $data['k5'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k6[]" value="<?= $data['k6'] ?>" class="form-control" required>
                              </td>
                              <td>
                                <input type="text" name="k7[]" value="<?= $data['k7'] ?>" class="form-control" required>
                              </td>
                              <?php
                              if ($data_level == "Admin") { ?>
                                <td>
                                  <input type="text" name="pengguna[]" value="<?= $data['pengguna'] ?>" class="form-control" required readonly>
                                </td>
                              <?php
                              } else { ?>
                                <td>
                                  <input type="hidden" name="pengguna[]" value="<?= $data['pengguna'] ?>" class="form-control" required>
                                </td>
                              <?php
                              } ?>
                            </tr>
                        <?php
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" name="edit" value="Simpan semua" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include_once('../_footer.php');
} ?>