<?php
require_once "_config/config.php";
if(isset($_SESSION['user'])) {
  header("Location: dashboard/index.php");
  die();
} else {
  header("Location: auth/login.php");
  die();
}
?>
