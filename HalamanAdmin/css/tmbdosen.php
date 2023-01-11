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

  <div class="" style="text-align: middle; position: relative; text-align: center">
    <div class="testbox" style="height: 610px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Lecturer </h5><hr>
                <form action="proses/proses_addDosen.php" method="post" enctype="multipart/form-data"> 
                <div class="accounttype">
                <table border="0" width="75%" style="margin-left: 20px;">
                
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="id" name="id" placeholder="ID Dosen" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-user" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namalengkap" name="namalengkap" placeholder="Name" /></td>
                </tr>
                
                 <tr>
                    <td><i class="far fa-calendar" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="date" id="tanggallahir" name="tanggallahir" style="  font-family: Segoe UI Light;" /> </td>
                </tr>

                <tr>
                    <td><i class="fas fa-envelope" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="email" id="email" name="email" placeholder="E-mail" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-phone-square-alt" style="font-size: 24px; display: inline;padding-right: 20px;"></i><input type="text" id="telepon" name="telepon" placeholder="Telephone" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-users" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="username" name="username" placeholder="Username" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-key" style="font-size: 24px; display: inline; padding-right: 20px;"></i><input type="password" id="password" name="password" placeholder="Password"/></td>
                </tr>

                <tr>
                <td style="text-align: center; padding-left: 50px">
                    <input type="radio" name="jk" value="Pria" id="option-1" checked/>
                    <span style="padding-right: 30px">&nbsp;&nbsp;Pria</span>
                     <input type="radio" name="jk" value="Wanita" id="option-2" />
                     <span style="padding-right: 30px">&nbsp;&nbsp;Wanita</span>
                </td>
                </tr>

                <tr> </tr>
                <tr> </tr>
                <tr> </tr>
                <tr> </tr>

                <tr><td><i class="fas fa-camera" style="font-size: 24px; display: inline;"></i> <br><input type="file" name="file" id="file" style="text-align: left; margin: auto"></td></tr>

                <tr>
                <td><button class="myButton" type="submit" style="text-align: center; margin: auto;">Tambah Dosen</button></td>
                </tr>

                </table>
               </div> 
            </form>
      </div>
    </div>

</body>
</html>