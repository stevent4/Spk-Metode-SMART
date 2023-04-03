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
          <form action="add.php" method="post" class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="Banyak data yang akan di tambah" class="col-sm-3 control-label">Banyak data yang akan di tambah</label>
                <div class="col-sm-9">
                  <input type="text" name="count_add" id="count_add" value="" maxlength="2" pattern="[0-9]" class="form-control" placeholder="Banyak data yang akan di tambah" required>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" name="generate" value="Generate" class="btn btn-success">
              <a href="data.php" class="btn btn-default pull-right">Kembali</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include_once('../_footer.php'); ?>
