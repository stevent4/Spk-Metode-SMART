<?php
require_once "../_config/config.php";

unset($_SESSION['user']);
header("Location: login.php");
