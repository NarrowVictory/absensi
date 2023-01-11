<?php
	include "koneksi.php";
	$id_kelas=$_GET['id'];
	$querysiswa = "select * from siswa where id_kelas='$id_kelas'";
	$res_siswa=mysqli_query($link, $querysiswa);
	$berhasil=true;
	while($data=mysqli_fetch_array($res_siswa)){
		$nim=$data[0];
		//echo $nim;
		$tgl=date("Y-m-d");
		$id_post='ket'.$nim;
		$ket=$_POST[$id_post];
		$mk = $_POST['mk'];
		$semester = $_POST['semester'];
		if($sql_absen=mysqli_query($link, "insert into absensi2 values('$tgl','$ket','$id_kelas','$nim','$semester','$mk')")){
			
		}else{
			$berhasil = false;
			echo 'gagal';
		}
	}
	
	if($berhasil){
		?> <script>alert('Simpan Data Berhasil')</script><?php
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=absensi.php">';		
	}else{
		?> <script>alert('Absensi Harian Sudah Dilakukan');history.go(-1);</script><?php		
	}
?>