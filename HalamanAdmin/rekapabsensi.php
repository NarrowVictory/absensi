<?php
  
  session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  include "koneksi.php";

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

.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 95%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
    height: 25px;
}
 
.table1, th, td {
    text-align: center;
    height: 30px;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
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
      <a href="admin.php" target="_SELF" style="margin-top: 10px; float: right;" class="btn"> <i class="fas fa-angle-double-left"></i> &nbsp; Previous </a>
    </div>
  </div>
  
  
  <div class="main_container" style="margin-left: 0px;">
  
  <form action="?page=rekap_absensi2" method="post" name="postform">
    <table width="99%" border="0" class="datatable">
    <tr>
      <select name="kelas">
      <option value="0" disabled="" selected="selected">Pilih Kelas</option>
      <?php 
      
      $query=mysqli_query($link, "select * from kelas order by nama_kelas asc");
      
      while($row=mysqli_fetch_array($query))
      {
        ?><option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['nama_kelas']; ?></option><?php 
      }
      ?>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;

      <select name="semester">
      <option value="0" disabled selected="selected">Pilih Semester</option>
      <option value="1" >1</option>
      <option value="2" >2</option>
      <option value="3" >3</option>
      <option value="4" >4</option>
      <option value="5" >5</option>
      <option value="6" >6</option>
      <option value="7" >7</option>
      <option value="8" >8</option>   
      </select>     
      </td>
    </tr>

    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>

    <tr><td><input class="myButton" type="submit" value="Tampilkan" style="float: left;"></td></tr>
    </table>  
    </form><br>

<table class="table1">
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
    $kelas = $_POST['kelas'];
    $semester = $_POST['semester'];

    echo "<br>";

    
    $query=mysqli_query($link, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and semester='$semester' order by semester desc");
  
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