<?php
    
    session_start();
    include "koneksi.php";    
    
    $admin_name = $_SESSION["user_name"];
    $admin_foto = $_SESSION["user_foto"];
    
    
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

  </style>
	<title>Responsive Side Navigation Bar</title>
  <link rel="stylesheet" href="tes.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<style type="text/css">

::-webkit-input-placeholder { 
  font-family: Segoe UI Light;
}

</style>

</head>
<body>
              <a href="admin.php" style="padding-top: 10px;"> Back </a>

  <div class="" style="text-align: middle; position: relative; text-align: center;">
    <div class="testbox" style="height: 280px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Class </h5><hr>
                <form action="proses/proses_addKelas.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="id_kelas" name="id_kelas" placeholder="ID Kelas" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-digital-tachograph" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="nama" name="nama" placeholder="Nama Kelas" /></td>
                </tr>
                
                <tr></tr>
                <tr></tr>
               
                <tr>
                <td><button class="myButton" type="submit">Tambah Kelas</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>