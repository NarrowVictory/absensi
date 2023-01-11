<?php
  
  session_start();
  include "koneksi.php";
 
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  $query="select * from sekolah";
  $res=mysqli_query($link, $query);
  while($data=mysqli_fetch_array($res)){
    $nama_sekolah=$data['nama_sekolah'];
    $alamat = $data['alamat'];
    $deskripsi=$data[3];
  }
  
  $jumlah_guru=mysqli_num_rows(mysqli_query($link, "select * from guru where status='Guru'"));
  $jumlah_kelas=mysqli_num_rows(mysqli_query($link, "select * from kelas"));
  $jumlah_siswa=mysqli_num_rows(mysqli_query($link, "select * from siswa"));
  
  
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
<style type="text/css">

h4{
  font-size: 20px;
}

.header {
  padding: 30px;
  text-align: center;
  background: rgb(0,148,134);
  color: white;
  font-size: 20px;
  width: 100%;
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

.nav {
  text-align: left;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 0px;
}

.nav a:hover {
background-color: black;
}


  </style>

</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="top_menu" style="width: 100%;">
      <div class="logo">Politeknik Negeri Lhokseumawe</div>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo date("d/m/Y") . "  --"?><div id="clock">&nbsp;</div>
    </div>
  </div>
  <br>
  <div class="sidebar">
      <ul><br>
        <img style="vertical-align: center; display: block; margin-left: auto; margin-right: auto; width: 50%; border-radius: 50%; width: 75px; height: 75px;" src="images/dosen/<?php echo $admin_foto; ?>" class="demo-avatar"><br>
    <p style="text-align: center; color: white; font-family: Segoe UI Light"><span style=""><?php echo $admin_name ;?></span></p><br><br>
        <li style="margin-left: 10px"><a href="#" class="active">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>
        

        <li style="margin-left: 10px">
          <a href="#"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title"><button onclick="myFunction()" class="dropbtn" style="padding: 0; border: none;background: none; width: 100%; outline: none">&nbsp;Tambah Data</button></span>
        </a>
            <div id="myDropdown" class="dropdown-content">
            <a href="tmbdosen.php">Tambah Dosen</a>
            <a href="tmbmhs.php">Tambah Mahasiswa</a>
            <a href="tmbkelas.php">Tambah Kelas</a>
            <a href="tmbmk.php">Tambah Mata Kuliah</a>
            </div>
        </li>


        <li style="margin-left: 10px">
          <a href="#"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title"><button onclick="myFunction1()" class="dropbtn1" style="padding: 0; border: none;background: none; width: 100%; outline: none">&nbsp;Lihat Data</button></span>
        </a>
            <div id="myDropdown1" class="dropdown-content1">
            <a href="lhtdosen.php">Data Dosen</a>
            <a href="lhtmhs.php">Data Mahasiswa</a>
            <a href="lhtkelas.php">Data Kelas</a>
            <a href="lhtMK.php">Data Mata Kuliah</a>
            </div>
        </li>

        <li style="margin-left: 10px"><a href="pgturanAkun.php">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Setting</span>
          </a></li>

        <li style="margin-left: 10px"><a href="../index.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container" style="margin-left: 250px">
  
 <ul class="nav" style="padding: none; width: 100%">
  <li><a href="#" style="background-color: black"> <div class="box" style=" height : 74px; width: 169px; background-color: #005E6E; margin-left: 15px; text-align: center; padding-top: 10px; border-radius: 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#555';" 
    onmouseout="this.style.backgroundColor='#005E6E';">
        <i class="fas fa-home" style="color: white; vertical-align: baseline; font-size: 24px;"></i>
        <p style="text-align: center; color: white; font-size: 14px; padding-top: 5px; font-family: Ruda;">My Home</p>
      </div></a></li>

  <li><a href="lhtmhs.php"><div class="box" style=" height : 74px; width: 172px; background-color: rgb(40, 183, 121); margin-left: 10px;  text-align: center; padding-top: 10px; border-radius: 5px; padding: 10px; cursor: pointer" onmouseover="this.style.backgroundColor='#555';" onmouseout="this.style.backgroundColor='#28B779';">
        <i class="fas fa-user-graduate" style="color: white; vertical-align: baseline; font-size: 24px;"></i>
        <p style="text-align: center; color: white; font-size: 14px; padding-top: 5px; font-family: Ruda;">Jumlah Mahasiswa <?php echo "[<b>" . $jumlah_siswa . "</b>]" ; ?></p>
      </div></a></li>

  <li><a href="lhtdosen.php"><div class="box" style=" height : 74px; width: 172px; background-color: rgb(218, 84, 46); margin-left: 15px;  text-align: center; padding-top: 10px; border-radius: 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#555';" onmouseout="this.style.backgroundColor='#DA542E';"">
        <i class="fas fa-chalkboard-teacher" style="color: white; vertical-align: baseline; font-size: 24px;"></i>
        <p style="text-align: center; color: white; font-size: 14px; padding-top: 5px; font-family: Ruda;">Jumlah Dosen <?php echo "[ <b>" . $jumlah_guru . "</b> ]" ; ?></p>
      </div></a></li>

  <li><a href="lhtkelas.php"><div class="box" style=" height : 74px; width: 172px; background-color: #00D6E4; margin-left: 15px; text-align: center; padding-top: 10px; border-radius: 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#555';" onmouseout="this.style.backgroundColor='#00D6E4';"">
        <i class="fas fa-university" style="color: white; vertical-align: baseline; font-size: 24px;"></i>
        <p style="text-align: center; color: white; font-size: 14px; padding-top: 5px; font-family: Ruda;">Jumlah Kelas <?php echo "[ <b>" . $jumlah_kelas . "</b> ]" ; ?> </p>
      </div></a></li>

      <li><a href="rekapabsensi.php"><div class="box" style=" height : 74px; width: 250px; background-color: rgb(34, 85, 164); margin-left: 15px; text-align: center; padding-top: 10px; border-radius: 5px; cursor: pointer" onmouseover="this.style.backgroundColor='#555';" onmouseout="this.style.backgroundColor='#2255A4';"">
        <i class="fas fa-file-invoice" style="color: white; vertical-align: baseline; font-size: 24px;"></i>
        <p style="text-align: center; color: white; font-size: 14px; padding-top: 5px; font-family: Ruda;">Laporan</p>
      </div></a></li>
</ul> 
<br>
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
  5. Memudahkan Analisa Data Kehadiran dan Rekapitulasi Data
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
</div>


<script type="text/javascript">
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script type="text/javascript">
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show1");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns1 = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns1.length; i++) {
      var openDropdown1 = dropdowns1[i];
      if (openDropdown1.classList.contains('show1')) {
        openDropdown1.classList.remove('show1');
      }
    }
  }
}
</script>

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

<script type="text/javascript">
  // Comment out the PHP line you will actually use for demostration purposes
// var d = new Date(<?php echo time() * 1000 ?>);
var d = new Date(1389971032 * 1000);

function updateClock() {
  // Increment the date
  d.setTime(d.getTime() + 1000);

  // Translate time to pieces
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes() + 27;
  var currentSeconds = d.getSeconds();

  // Add the beginning zero to minutes and seconds if needed
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  // Add either "AM" or "PM"
  var timeOfDay = (currentHours < 12) ? "am" : "pm";

  // Convert the hours our of 24-hour time
  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
  currentHours = (currentHours == 0) ? 12 : currentHours;

  // Generate the display string
  var currentTimeString = (currentHours+1) + ":" + (currentMinutes) + ":" + currentSeconds + " " + timeOfDay;

  // Update the time
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

window.onload = function() {
  updateClock();
  setInterval('updateClock()', 1000);
}
</script>

</body>
</html>