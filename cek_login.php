<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include "koneksi.php";
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($link, "select * from guru where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if($data['status']=='Admin'){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = $data["status"];
		$_SESSION['id'] = $data["id_guru"];
		$_SESSION['user_name']=$data["nama_guru"];
		$_SESSION['user_foto']=$data["foto_profil"];
		// alihkan ke halaman dashboard admin

		header("location:HalamanAdmin/admin.php");

	} else if($data['status']=="Guru"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Guru";

		$_SESSION['guru_id'] = $data["id_guru"];
		$_SESSION['guru_user_email'] = $user_email;
		$_SESSION['guru_user_name'] = $data["nama_guru"];
		$_SESSION['guru_user_foto'] = $data["foto_profil"];
		// alihkan ke halaman dashboard pegawai
		header("location:HalamanDosen/absensi.php");
 
	}
}

else{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login1 = mysqli_query($link, "select * from siswa where id_siswa='$username' and id_siswa='$password'");
	// menghitung jumlah data yang ditemukan
	
	$cek1 = mysqli_num_rows($login1);

	if($cek1){
	$_SESSION['id_siswa'] = $username;
	$data = mysqli_fetch_assoc($login1);
	$idkelas = $data['id_kelas'];
	$_SESSION['id_kelas'] = $idkelas;

	$_SESSION['foto'] = $data["foto_murid"];
	$_SESSION['nama'] = $data["nama_siswa"];
	header("location:HalamanMahasiswa/mhs.php");
		}
	else{header("location:index.php?pesan=gagal");
}
	}
 
?>