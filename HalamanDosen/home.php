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
padding:3px;
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
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffee66;
  width: 25%;
}

.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
}

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

        <li style="margin-left: 10px"><a href="#">
          <span class="icon"><i class="fas fa-home" class="active"></i></span>
          <span class="title">Home</span></a></li>
        
        <li style="margin-left: 10px">
          <a href="absensi.php"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Absensi</span>
        </a>
        </li>


        <li style="margin-left: 10px"><a href="rekapabsensi.php">
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
  
  <div class="main_container" style="margin-left: 270px; padding-top: 30px;">
  
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
  2. Mahasiswa bebas mengakses
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