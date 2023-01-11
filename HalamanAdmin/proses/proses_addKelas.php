<?php
	include "koneksi.php";
	
	$id_kelas=$_POST["id_kelas"];
	$nama=$_POST["nama"];
	
	if(empty($id_kelas) ||  empty($nama)){
		?> <script>alert('Ada field yang belum diisi');</script><?php
	}else{
		if($sql=mysqli_query($link, "insert into kelas values('$id_kelas','$nama',1, 'P2')")){
		?> <script>alert('Tambah kelas berhasil');history.go(-1);</script><?php
		
		}else{
		?> <script>alert('Tambah kelas gagal. ID Kelas ada yang sama');history.go(-1);</script><?php			echo $sql;
		}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tmbkelas.php">';
	}
?>