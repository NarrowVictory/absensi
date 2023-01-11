<?php
	include "koneksi.php";
	
	$id_dosen= $_POST["id"];
	$nama_dosen= $_POST["namalengkap"];
	$jk= $_POST["jk"];

	
	$tanggallahir_dosen= $_POST["tanggallahir"];
	$email_dosen= $_POST["email"];
	$username_dosen= $_POST["username"];
	$telepon_dosen= $_POST["telepon"];
	$password_dosen= $_POST["password"];

	$foto_dosen = $_FILES["file"]["name"];
	$target = "../images/dosen/". $foto_dosen;

	
	if( $telepon_dosen == "" || $id_dosen == ""  || $nama_dosen == "" || $tanggallahir_dosen == "" || $email_dosen == "" || $username_dosen == "" || $password_dosen == "" || $foto_dosen == "")
	{
		?><script>alert('Ada field yang tidak di isi');history.go(-1);</script><?php
	}else if(($_FILES["file"]["size"] >= 5000000 )|| (($_FILES["file"]["type"]!= "image/jpeg") && ($_FILES["file"]["type"]!= "image/png"))){
		?><script>alert('File foto yang dimasukkan harus dibawah 5000 KB dan Type data jpeg atau png')</script><?php
	}else { 
		$sql="insert into guru values('$id_dosen','$nama_dosen','$jk','$tanggallahir_dosen','$email_dosen','$username_dosen',md5('$password_dosen'),'$telepon_dosen','$foto_dosen','Guru')";
		
		if(move_uploaded_file($_FILES['file']['tmp_name'],$target) && $res=mysqli_query($link, $sql)){						
			?><script>alert('Pendaftaran sukses'); history.go(-1);</script><?php
		}else{
			?><script>alert('Pendaftaran gagal. ID Pegawai ada yang sama'); </script><?php
		}
		
	}
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tmbdosen.php">';
	
?>