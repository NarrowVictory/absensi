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

    .collapsible {
  background-color: transparent;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.3s;
  font-weight: bold;
}

.collapsible:hover {
  background-color: transparent;
}

.active:hover{
  background-color: transparent;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: transparent;
  letter-spacing: 1px;
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

    .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 93%;
    border: 1px solid #f2f5f7;
    margin-left: 20px;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
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
    </header>
    <br>

      <ul>

        <li style="margin-left: 10px"><a href="#" class="active">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>


        <li style="margin-left: 10px"><a href="mhs.php">
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


    <table border="1" style="z-index: 1">
<div class="locate" style="margin-left: 15px; width: 95%; background-color: transparent;">
<button type="button" class="collapsible"><i class="fas fa-angle-right" ></i> Apa itu Absensi Online?</button>
<div class="content">
  <p>Absensi Online adalah pencatatan kehadiran menggunakan sistem cloud yang terhubung dengan database secara real-time. </p>
</div>
<button type="button" class="collapsible"><i class="fas fa-angle-right" ></i> Apa saja manfaat menggunakan Absensi online?</button>
<div class="content">
  <pre>
  Berikut adalah beberapa kelebihan menggunakan absensi online
  1. Keakuratan data dengan absensi online
  2. Karyawan bebas mengakses
  3. Kemudahan akses informasi terkini
  4. Menghemat biaya Pengadaan Perangkat
</pre>
</div>
<button type="button" class="collapsible"><i class="fas fa-angle-right" ></i> Siapa saja yang dapat mengakses?</button>
<div class="content">
  <p> Absensi ini dibuat dengan hak Akses berupa Mahasiswa, Dosen dan Admin. Dimana data untuk login ke sistem dari Mahasiswa dan Dosen didaftarkan oleh Admin, jadi tidak ada pendaftaran kolektif</p>
</div>
</div>
</table>


  </div>
</div>

<script type="text/javascript">
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>