<?php
session_start();
$admin_name = $_SESSION['nama'];
$admin_foto = $_SESSION['foto'];
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
    width: 150px;
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
  padding: 5px;
}

tr, td{
  text-align: center;
}

th{

}

   /* The container must be positioned relative: */


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


        <li style="margin-left: 10px"><a href="#" class="active">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Laporan Absensi</span>
          </a></li>

        <li style="margin-left: 10px"><a href="message.php">
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

<form action="mhs.php" method="post" name="postform" style="border:none">
    <table width="100%" border="0" class="datatable" style="border:none">
    <tr style="border:none"> <td width="10%" style="border:none">
      <div class="options" style="width:250px;">
  <select name="semester">
    <option value="0" selected="" readonly>&nbsp;&nbsp;&nbsp;Pilih Semester</option>
    <option value="1">&nbsp;&nbsp;&nbsp;1</option>
    <option value="2">&nbsp;&nbsp;&nbsp;2</option>
    <option value="3">&nbsp;&nbsp;&nbsp;3</option>
    <option value="4">&nbsp;&nbsp;&nbsp;4</option>
    <option value="5">&nbsp;&nbsp;&nbsp;5</option>
    <option value="6">&nbsp;&nbsp;&nbsp;6</option>
    <option value="7">&nbsp;&nbsp;&nbsp;7</option>
    <option value="8">&nbsp;&nbsp;&nbsp;8</option>
  </select></div>
   
    <td style="border:none"><input type="submit" value="Tampilkan" class="likeLink" style="float: left"></td></tr>
      </div>  
    </table>  
    </form>


<table class="table1" style="border-collapse: collapse; width: 95%; border: 1px solid #ddd;">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Hadir (H)</th>
      <th>Sakit (S)</th>
      <th>Ijin (I)</th>
      <th>Alfa (A)</th>
    </tr>
    <?php
  
    if (isset($_POST['semester'])) {
      $semester = $_POST['semester'];
    }else{
      $semester = 0;
    }
    echo "<br>";
    
    $query= mysqli_query($link, "select distinct id_siswa from absensi2 where id_kelas='$kelas' and semester='$semester' order by semester desc");

    $angka = mysqli_num_rows($query);

    if ($angka == 0 && isset($semester)) {
      echo '<p style="color: red; margin-left: 20px;">Record Not Found</p>';
      echo "<br>";
    }

    if (mysqli_num_rows($query) > 0) {
      echo "<p style='color: red; margin-left: 20px;'> $angka Record Found</p>";
      echo "<br>";
    }

    $c=0;
    while($row=mysqli_fetch_array($query)){
      $siswa=mysqli_fetch_array(mysqli_query($link, "select * from siswa where id_siswa='$row[id_siswa]'"));

      ?>
      <tr>
        <td style=""><?php echo $c=$c+1;?></td>
        <td style="border: 1px solid #ddd; text-align: left;"><?php echo $siswa['nama_siswa'];?></td>

        <td align="center" style="">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Hadir' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center" style="">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Sakit' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center" style="">
        <?php
          $hadir = mysqli_query($link, "select * from absensi2 where id_siswa='$row[id_siswa]' and keterangan='Izin' order by id_siswa desc");
          
          $jumlah=mysqli_num_rows($hadir);
          echo $jumlah;
        ?>
        </td>

        <td align="center" style="">
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