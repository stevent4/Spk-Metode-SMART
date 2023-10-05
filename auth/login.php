<?php require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
  header("Location: ../index.php");
} else {
?>
  <!DOCTYPE html>

  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK Metode SMART</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/smart/_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/smart/_assets/css.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/smart/_assets/dist/css/AdminLTE.min.css">
  </head>

  <body class="hold-transition login-p" style="background-image: url(' ../img/sapi.jpg'); background-size: cover; background-repeat: no-repeat; overflow: hidden;">
    <div class="login-box">
      <div class="login-logo">
        <span class="text-white" href="#"><b>SPK</b>Sapi Berkualitas Metode <b>SMART</b></span>
      </div>
      <!-- /.login-logo -->
      <?php
      if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
        $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
        $data = mysqli_fetch_array($sql_login, MYSQLI_BOTH);

        // Ambil Data True or False
        $cek = mysqli_num_rows($sql_login);
        if ($cek > 0) {
          $_SESSION['id'] = $data['id_user'];
          $_SESSION['user'] = $data['nama_user'];
          $_SESSION['username'] = $data['username'];
          $_SESSION['pass'] = $data['password'];
          $_SESSION['level'] = $data['level'];
          header("Location: ../dashboard/index.php");
        } else { ?>
          <div class="row">
            <div class="col-lg-12 ">
              <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong>Login gagal</strong> Username / password salah
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>

      <div class="login-box-body" style="border-radius: 26px; box-shadow: 5px 3px 15px 3px rgba(0, 0, 0, 0.55);">
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="user" class="form-control" placeholder="Username" autofocus>
            <input type="hidden" name="username" class="form-control" placeholder="Username" value="tamu" autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <input type="hidden" name="password" class="form-control" value="tamu" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <div class="col-xs-6">
              <a href="register.php" class="btn btn-success btn-block btn-flat">Register</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="/smart/_assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/smart/_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>

  </html>
<?php
}
?>