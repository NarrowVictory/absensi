<?php
	include "koneksi.php";
	$id_kelas=$_GET["id"];
	
	$sql="delete from kelas where id_kelas='$id_kelas'";
	
	
	if($res=mysqli_query($link, $sql)){
		?><script>alert('Hapus data Kelas sukses');</script><?php	
	}else{
		?><script>alert('Hapus data Kelas gagal');</script><?php	
	}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtkelas.php">';
	
?>