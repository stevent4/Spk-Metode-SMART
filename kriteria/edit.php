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
            <h3 class="box-title">Edit Kriteria</h3>
          </div>
          <?php
          $id = @$_GET['id'];
          $sql_k = mysqli_query($con, "SELECT * FROM tb_kriteria WHERE id_kriteria = '$id'") or die (mysqli_error($con));
          $dt = mysqli_fetch_array($sql_k);
          ?>
          <form action="proses.php" method="post" class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="Kriteria" class="col-sm-2 control-label">Nama Kriteria</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?= $dt['id_kriteria']?>">
                  <input name="nama_kriteria" value="<?= $dt['nama_kriteria']?>" type="text" class="form-control" placeholder="Kriteria">
                </div>
              </div>
              <div class="form-group">
                <label for="Nilai Kriteria" class="col-sm-2 control-label">Nilai Kriteria</label>
                <div class="col-sm-10">
                  <input name="nilai_kriteria" value="<?= $dt['nilai_kriteria']?>" type="text" class="form-control" placeholder="Bobot">
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" name="edit" class="btn btn-info">Simpan</button>
              <a href="data.php" class="btn btn-default pull-right">Batal</a>
            </div>
            <!-- /.box-footer -->
          </form>
        </div>
      </div>
    </div>
  </section>
  </div>
<?php include_once('../_footer.php'); ?>
