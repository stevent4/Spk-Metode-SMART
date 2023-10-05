<?php include_once('../_header.php'); ?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Informasi Untuk Kriteria</h5>
      </div>
      <div class="modal-body">
        <table class="table table-hover" style="border: 1px solid black; background-color: #96c5e1;">
          <thead>
            <tr>
              <th scope="col ">Kode</th>
              <th scope="col">Kriteria</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">K1</th>
              <td>Kaki</td>
            </tr>
            <tr>
              <th scope="row">K2</th>
              <td>Punggung</td>
            </tr>
            <tr>
              <th scope="row">K3</th>
              <td>Telinga</td>
            </tr>
            <tr>
              <th scope="row">K4</th>
              <td>Ekor</td>
            </tr>
            <tr>
              <th scope="row">K5</th>
              <td>Punuk</td>
            </tr>
            <tr>
              <th scope="row">K6</th>
              <td>Bibir</td>
            </tr>
            <tr>
              <th scope="row">K7</th>
              <td>Pantat</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
      </div>
    </div>
  </div>
</div>

<div class="content-wrapper">
  <section class="content-header">
    <div class="pull-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Informasi
      </button>
    </div>
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