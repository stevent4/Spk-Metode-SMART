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
                    $sql_k = mysqli_query($con, "SELECT * FROM tb_user WHERE id_user = '$id'") or die(mysqli_error($con));
                    $dt = mysqli_fetch_array($sql_k);
                    ?>
                    <form action="proses.php" method="post" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="Nama Pengguna" class="col-sm-2 control-label">Nama Pengguna</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="id" value="<?= $dt['id_user'] ?>">
                                    <input name="nama" value="<?= $dt['nama_user'] ?>" type="text" class="form-control" placeholder="Nama Pengguna">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                    <input name="username" value="<?= $dt['username'] ?>" type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input name="password" id="myInput" value="<?= $dt['password'] ?>" type="password" class="form-control" placeholder="Password"><br>
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Level" class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="level" class="form-control">
                                        <?php
                                        $ds = $dt['level'];
                                        if ($ds == 'Admin') { ?>
                                            <option value="Level">Level</option>
                                            <option value="Admin">Admin</option>
                                            <option value='pengguna'>Pengguna</option>
                                        <?php } else if ($ds == 'pengguna') { ?>
                                            <option value="Level">Level</option>
                                            <option value='pengguna'>Pengguna</option>
                                            <option value="Admin">Admin</option>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="edit" class="btn btn-info">Simpan</button>
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