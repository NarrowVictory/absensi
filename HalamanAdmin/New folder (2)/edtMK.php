<?php
    
    session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   

  $id=$_GET['id'];  

  $sql="select * from tb_matakuliah where kode_mk='$id'";
  $query=mysqli_query($link, $sql);
    
  while ($data = mysqli_fetch_array($query)){
      $kode_mk = $data["kode_mk"];
      $nama_mk = $data["nama_mk"];
      $kd_guru = $data["kd_guru"];
      $smt = $data["semester"];
  }
    
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
    <div class="testbox" style="height: 380px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Update of Subject </h5><hr>
                <form action="proses edit MK.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="kode_mk" name="kode_mk" placeholder="Kode MK" value="<?php echo $kode_mk; ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-digital-tachograph" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namamk" name="namamk" placeholder="Nama MK" value="<?php echo $nama_mk; ?>"/></td>
                </tr>

                   <tr></tr>

                <tr>
                  <td>
                    <i class="fas fa-graduation-cap" style="font-size: 24px; display: inline; padding-right: 20px; "></i>
                    <select name="semester" id ="semester" style="height: 39px; width: 200px; border: none; -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09);">
                         <option readonly selected="<?php echo $smt; ?>"> <?php echo $smt; ?> </option>
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
                      <option selected style="margin-left: 8px"> Pilih Dosen </option>
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
                <td><button class="myButton" type="submit" style="width: 250px;">Update MK</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>