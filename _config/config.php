<?php
date_default_timezone_set('Asia/Jakarta');
session_start();
$con = mysqli_connect('localhost', 'root', '', 'spksmart');
if(mysqli_connect_error()) {
  echo mysqli_connect_error();
}

?>
