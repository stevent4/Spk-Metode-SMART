<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
//memulai session
session_start();

//cek apakah user sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}
?>

<div class="jumbotron">
    <center>
        <h1>Hallo <?php echo $_SESSION['username']; ?></h1>
        <p>Anda Adalah <?php $_SESSION['level']; ?></p>
        <a href="logout.php" class="btn btn-large btn-danger">Logout</a>
    </center>
</div>