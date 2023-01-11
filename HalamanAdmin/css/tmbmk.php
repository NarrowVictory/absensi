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

select, option{
  font-family: Segoe UI Light;
}

</style>

</head>
<body>
              <a href="admin.php" style="padding-top: 10px;"> Back </a>

  <div class="" style="text-align: middle; position: relative; text-align: center">
    <div class="testbox" style="height: 370px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Class </h5><hr>
                <form action="proses/proses_addMK.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="kode_mk" name="kode_mk" placeholder="Kode MK" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-digital-tachograph" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namamk" name="namamk" placeholder="Nama MK" /></td>
                </tr>

                   <tr></tr>

                <tr>
                  <td>
                    <i class="fas fa-graduation-cap" style="font-size: 24px; display: inline; padding-right: 20px; "></i>
                    <select name="semester" id ="semester" style="height: 39px; width: 200px; border: none; -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);">
                         <option selected="" readonly disabled selected value> Pilih Semester </option>
                         <option value = "1">1</option>
                         <option value = "2">2</option>
                         <option value = "3">3</option>
                         <option value = "4">4</option>
                         <option value = "5">5</option>
                         <option value = "6">6</option>
                         <option value = "7">7</option>
                         <option value = "8">8</option>
                    </select>
                  </td>
                </tr>

                <tr></tr>

                <tr>
                    <td><select name="dosen" id="dosen" style="border-width:0 0 2px; outline:0px; width: 250px; height: 39px; text-align: center" >
                      <option disabled selected style="margin-left: 8px"> Pilih Dosen </option>
                      <?php
                        $sql_kelas = mysqli_query($link, "select * from guru");
                        while($data = mysqli_fetch_array($sql_kelas)){
                          echo "<option value='$data[0]' > $data[1] </option>";
                        }     
                      ?>
                    </select> </td>
                </tr>

                <tr></tr>
               
                <tr>
                <td><button class="myButton" type="submit" style="width: 250px;">Tambah MK</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>