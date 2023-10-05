<?php
require_once "_config/config.php";
if (!isset($_SESSION['user'])) {
  header("Location: auth/login.php");
} else {
  $data_id = $_SESSION["id"];
  $data_nama = $_SESSION["user"];
  $data_user = $_SESSION["username"];
  $data_pass = $_SESSION["pass"];
  $data_level = $_SESSION["level"];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK Metode SMART</title>
  <link rel="shortcut icon" href="img/cow.ico" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="/smart/_assets/css.css">
  <!-- Font Awesome -->
  <link rel=" stylesheet" href="/smart/_assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/smart/_assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/smart/_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link href="https://cdn.datatables.net/v/bs/jszip-2.5.0/dt-1.13.3/b-2.3.5/b-colvis-2.3.5/b-html5-2.3.5/b-print-2.3.5/datatables.min.css" rel="stylesheet" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/smart/_assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/smart/_assets/dist/css/skins/_all-skins.min.css">

</head>

<body class="hold-transition skin-purple sidebar-mini">

  <div class="wrapper">
    <header class="main-header">
      <a href="" class="logo text-decoration-none">
        <span class="logo-mini"><b>S</b>PK</span>
        <span class="logo-lg"><b>SPK</b>SMART</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle text-decoration-none" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

      </nav>
    </header>
    <aside class="main-sidebar">
      <section class="sidebar">
        <ul id="nav" class="sidebar-menu" data-widget="tree">
          <?php
          if ($data_level == "Admin") { ?>
            <li class="header">
              <h5 class="text-center text-white" style="color: #ecf0f5;"><?php echo $data_nama; ?></h5>
            </li>
            <li><a href="../dashboard/index.php" class="text-decoration-none"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class=" dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-folder"></i>
                <span>Data Informasi<i class="fa fa-angle-right"></i></span>
              </a>
              <div class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink" style="background-color: #222d32;">
                <ul>
                  <li><a href="/smart/dashboard/kriteria.php" class="text-decoration-none "><i class="fa fa-folder"></i> <span>Kriteria</span></a></li>
                  <li><a href="/smart/dashboard/alternatif.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
                </ul>
              </div>
            </li>
            <li><a href="../kriteria/data.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Kriteria</span></a></li>
            <li><a href="../alternatif/data.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
            <li><a href="../hasil/hasil.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Hasil</span></a></li>
            <li><a href="../user/user.php" class="text-decoration-none"><i class="fa fa-users"></i> <span>Pengguna</span></a></li>
            <li><a href="../auth/logout.php" class="text-decoration-none"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          <?php
          } else if ($data_level == "pengguna" && $data_nama != "Tamu") { ?>
            <li class="header">
              <h5 class="text-center text-white" style="color: #ecf0f5;"><?php echo $data_nama; ?></h5>
            </li>
            <li><a href="../dashboard/index.php" class="text-decoration-none"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class=" dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-folder"></i>
                <span>Data Informasi<i class="fa fa-angle-right"></i></span>
              </a>
              <div class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink" style="background-color: #222d32;">
                <ul>
                  <li><a href="/smart/dashboard/kriteria.php" class="text-decoration-none "><i class="fa fa-folder"></i> <span>Kriteria</span></a></li>
                  <li><a href="/smart/dashboard/alternatif.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
                </ul>
              </div>
            </li>
            <!-- <li><a href="../kriteria/data.php"><i class="fa fa-folder"></i> <span>Kriteria</span></a></li> -->
            <li><a href="../alternatif/data.php"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
            <li><a href="../hasil/hasil.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Hasil</span></a></li>
            <!-- <li><a href="../user/user.php"><i class="fa fa-users"></i> <span>Pengguna</span></a></li> -->
            <li><a href="../auth/logout.php" class="text-decoration-none"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          <?php
          } else if ($data_nama == "Tamu") { ?>
            <li class="header">
              <h5 class="text-center text-white" style="color: #ecf0f5;"><?php echo $data_nama; ?></h5>
            </li>
            <li><a href="../dashboard/index.php" class="text-decoration-none"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class=" dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-folder"></i>
                <span>Data Informasi<i class="fa fa-angle-right"></i></span>
              </a>
              <div class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink" style="background-color: #222d32;">
                <ul>
                  <li><a href="/smart/dashboard/kriteria.php" class="text-decoration-none "><i class="fa fa-folder"></i> <span>Kriteria</span></a></li>
                  <li><a href="/smart/dashboard/alternatif.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
                </ul>
              </div>
            </li>
            <!-- <li><a href="../kriteria/data.php"><i class="fa fa-folder"></i> <span>Kriteria</span></a></li> -->
            <!-- <li><a href="../alternatif/data.php"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li> -->
            <li><a href="../hasil/hasil.php" class="text-decoration-none"><i class="fa fa-folder"></i> <span>Hasil</span></a></li>
            <!-- <li><a href="../user/user.php"><i class="fa fa-users"></i> <span>Pengguna</span></a></li> -->
            <li><a href="../auth/logout.php" class="text-decoration-none"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
          <?php
          }
          ?>
        </ul>
      </section>
    </aside>