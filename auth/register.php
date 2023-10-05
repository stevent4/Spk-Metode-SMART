<?php
require_once "../_config/config.php";
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
        // Menangani pengecekan saat tombol register ditekan
        if (isset($_POST['register'])) {
            // Mengambil data dari formulir pendaftaran
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $level = "pengguna";

            // Memastikan koneksi berhasil
            if (mysqli_connect_errno()) {
                echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
                exit();
            }

            // Menghindari serangan SQL Injection
            $fullname = mysqli_real_escape_string($con, $fullname);
            $username = mysqli_real_escape_string($con, $username);
            $password = mysqli_real_escape_string($con, $password);
            $level = mysqli_real_escape_string($con, $level);

            // Query untuk memasukkan data ke dalam tabel user
            $sql = mysqli_query($con, "INSERT INTO tb_user VALUES ('','$fullname','$username','$password','$level')");

            // Menjalankan query
            if ($sql) {
                // Pendaftaran sukses, lakukan tindakan selanjutnya
                // Misalnya, tampilkan pesan sukses atau redirect ke halaman lain
                echo "<script>alert('" . " Berhasil Melakukan Pendaftaran'); window.location='login.php';</script>";
            } else {
                echo "<script>alert('Gagal Melakukan Pendaftaran, coba lagi'); window.location='register.php';</script>";
            }

            // Menutup koneksi database
            mysqli_close($con);
        }
        ?>

        <div class="login-box-body" style="border-radius: 26px; box-shadow: 5px 3px 15px 3px rgba(0, 0, 0, 0.55);">
            <h3 class="text-center">Halaman Pendaftaran</h3>
            <form action="" method="post">
                <div class="form-group has-feedback">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nama Lengkap" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" id="password-toggle">
                            <label for="password-toggle" class="password-toggle-label">Tampilkan Sandi</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <button type="submit" name="register" class="btn btn-primary btn-block btn-flat">DAFTAR</button>
                    </div>
                    <div class="col-xs-6">
                        <a href="login.php" class="btn btn-danger btn-block btn-flat">KEMBALI</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="/smart/_assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/smart/_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

<script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');
    const passwordToggleLabel = document.querySelector('.password-toggle-label');

    // Menambahkan event listener untuk checkbox
    passwordToggle.addEventListener('change', function() {
        if (passwordToggle.checked) {
            passwordInput.type = 'text';
            passwordToggleLabel.textContent = 'Sembunyikan Sandi';
        } else {
            passwordInput.type = 'password';
            passwordToggleLabel.textContent = 'Tampilkan Sandi';
        }
    });
</script>