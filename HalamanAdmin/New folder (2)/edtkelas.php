<?php
    
    session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   

  $id=$_GET['id'];  

  $sql="select * from kelas where id_kelas='$id'";
  $query=mysqli_query($link, $sql);
    
  while ($data=mysqli_fetch_array($query)){
      $id_kelas=$data["id_kelas"];
      $nama_kelas=$data["nama_kelas"];
      $id_guru=$data["id_guru"];
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
    <div class="testbox" style="height: 280px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Class </h5><hr>
                <form action="proses edit kelas.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="id_kelas" name="id_kelas" placeholder="ID Kelas" /value="<?php echo $id_kelas; ?>"></td>
                </tr>

                <tr>
                    <td><i class="fas fa-digital-tachograph" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="nama" name="nama" placeholder="Nama Kelas" value="<?php echo $nama_kelas; ?>"/></td>
                </tr>
                
                <tr></tr>
                <tr></tr>
               
                <tr>
                <td><button class="myButton" type="submit">Update Kelas</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>