
<?php
	include "koneksi.php";
	
	$nim = $_POST["nim"];
	$nama_murid = $_POST["namalengkap"];
	$jk = $_POST["jk"];
		
	$tgl_lahir = $_POST["tanggallahir"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["no_telp"];
	$nama_ortu = $_POST["nama_ortu"];
	$telp_ortu = $_POST["telp_ortu"];	
	$kelas = $_POST["kelas"];

	$foto = $_FILES["file"]["name"];
	$target = "images/murid/". $foto;
	
	
	if( empty($telp_ortu)  || empty($nama_murid)  )
	{
		?><script>alert('Ada field yang tidak di isi'); </script><?php
	}else { 
		$sql="update siswa set id_kelas='$kelas' ,nama_siswa='$nama_murid', alamat='$alamat',no_telp='$telepon', nama_ortu='$nama_ortu', telp_ortu='$telp_ortu' where id_siswa='$nim' ";			
		
		if($res=mysqli_query($link, $sql)){						
			?><script>alert('Edit data Mahasiswa sukses');</script><?php	 
		}else{
			?><script>alert('Edit data Mahasiswa gagal'); </script><?php
		}
		
		if(!empty($tgl_lahir)){
			if($sql=mysqli_query($link, "update siswa set tgl_lahir='$tgl_lahir' where id_siswa='$nim'")){
			?><script>alert('Edit tanggal lahir sukses');</script><?php	 
			}else{
				?><script>alert('Edit tanggal lahir gagal'); </script><?php
			}					
		}
		
		
		if(!empty($foto)){
			if($sql=mysqli_query($link, "update siswa set foto_murid='$foto' where id_siswa='$nim'") && move_uploaded_file($_FILES['file']['tmp_name'], $target) ){
			?><script>alert('Edit foto Mahasiswa sukses')</script><?php	 
			}else{
				?><script>alert('Edit foto Mahasiswa gagal'); </script><?php
			}					
		}
	}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtmhs.php">';
	
?>