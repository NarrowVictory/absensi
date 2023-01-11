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
          <a href="absensi.php" class="active"> <span class="icon"><i class="fas fa-file-video"></i></span>
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
  
  <div class="main_container">
  
  <form role="form" action="absensi detail.php" method="get" name="postform" enctype="multipart/form-data" style="margin-left: 70px">

                <br>
                <h4>PILIH KELAS UNTUK ABSENSI</h4><br>
                
                    <select name="nama_kelas" id="nama_kelas" >
                      <?php
                        $sql_kelas = mysqli_query($link, "select * from kelas ");
                        while($data = mysqli_fetch_array($sql_kelas)){
                          echo '&nbsp;&nbsp;' . "<option value='$data[0]' > $data[1] </option>";
                        }     
                      ?>
                    </select>
                    
                <br><br>
                <button class="myButton" type="submit">Pilih Kelas</button>
            </form>
  </div>
</div>

</body>
</html>