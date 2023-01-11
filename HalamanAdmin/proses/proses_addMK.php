<?php
	include "koneksi.php";
	
	$id_kelas = $_POST["kode_mk"];
	$nama = $_POST["namamk"];
	$dosen = $_POST["dosen"];
	$semester = $_POST["semester"];
	
	if(empty($id_kelas) ||  empty($nama) || empty($dosen)){
		?> <script>alert('Ada field yang belum diisi');</script><?php
	}else{
		if($sql=mysqli_query($link, "insert into tb_matakuliah values('$id_kelas','$nama', '$dosen', '$semester')")){
		?> <script>alert('Tambah MK berhasil');history.go(-1);</script><?php
		
		}else{
		?> <script>alert('Tambah MK gagal. ID Kelas ada yang sama');history.go(-1);</script><?php			echo $sql;
		}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tmbmk.php">';
	}
?>