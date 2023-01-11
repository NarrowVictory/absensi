<?php
	include "koneksi.php";
	
	$id_kelas=$_POST["id_kelas"];
	$nama=$_POST["nama"];
	
	if(empty($nama)){
		?> <script>alert('Ada field yang belum diisi');</script><?php
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edtkelas.php?id=$id_kelas">';
	}else{
		if($sql=mysqli_query($link, "update kelas set nama_kelas='$nama' where id_kelas='$id_kelas'")){
		?> <script>alert('Edit kelas berhasil');</script><?php
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtkelas.php">';		
		}else{
		?> <script>alert('Edit kelas gagal');history.go(-1);</script><?php			
		}

	}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtkelas.php">';
	
?>