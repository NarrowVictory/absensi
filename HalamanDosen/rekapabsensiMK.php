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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

select {
background-repeat:no-repeat;
width:25%;
height: 30px;
font-family: Segoe UI Light;
line-height:1;
border-radius:5px;
background-color: #020097;
color: white;
font-size:20px;
box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
outline:none
}

option{
  font-family: Segoe UI Light;
  text-align: center;
}

.myButton {
  box-shadow:inset 0px 1px 0px 0px #fff6af;
  background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
  background-color:#ffec64;
  border-radius:6px;
  border:1px solid #ffaa22;
  display:inline-block;
  cursor:pointer;
  color:#333333;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:5px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffee66;
  width: 25%;
  height: 30px;
}

.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
}

table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 95%;
}

th, td {
  padding: 10px;
}

.btn {
  background-color: transparent;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  line-height: 1;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}

.btn:hover, .btn:focus {
  color: blue;
  outline: 0;
}

  </style>
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="NewFolder/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  

</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="top_menu">
      <div class="logo">Politeknik Negeri Lhokseumawe</div>
      
    </div>
  </div>
  
  <div class="sidebar">
    <header class="demo-drawer-header">
      <br>
          <img src="images/guru/<?php echo $admin_foto; ?>" class="demo-avatar" style="width: 100px; height: 100px; border-radius: 50%;  display: block; margin-left: auto; margin-right: auto;">
          <div style="text-align: center; color: white"><br>
            <span><?php echo $admin_name ;?></span>
    </header><br>
      <ul>

        <li style="margin-left: 10px"><a href="home.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>
        
        <li style="margin-left: 10px">
          <a href="absensi.php"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Absensi</span>
        </a>
        </li>


        <li style="margin-left: 10px"><a href="rekapabsensi.php" class="active">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Laporan Absensi</span>
          </a></li>

          <li style="margin-left: 10px"><a href="broadcast.php">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Message Broadcast</span>
          </a></li>

        <li style="margin-left: 10px"><a href="pgturanAkun.php">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Setting</span>
          </a></li>


        <li style="margin-left: 10px"><a href="../logout.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container" style="margin-left: 270px;">

  <a href="rekapabsensi.php" target="_SELF" style="margin-top: 10px; float: right;" class="btn"> <i class="fas fa-angle-double-left"></i> &nbsp; Pilih Absensi per Semester </a>

  <form action="rekapabsensiMK.php" method="post" name="postform">
    <table width="99%" border="0" class="datatable">
    <tr>
      <select name="kelas">
      <option value="0" selected="selected">Pilih Kelas</option>
      <?php 
      
      $query=mysqli_query($link, "select * from kelas order by nama_kelas asc");
      
      while($row=mysqli_fetch_array($query))
      {
        ?><option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['nama_kelas']; ?></option><?php 
      }
      ?>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;

     <select name="mk" style="">
      <option style="background-color: blue!important;" disabled="" value="0" selected="selected">&nbsp;&nbsp;Pilih Mata Kuliah</option>
      <?php 
      
      $query = mysqli_query($link, "select * from tb_matakuliah where kd_guru='$admin_id' order by nama_mk asc");
      
      while($row = mysqli_fetch_array($query))
      {
        ?><option style="background-color: blue!important" value="<?php  echo $row['nama_mk']; ?>"><?php  echo $row['nama_mk']; ?></option><?php 
      }
      ?>
      </select>
      </td>
    </tr>
    <br><br>
   <input class="myButton" type="submit" value="Tampilkan" style="float: left;">
    </table>  
    </form><br>

<table class="table1">
    <tr>
      <th width="5%">No</th>
      <th>Nama</th>
      <th>Hadir (H)</th>
      <th>Sakit (S)</th>
      <th>Ijin (I)</th>
      <th>Alfa (A)</th>
    </tr>
    <?php
    //untuk option
    $kelas = $_POST["kelas"];
    $mk = $_POST["mk"];

    echo "<br>";
    
    $query=mysqli_query($link, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and mk='$mk' order by mk desc");
  
    $c=0;
    while($row=mysqli_fetch_array($query)){
      $siswa=mysqli_fetch_array(mysqli_query($link, "select * from siswa where id_siswa='$row[id_siswa]'"));

      ?>
      <tr>
        <td><?php echo $c=$c+1;?></td>
        <td><?php echo $siswa['nama_siswa'];?></td>

        <td align="center">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Hadir' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Sakit' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Izin' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Alpa' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        
      </tr>
      <?php
      
    }
    ?>
    </table>
  </div>
</div>

</body>
</html>