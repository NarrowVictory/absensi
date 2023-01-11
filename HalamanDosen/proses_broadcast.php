<?php
  
  session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   
  $admin_id = $_SESSION['guru_id'];
  $admin_name = $_SESSION["guru_user_name"];
  $admin_foto = $_SESSION["guru_user_foto"];

?>

<?php
			$kelas = $_POST["kelas"];
			$pesan = $_POST["pesan"];
			$date = date("Y-m-d");
			
			if(empty($pesan) ||  empty($kelas)){
			?> <script>alert('Ada field yang belum diisi');history.go(-1);</script><?php
			}else{
			if($sql=mysqli_query($link, "insert into broadcast values('null', '$pesan', '$kelas', '$date' , '$admin_name')")){
			?> <script>alert('Pesan Berhasil Terkirim');history.go(-1);</script><?php
			
			}else{
			?> <script>alert('Pesan gagal Bro');history.go(-1);</script><?php
			}
			}			
		?>

