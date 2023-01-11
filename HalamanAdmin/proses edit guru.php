
<?php
	include "koneksi.php";
	
	$id=$_POST["id"];
	$nama_dosen=$_POST["namalengkap"];
	
	$tanggallahir_dosen = $_POST["tanggallahir"];
	$email_dosen = $_POST["email"];
	$username_dosen = $_POST["username"];
	$telepon_dosen = $_POST["telepon"];
	$password_dosen = $_POST["password"];
	$foto_dosen = $_FILES['file']['name'];
	
	
	$target = "images/dosen/" . $foto_dosen;
	
	
	if( empty($telepon_dosen)  || empty($nama_dosen) || empty($email_dosen) || empty($username_dosen) )
	{
		?><script>alert('Ada field yang tidak di isi'); history.go(-1);</script><?php
	}else { 
		$sql="update guru set nama_guru='$nama_dosen',email='$email_dosen',username='$username_dosen',no_telp='$telepon_dosen' where id_guru='$id'";			
		
		if($res=mysqli_query($link, $sql)){						
			?><script>alert('Edit data dosen sukses');</script><?php	 
		}else{
			?><script>alert('Edit data dosen gagal'); </script><?php
		}
		
		if(!empty($tanggallahir_dosen)){
			if($sql=mysqli_query($link, "update guru set tgl_lahir='$tanggallahir_dosen' where id_guru='$id'")){
			?><script>alert('Edit tnggal lahir dosen sukses');</script><?php	 
			}else{
				?><script>alert('Edit tnggal lahir gagal');history.go(-1); </script><?php
			}					
		}
		
		if(!empty($password_dosen)){
			if($sql=mysqli_query($link, "update guru set password=md5('$password_dosen') where id_guru='$id'")){
			?><script>alert('Edit password dosen sukses');</script><?php	 
			}else{
				?><script>alert('Edit password dosen gagal');history.go(-1); </script><?php
			}					
		}
		
		if(!empty($foto_dosen)){
			if($sql=mysqli_query($link, "update dosen set foto_profil='$foto_dosen' where id_dosen='$id'") && move_uploaded_file($_FILES['file']['tmp_name'],$target) ){
			?><script>alert('Edit foto dosen sukses')</script><?php	 
			}else{
				?><script>alert('Edit foto dosen gagal');history.go(-1); </script><?php
			}					
		}
	}
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=lhtdosen.php">';
	
?>