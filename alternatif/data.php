<?php include_once('../_header.php'); ?>

<!-- Modal -->

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Informasi Untuk Dasar Penilaian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
        <h3 class="text-center">Informasi Kriteria</h3>
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
        <h3 class="text-center">Dasar Penilaian</h3>
        <table class="table table-hover" style="border: 1px solid black; background-color: #96c5e1;">
          <thead>
            <tr>
              <th scope="col">Kode</th>
              <th scope="col">Kriteria</th>
              <th scope="col">Sub-Kriteria</th>
              <th scope="col">Bobot (%)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">K1</th>
              <td>Kaki</td>
              <td>Kaki Sehat dan Kuat</td>
              <td>40</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Kuku Kaki Patah Rusak</td>
              <td>30</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Kaki Luka</td>
              <td>30</td>
            </tr>
            <tr>
              <th scope="row">K2</th>
              <td>Punggung</td>
              <td>Punggung Datar</td>
              <td>50</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Punggung Luka</td>
              <td>25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Punggung Kering Bersisik</td>
              <td>25</td>
            </tr>
            <tr>
              <th scope="row">K3</th>
              <td>Telinga</td>
              <td>Telinga Sehat Proporsi</td>
              <td>70</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Telinga Luka Infeksi Radang</td>
              <td>30</td>
            </tr>
            <tr>
              <th scope="row">K4</th>
              <td>Ekor</td>
              <td>Ekor Panjang Tebal</td>
              <td>50</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Ekor Luka atau keropeng</td>
              <td>25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Ekor Kecil</td>
              <td>25</td>
            </tr>
            <tr>
              <th scope="row">K5</th>
              <td>Punuk</td>
              <td>Punuk Besar Bulat</td>
              <td>50</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Punuk Luka Keropeng</td>
              <td>25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Punuk Tidak Ada</td>
              <td>25</td>
            </tr>
            <tr>
              <th scope="row">K6</th>
              <td>Bibir</td>
              <td>Bibir Sehat Basah</td>
              <td>40</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Bibir Luka Keropeng</td>
              <td>30</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Bibir Infeksi</td>
              <td>30</td>
            </tr>
            <tr>
              <th scope="row">K7</th>
              <td>Pantat</td>
              <td>Pantat Bulat Proporsi</td>
              <td>50</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Pantat Luka Keropeng</td>
              <td>25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Pantat Infeksi</td>
              <td>25</td>
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
      <button type="button" class="btn btn-default" onclick="window.location.reload();" name="button"> <span class="glyphicon glyphicon-refresh"></span> </button>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
        Informasi
      </button>
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