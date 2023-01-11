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
width: 500px;
padding: 2px;
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

textarea {
  width: 500px;
  height: 200px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  transition: background-color 0.2s ease 0s;
  font-family: Segoe UI Light;
  text-decoration: none;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
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
  width: 10%;
}

.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
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


        <li style="margin-left: 10px"><a href="rekapabsensi.php">
          <span class="icon"><i class="fas fa-volleyball-ball"></i></span>
          <span class="title">Laporan Absensi</span>
          </a></li>

          <li style="margin-left: 10px"><a href="broadcast.php" class="active">
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
  
  <div class="main_container" style="margin-left: 270px; padding-top: 35px;">

    <form action="proses_broadcast.php" method="post" name="postform">
    <table width="99%" border="0" class="datatable">
    <tr>
      <select name="kelas">
      <option value="0" disabled="" selected="selected">Pilih Kelas</option>
      <?php 
      
      $query=mysqli_query($link, "select * from kelas order by nama_kelas asc");
      
      while($row=mysqli_fetch_array($query))
      {
        ?><option value="<?php  echo $row['id_kelas']; ?>"><?php  echo $row['id_kelas']; ?></option><?php 
      }
      ?>
          </select>  
    </tr>


    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>

    <td>
    <textarea name="pesan" cols="40" rows="10">
    Silahkan isi pesan anda
    </textarea>
    </td> </tr>

    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>

    <tr><td colspan="5" align="left"><input class="myButton" type="submit" value="Kirim" style=""></td></tr>
    </table>  
    </form>
    
  </div>
</div>

</body>
</html>