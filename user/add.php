<?php include_once('../_header.php'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pengguna
            <small>Tambah Pengguna</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Data Pengguna</h3>
                    </div>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama Pengguna" class="col-sm-2 control-label">Nama Pengguna</label>
                                <div class="col-sm-10">
                                    <input name="nama" type="text" class="form-control" placeholder="Nama Pengguna">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" id="myInput" type="password" class="form-control" placeholder="Password"><br>
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="level" class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="level" class="form-control col-sm-10" id="level">
                                        <option value="Admin">Admin</option>
                                        <option value="pengguna">Pengguna</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="tambah" class="btn btn-info">Simpan</button>
                            <a href="user.php" class="btn btn-default pull-right">Batal</a>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once('../_footer.php'); ?>