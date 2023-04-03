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
        <div class="box box-primary box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Data Kriteria</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kriteria</th>
                  <th>Nilai</th>
                  <th>W</th>
                  <th style="width: 10px">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $total_n = 0;
                $tw = 0;
                $sql_k = mysqli_query($con, "SELECT * FROM tb_kriteria") or die(mysqli_error($con));
                while ($dt = mysqli_fetch_array($sql_k)) {
                  $nama_kriteria = $dt['nama_kriteria'];
                  $nilai_kriteria = $dt['nilai_kriteria'];
                  $total_n = $total_n + $nilai_kriteria;
                }
                $sql_k2 = mysqli_query($con, "SELECT * FROM tb_kriteria") or die(mysqli_error($con));
                while ($dt2 = mysqli_fetch_array($sql_k2)) {
                  $nama_kriteria2 = $dt2['nama_kriteria'];
                  $nilai_kriteria2 = $dt2['nilai_kriteria'];
                ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nama_kriteria2; ?></td>
                    <td><?php echo $nilai_kriteria2; ?></td>
                    <td>
                      <?php
                      $w = 0;
                      $w = $nilai_kriteria2 / $total_n;
                      $tw = $tw + $w;
                      echo number_format($w, 2);
                      ?>
                    </td>
                    <td class="text-center">
                      <a href="edit.php?id=<?= $dt2['id_kriteria'] ?>" class="btn btn-primary btn-block"> <i class="glyphicon glyphicon-edit"></i> Edit</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
                <tr>
                  <td style="width: 10px">Jumlah</td>
                  <td></td>
                  <td><?php echo $total_n; ?></td>
                  <td><?php echo $tw; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include_once('../_footer.php'); ?>