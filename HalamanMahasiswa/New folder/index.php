<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "sbd_10113076";
 
$conn = mysqli_connect($host, $user, $pass) or die (mysqli_error());
mysqli_select_db($conn, $db_name) or die (mysqli_error());

$id = $_SESSION['id_siswa'];
$kelas = "K1";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

  </style>
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="NewFolder/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>

</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">Politeknik Negeri Lhokseumawe</div>
      
    </div>
  </div>
  
  <div class="sidebar">
      <ul>

        <li style="margin-left: 10px"><a href="#">
          <br>
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>
        
        <li style="margin-left: 10px">
          <a href="#"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Laporan Absensi</span>
        </a>
        </li>

        <li style="margin-left: 10px"><a href="#" class="active">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Setting</span>
          </a></li>

        <li style="margin-left: 10px"><a href="../index.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
    <main style="margin-left: 70px">
   <form action="index.php" method="post" name="postform">
    <table width="99%" border="0" class="datatable" style="border-spacing: 5px;">
    <tr>
      <select name="semester">
      <option value="0" selected="selected">Pilih Semester</option>
      <option value="1" >1</option>
      <option value="2" >2</option>
      <option value="3" >3</option>
      <option value="4" >4</option>
      <option value="5" >5</option>
      <option value="6" >6</option>
      <option value="7" >7</option>
      <option value="8" >8</option>   
      </select>     
    &nbsp;<input type="submit" value="Tampilkan"></tr>
    </table>  
    </form> 

<table class="datatable" style="border-spacing: 10px;">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Hadir (H)</th>
      <th>Sakit (S)</th>
      <th>Ijin (I)</th>
      <th>Alfa (A)</th>
    </tr>
    <?php
    //untuk option
    $semester = $_POST['semester'];
    
    $query=mysqli_query($conn, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and semester='$semester' order by semester desc");
  
    $c=0;
    while($row=mysqli_fetch_array($query)){
      $siswa=mysqli_fetch_array(mysqli_query($conn, "select * from siswa where id_siswa='$row[id_siswa]'"));

      ?>
      <tr>
        <td><?php echo $c=$c+1;?></td>
        <td><?php echo $siswa['nama_siswa'];?></td>

        <td align="center">
        <?php
          $hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Hadir' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Sakit' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Izin' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($conn, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Alpa' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td> 
        
      </tr>
      <?php
      
    }
    ?>
    </table>
  </main>
  </div>
</div>


</body>
</html>