<?php
	require_once "../_config/config.php";

	if(isset($_POST['edit'])) {
			$id = $_POST['id'];
			$nama = $_POST['nama_kriteria'];
			$nilai = $_POST['nilai_kriteria'];
			mysqli_query($con, "UPDATE tb_kriteria SET nama_kriteria = '$nama', nilai_kriteria = '$nilai' WHERE id_kriteria = '$id'") or die (mysqli_error());
			echo "<script>window.location='data.php';</script>";
		}
?>
