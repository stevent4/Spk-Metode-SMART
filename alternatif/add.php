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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                Informasi
              </button>
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
                            <select name="k1-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="40">Kaki Sehat dan Kuat</option>
                              <option value="30">Kuku Kaki Patah Rusak</option>
                              <option value="30">Kaki Luka</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k2-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="50">Punggung Datar</option>
                              <option value="25">Punggung Luka</option>
                              <option value="25">Punggung Kering Bersisik</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k3-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="70">Telinga Sehat Proporsi</option>
                              <option value="30">Telinga Luka Infeksi Radang</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k4-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="50">Ekor Panjang Tebal</option>
                              <option value="25">Ekor Luka atau keropeng</option>
                              <option value="25">Ekor Kecil</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k5-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="50">Punuk Besar Bulat</option>
                              <option value="25">Punuk Luka Keropeng</option>
                              <option value="25">Punuk Tidak Ada</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k6-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="40">Bibir Sehat Basah</option>
                              <option value="30">Bibir Luka Keropeng</option>
                              <option value="30">Bibir Infeksi</option>
                              <!-- Add more options if needed -->
                            </select>
                          </td>
                          <td>
                            <select name="k7-<?= $i ?>" class="form-control">
                              <!-- Add options for the combobox -->
                              <option value="0">Pilih</option>
                              <option value="50">Pantat Bulat Proporsi</option>
                              <option value="25">Pantat Luka Keropeng</option>
                              <option value="25">Pantat Infeksi</option>
                              <!-- Add more options if needed -->
                            </select>
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