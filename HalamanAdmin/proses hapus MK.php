<?php
	include "koneksi.php";
	$kode_mk=$_GET["id"];
	
	$sql="delete from tb_matakuliah where kode_mk='$kode_mk'";
	
	
	if($res=mysqli_query($link, $sql)){
		?><script>alert('Hapus MK sukses');</script><?php	
	}else{
		?><script>alert('Hapus MK gagal');</script><?php	
	}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtMK.php">';
	
?>