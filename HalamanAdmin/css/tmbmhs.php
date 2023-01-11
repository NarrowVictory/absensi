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

option, select{
  font-family: Segoe UI Light;
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
  padding: 1.2em 2.8em;
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

input[type="date"]{
  font-family: Segoe UI Light;
}

</style>

</head>
<body>
              <a href="admin.php" target="_SELF" style="margin-top: 10px;" class="btn"> <i class="fas fa-angle-double-left"></i> &nbsp; Previous </a>

  <div class="" style="text-align: middle; position: relative; text-align: center">
    <div class="testbox" style="height: 850px">
  <br>
  <h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Student </h5><hr>
                <form action="proses/proses_addMhs.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                
                <tr>
                    <td><i class="fas fa-id-card" id="nim" name="nim" style="font-size: 18px; display: inline; padding-right: 20px; "></i><input type="text" id="nim" name="nim" placeholder="&nbsp;&nbsp;NIM" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-user" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namalengkap" name="namalengkap" placeholder="&nbsp;&nbsp;Nama Lengkap" /></td>
                </tr>

                 <tr>
                    <td><i class="far fa-calendar" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="date" id="tanggallahir" name="tanggallahir"/> </td>
                </tr>

                <tr>
                    <td><i class="fas fa-envelope" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="email" id="email" name="email" placeholder="&nbsp;&nbsp;E-mail" /></td>
                </tr>

                <tr>
                    <td><i class="far fa-address-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="alamat" name="alamat" placeholder="&nbsp;&nbsp;Alamat" /></td>
                </tr>

                   <tr>
                    <td><i class="fas fa-user-tie" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="nama_ortu" name="nama_ortu" placeholder="&nbsp;&nbsp;Nama Ortu" /></td>
                </tr>

                   <tr>
                    <td><i class="fas fa-tty" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="telp_ortu" name="telp_ortu" placeholder="&nbsp;&nbsp;Telp. Ortu" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-phone-square-alt" style="font-size: 24px; display: inline;padding-right: 20px;"></i><input type="text" pattern="[0-9]*" class="" id="no_telp" name="no_telp" placeholder="&nbsp;&nbsp;No. Telp (+62)" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-key" style="font-size: 24px; display: inline; padding-right: 20px;"></i><input type="password"  id="password" name="password" placeholder="&nbsp;&nbsp;Password" /></td>
                </tr>

                <tr>
                    <td><select name="kelas" id="kelas" style="border-width:0 0 2px; outline:0px; width: 250px; height: 39px; text-align: center" >
                      <option disabled selected style="margin-left: 8px">Pilih Kelas</option>
                      <?php
                        $sql_kelas = mysqli_query($link, "select * from kelas");
                        while($data = mysqli_fetch_array($sql_kelas)){
                          echo "<option value='$data[0]' > $data[1] </option>";
                        }     
                      ?>
                    </select> </td>
                </tr>
                
                <tr>
                <td><label for="option-1">
                    <input type="radio" name="jk" value="Pria" id="option-1" checked style="margin-left: 10px"/>
                    <span class="" style="padding-right: 30px" > &nbsp;&nbsp;Pria </span>
                </label>

                <label for="option-2" style="margin-left: 10px">
                    <input type="radio" name="jk" value="Wanita" id="option-2" />
                    <span class="" style="padding-right: 30px"> &nbsp;&nbsp;Wanita</span>
                </label> </td>
                </tr>

                <tr>
                    <td><i class="fas fa-camera" style="font-size: 24px; display: inline;"></i><br><input type="file" name="file" id="file" style="text-align: left; margin: auto; position: relative;" /></td>
                </tr>                
               
                <tr>
                <td><button class="myButton" type="submit">Tambah Mahasiswa</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>