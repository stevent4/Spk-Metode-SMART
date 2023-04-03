<?php include_once('../_header.php'); ?>
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
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Karyawan</h3>
          </div>
          <form action="proses.php" method="post" class="form-horizontal">
            <div class="box-header">
              <a href="generate.php" class="btn btn-info">Tambah lagi</a>
            </div>
            <div class="box-body">
              <div class="form-group">
                <div class="col-sm-12">
                  <input type="hidden" name="total" value="<?= @$_POST['count_add'] ?>">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
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
                      for ($i = 1; $i <= $_POST['count_add']; $i++) { ?>
                        <tr>
                          <td><?php echo $no; ?>
                          </td>
                          <td>
                            <input type="text" name="nama-<?= $i ?>" class="form-control" required autofocus>
                          </td>
                          <td>
                            <input type="text" name="harga-<?= $i ?>" class="form-control" required autofocus>
                          </td>
                          <td>
                            <input type="text" name="k1-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k2-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k3-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k4-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k5-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k6-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="text" name="k7-<?= $i ?>" class="form-control">
                          </td>
                          <td>
                            <input type="hidden" name="pengguna-<?= $i ?>" value="<?php echo $data_user ?>" class="form-control">
                          </td>
                        </tr>
                      <?php
                        $no++;
                      }
                      ?>
                    </tbody>
                  </table>
                  <caption><i>K1 = kaki, K2 = punggung, K3 = telinga, K4 = ekor, k5 = punuk, K6 = bibir, K7 = pantat</i></caption><br>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" name="tambah" value="Simpan semua" class="btn btn-success">
              <a href="data.php" class="btn btn-default pull-right">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include_once('../_footer.php'); ?>