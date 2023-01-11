<?php 
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="side-bar.css">
</head>
<body>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2 style="font-size: 18px; font-family: Segoe UI Light"><?php echo "ADMINISTRATOR" ?></h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user-plus"></i>Add Data</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Master Data</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header">Welcome!! Have a nice day.</div>  
        <div class="info">
          
      </div>
    </div>
</div>
</body>
</html>