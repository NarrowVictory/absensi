<?php

session_start();
$admin_name = $_SESSION['nama'];
$admin_foto = $_SESSION['foto'];
$c=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

  </style>
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <style type="text/css">

    .likeLink {
    background-color: green;
    width: 190px;
    height: 30px;
    color: white;
    border: none;
    padding: 0 !important;
    cursor: pointer;
    border-radius: 3px;
}

    .likeLink:hover {
        background-color: #005F13;
        color: white;
        border: none;
        padding: 0 !important;
        font: inherit;
        cursor: pointer;
    }

    .options {
    border: 1px solid #e5e5e5;
    font-family: Segoe UI Light;
  }

  [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat;
  height: 30px;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */

input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}

    select {
        border-radius: 3px;
        font-size: 14px;
        border: none;
        width: 100%;
        background: white;
        height: 30px;
        font-family: Segoe UI Light;
    }

table, td, th {  
  border: 1px solid #ddd;
  text-align: center;
}

table {
  border-collapse: collapse;
  width: 95%;
}

th, td {
  padding: 10px;
}

th{
  background-color: powderblue;
}


  </style>
  

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
          <img src="images/murid/<?php echo $admin_foto; ?>" class="demo-avatar" style="width: 100px; height: 100px; border-radius: 50%;  display: block; margin-left: auto; margin-right: auto;">
          <div style="text-align: center; color: white"><br>
            <span><?php echo $admin_name ;?></span>
    </header><br>
      <ul>

        <li style="margin-left: 10px"><a href="home.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>


        <li style="margin-left: 10px"><a href="mhs.php">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Laporan Absensi</span>
          </a></li>

        <li style="margin-left: 10px"><a href="#" class="active">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Message Broadcast</span>
          </a></li>

        <li style="margin-left: 10px"><a href="../logout.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container" style="margin-left: 250px">
  
  <?php
  include "koneksi.php";
 
  $id = $_SESSION['id_siswa'];
  $kelas = $_SESSION['id_kelas'];
  ?>

<form action="message.php" method="post" name="postform">
    <table width="40%" border="0" class="datatable" style="border:0px; padding: 0px; text-align: left; border-collapse: none">
    <tr style="border:0px; padding: 0px"> <td style="border:0px; padding: 0px; text-align: left">
      <input type="date" name="tgl" id="tgl">
    </td></tr>
    

    <tr style="height: 10px"></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>

   <tr>
    <td style="border:0px; padding: 0px; text-align: left"><input type="submit" value="Tampilkan" class="likeLink"></td></tr>
      </div>  
    </table>  
    </form>
    <br>

  <table class="table1">
    <tr>
      <th>No</th>
      <th>Pesan</th>
      <th>Kelas</th>
      <th>Tanggal</th>
      <th>Kode Dosen</th>
    </tr>
    <?php
    if (isset($_POST['tgl'])) {
      $date = $_POST["tgl"];
    }else{
      $date = date('Y-m-d');
    }

  $query = mysqli_query($link, "select * from broadcast where tgl='$date' and kelas='$kelas'");
  $cek = mysqli_num_rows($query);

  if ($cek <= 0) {
      echo '<p style="color: red; margin-left: 0px;">Informasi Tidak Ditemukan</p>';
      echo "<br>";
    }

    if (mysqli_num_rows($query) > 0) {
      echo "<p style='color: red; margin-left: 0px;'> $cek Informasi Ditemukan</p>";
    }
  
  if($cek){
  $data = mysqli_fetch_assoc($query);
  
    echo "<br>";

    $query = mysqli_query($link, "select * from broadcast where tgl='$date' and kelas='TI-1A'");
    while($row = mysqli_fetch_array($query)){
      ?>
      <tr>
        <td width="5%"><?php echo $c=$c+1;?></td>
        <td><?php echo $row['pesan'];?></td>

        <td align="center">
        <?php
         echo $row['kelas'];
        ?>

        <td>
          <?php
         echo $row['tgl'];
        ?>
        </td>

         <td>
          <?php
         echo $row['nama_dosen'];
        ?>
        </td>
        
      </tr>

      <?php
      
    }
  }
    ?>
    </table>
  </div>
</div>


</body>
</html>