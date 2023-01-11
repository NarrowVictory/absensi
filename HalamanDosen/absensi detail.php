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
  $c = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">

  .table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
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

input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

  .styled-select {
  width: 200px;
  height: 34px;
  background-color: #749ABE;
  border: 1px solid #ccc;
  border-radius: 5px;
  line-height: 20px;
  transition:ease all 0.3s;
  -webkit-transition:ease all 0.3s;
  
}
.styled-select:hover{
  box-shadow:0 0 7px 5px lightblue;
}

.styled-select select {
  background: transparent;
  width: 220px;
  padding: 5px;
  font-size: 16px;
  border: 0;
  border-radius: 0;
  height: 39px;
  -webkit-appearance: none;
}

.styled-select select {
  color: #fff;
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
  float: right;
}

.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  

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
          <a href="#" class="active"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title">Absensi</span>
        </a>
        </li>


        <li style="margin-left: 10px"><a href="rekapabsensi.php">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Laporan Absensi</span>
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
  
  <div class="main_container">
     <main style="margin-left: 70px;">


    

      <a href="absensi.php" target="_SELF" style="margin-top: 10px; float: right;" class="btn"> <i class="fas fa-angle-double-left"></i> &nbsp; Kelas Lainnya </a>

        <div>
          <div>
          <br>

                      <form role="form" action="simpan data absen.php?id=<?php echo $_GET['nama_kelas'];?>" method="post" name="postform" enctype="multipart/form-data">
      <div class="styled-select" style="display: inline;">
    <select name="mk" style="">
      <option style="background-color: blue!important;" disabled="" value="0" selected="selected">&nbsp;&nbsp;Pilih Mata Kuliah</option>
      <?php 
      
      $query = mysqli_query($link, "select * from tb_matakuliah where kd_guru='$admin_id' order by nama_mk asc");
      
      while($row = mysqli_fetch_array($query))
      {
        ?><option style="background-color: blue!important" value="<?php  echo $row['nama_mk']; ?>"><?php  echo $row['nama_mk']; ?></option><?php 
      }
      ?>
      </select></div>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="styled-select" style="display: inline;">
      <select name="semester" class="select-style" style="">
      <option style="background-color: blue!important;" value="0" disabled="" selected="selected">&nbsp;&nbsp;Pilih Semester</option>
      <option style="background-color: blue!important" value="1" >&nbsp;&nbsp;Semester 1</option>
      <option style="background-color: blue!important" value="2" >&nbsp;&nbsp;Semester 2</option>
      <option style="background-color: blue!important" value="3" >&nbsp;&nbsp;Semester 3</option>
      <option style="background-color: blue!important" value="4" >&nbsp;&nbsp;Semester 4</option>
      <option style="background-color: blue!important" value="5" >&nbsp;&nbsp;Semester 5</option>
      <option style="background-color: blue!important" value="6" >&nbsp;&nbsp;Semester 6</option>
      <option style="background-color: blue!important" value="7" >&nbsp;&nbsp;Semester 7</option>
      <option style="background-color: blue!important" value="8" >&nbsp;&nbsp;Semester 8</option>
      </select>
      </div>
	  
	  <table class="table1" style="border-spacing: 15px; ">
          <thead>
          <tr>
            <th bgcolor="#ffffff">NIM</th>
            <th bgcolor="#ffffff">Nama Murid</th>
            <th bgcolor="#ffffff">Keterangan</th>           
          </tr>
          </thead>
          <tbody>
          <?php
          include "koneksi.php";
          $id_kelas=$_GET['nama_kelas'];
          $sql="select * from siswa where id_kelas='$id_kelas'";
          $query=mysqli_query($link, $sql);
          
          while ($data=mysqli_fetch_array($query)){
            $nim=$data["id_siswa"];
            $nama_siswa=$data["nama_siswa"];
          ?>

          <tr>
            <td ><?php echo $nim; ?></td>
            <td><?php echo $nama_siswa; ?></td>
          <td>

            <div style="text-align: center">
          <label for="<?php echo 'opsi1'.$nim;?>">
            <input type="radio" name="<?php echo 'ket'.$nim;?>" value="Hadir" id="<?php echo 'opsi1'.$nim;?>" checked style="margin-left: 30px">
            <span style=""><p style="display: inline; font-family: Segoe UI Light">&nbsp;Hadir</p></span>
          </label>
          <label for="<?php echo 'opsi2'.$nim;?>">
            <input type="radio" style="margin-left: 30px" name="<?php echo 'ket'.$nim;?>" value="Sakit" id="<?php echo 'opsi2'.$nim;?>" />
            <span style=""><p style="display: inline; font-family: Segoe UI Light">&nbsp;Sakit</p></span>
          </label>
          <label for="<?php echo 'opsi3'.$nim;?>">
            <input type="radio" style="margin-left: 30px" name="<?php echo 'ket'.$nim;?>" value="Izin" id="<?php echo 'opsi3'.$nim;?>" />
            <span style=""><p style="display: inline; font-family: Segoe UI Light">&nbsp;Izin</p></span>
          </label>
          <label for="<?php echo 'opsi4'.$nim;?>">
            <input type="radio" style="margin-left: 30px" name="<?php echo 'ket'.$nim;?>" value="Alpa" id="<?php echo 'opsi4'.$nim;?>" />
            <span style=""><p style="display: inline; font-family: Segoe UI Light">&nbsp;Alpa</p></span>
          </label>          
            </td></div>           
          </tr>

          <tr></tr>
          <tr></tr>

          <?php } ?>
          </tbody>
          </table>
          <br><br>
          <button class="myButton" type="submit">Simpan Absensi Harian</button>
      </form>
	  
          </div>
    
        </div>
      </main>
  </div>

</div>
  
  

</body>
</html>