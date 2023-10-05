<?php
$chk = $_POST['checked'];
if (!isset($chk)) {
  echo "<script>alert('Tidak ada data yang dipilih'); window.location='data.php';</script>";
} else {
  include_once('../_header.php'); ?>

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
                                <select name="k1[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="40" <?= ($data['k1'] === '40') ? 'selected' : '' ?>>Kaki Sehat dan Kuat</option>
                                  <option value="30" <?= ($data['k1'] === '30') ? 'selected' : '' ?>>Kuku Kaki Patah Rusak</option>
                                  <option value="30" <?= ($data['k1'] === '30') ? 'selected' : '' ?>>Kaki Luka</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k2[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="50" <?= ($data['k2'] === '50') ? 'selected' : '' ?>>Punggung Datar</option>
                                  <option value="25" <?= ($data['k2'] === '25') ? 'selected' : '' ?>>Punggung Luka</option>
                                  <option value="25" <?= ($data['k2'] === '25') ? 'selected' : '' ?>>Punggung Kering Bersisik</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k3[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="70" <?= ($data['k3'] === '70') ? 'selected' : '' ?>>Telinga Sehat Proporsi</option>
                                  <option value="30" <?= ($data['k3'] === '30') ? 'selected' : '' ?>>Telinga Luka Infeksi Radang</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k4[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="50" <?= ($data['k4'] === '50') ? 'selected' : '' ?>>Ekor Panjang Tebal</option>
                                  <option value="25" <?= ($data['k4'] === '25') ? 'selected' : '' ?>>Ekor Luka atau keropeng</option>
                                  <option value="25" <?= ($data['k4'] === '25') ? 'selected' : '' ?>>Ekor Kecil</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k5[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="50" <?= ($data['k5'] === '50') ? 'selected' : '' ?>>Punuk Besar Bulat</option>
                                  <option value="25" <?= ($data['k5'] === '25') ? 'selected' : '' ?>>Punuk Luka Keropeng</option>
                                  <option value="25" <?= ($data['k5'] === '25') ? 'selected' : '' ?>>Punuk Tidak Ada</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k6[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="40" <?= ($data['k6'] === '40') ? 'selected' : '' ?>>Bibir Sehat Basah</option>
                                  <option value="30" <?= ($data['k6'] === '30') ? 'selected' : '' ?>>Bibir Luka Keropeng</option>
                                  <option value="30" <?= ($data['k6'] === '30') ? 'selected' : '' ?>>Bibir Infeksi</option>
                                  <!-- Add more options if needed -->
                                </select>
                              </td>
                              <td>
                                <select name="k7[]" class="form-control" required>
                                  <!-- Add options for the combobox -->
                                  <option value="50" <?= ($data['k7'] === '50') ? 'selected' : '' ?>>Pantat Bulat Proporsi</option>
                                  <option value="25" <?= ($data['k7'] === '25') ? 'selected' : '' ?>>Pantat Luka Keropeng</option>
                                  <option value="25" <?= ($data['k7'] === '25') ? 'selected' : '' ?>>Pantat Infeksi</option>
                                  <!-- Add more options if needed -->
                                </select>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                  Informasi
                </button>
                <a href="data.php" class="btn btn-default pull-right">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include_once('../_footer.php');
} ?>