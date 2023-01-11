<?php
	include "koneksi.php";
	$kd_mk = $_POST["kode_mk"];
	$namaMK = $_POST["namamk"];
	$kd_guru = $_POST["dosen"];
	$smt = $_POST["semester"];

	$_SESSION['kd_mk1'] = $_POST["kode_mk"];
	$kode = $_SESSION['kd_mk1'];
	
	if((empty($namaMK)) || (empty($kd_guru)) || (empty($smt))){
		?> <script>alert('Ada field yang belum diisi');</script><?php
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtMK.php">';
	}else{
		if($sql=mysqli_query($link, "update tb_matakuliah set nama_mk='$namaMK' , kd_guru='$kd_guru' , semester='$smt' where kode_mk='$kd_mk'")){
		?> <script>alert('Edit MK berhasil');</script><?php
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtMK.php">';		
		}else{
		?> <script>alert('Edit MK gagal');history.go(-1);</script><?php			
		}

	}

	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtMK.php">';
	
?>