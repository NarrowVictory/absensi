<?php 
  session_start();
 
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }
?>



<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="side-bar.css">
  <style type="text/css">
    .dropbtn {
  background-color: #000080;
  color: white;
  padding: none;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  width: 100%;
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000080;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 100%;
}

.dropdown-content a {
  color: black;
  text-decoration: none;
  display: block;
}


.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #000080;
}

  </style>
 
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2 style="font-size: 18px; font-family: Segoe UI Light"><?php echo "ADMINISTRATOR" ?></h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Master Data</a></li>
            <li><a href="#"><i class="fas fa-user"></i>Profile</a></li>
            
            <div class="dropdown">
                <li class="dropbtn"><a href="AddData.php"><i class="fas fa-user-plus"></i>Add Data</a></li>
                <div class="dropdown-content">
                <li><a href="#"><i class="fas fa-user-plus"></i>Data Mahasiswa</a></li>
                <li><a href="#"><i class="fas fa-user-plus"></i>Data Dosen</a></li>
            </div>

            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
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