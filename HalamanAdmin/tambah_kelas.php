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
<html>
<head>
  <title>ADMIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">

.stat {
  line-height: 50px;
  width: 220px;
  color: #fff;
  height: 250px;
  background-color: #005E6E;
  padding-left: 50px;
  font-family: 'Roboto';
  border-radius: 5px;
  display: inline-block;
  padding: 20px;
  font-size: 18px;
}

.kotak1 {
  padding-left: 30px;
}

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

input[type=text]{
  width: 100%;
}

input[type=date]{
  width: 100%;
}

input[type=email]{
  width: 100%;
}

input[type=password]{
  width: 100%;
}

input[type=file]{
  width: 100%;
}

input {
  outline: 0;
  border-width: 0 0 2px;
}

input:focus {
  border-color: grey;
  border-width: 0 0 2px;
}

.div a.active {
  border-bottom: 3px solid #338ecf;
  background: black;
}

  </style>
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <img style="vertical-align: center; display: block; margin-left: auto; margin-right: auto; width: 50%; border-radius: 50%; width: 75px; height: 75px;" src="images/guru/<?php echo $admin_foto; ?>" class="demo-avatar">
  <p style="text-align: center;"><span style=""><?php echo $admin_name ;?></span></p>
  <br><br>
  <a href="admin.php" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-user"></i>&nbsp; &nbsp; &nbsp;&nbsp;Home</a>

      <div class="w3-dropdown-hover">
        <button class="w3-button" style="padding-left: 30px"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Tambah Data
            <i class="fa fa-caret-down"></i>
        </button>

        <div class="w3-dropdown-content w3-bar-block">
          <a href="#" class="w3-bar-item w3-button">Data Dosen</a>
          <a href="#" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="#" class="w3-bar-item w3-button">Data Pengawas</a>
          <a href="#" class="w3-bar-item w3-button">Data Kelas</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <button class="w3-button" style="padding-left: 30px"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Lihat Data
            <i class="fa fa-caret-down"></i>
        </button>

        <div class="w3-dropdown-content w3-bar-block">
          <a href="#" class="w3-bar-item w3-button">Data Dosen</a>
          <a href="#" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="#" class="w3-bar-item w3-button">Data Pengawas</a>
          <a href="#" class="w3-bar-item w3-button">Data Kelas</a>
        </div>
      </div>

        <a href="#" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Setting</a>

        <a href="#" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Logout</a>

</div>

<div id="main">

<div class="w3-teal" style="">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
        <h3 style="text-align: center;">Politeknik Negeri Lhokseumawe</h1>
  </div>
</div>

    <div class="w3-container">
                <h4 style="margin-left: 35px"> Form Data Kelas </h4>
                <form action="proses/proses_addKelas.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><label for="id_kelas">ID Kelas</label></td>
                    <td><input type="text" id="id_kelas" name="id_kelas" placeholder="Format : PXXX" /></td>
                </tr>

                <tr>
                    <td><label for="nama">Nama Kelas</label></td>
                    <td><input type="text" id="nama" name="nama" placeholder="Format : A-Z" /></td>
                </tr>
               
               
                <tr>
                <td><button type="submit">Tambah Kelas</button></td> 
                </tr>
                 </table> 
            </form>
    </div>
</div>

<br>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
