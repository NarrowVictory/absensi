
<?php
  
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/ 
  $nip=$_GET["id"];
  
  $sql="select * from guru where id_guru='$nip'";
  $query=mysqli_query($link, $sql);
    
  while ($data=mysqli_fetch_array($query)){
    $nip=$data["id_guru"];
    $nama=$data["nama_guru"];
    $jk=$data["jk"];
    $email=$data["email"];
    $username=$data["username"];
    $password=$data["password"];
    $no_telp=$data["no_telp"];
    $foto_profil=$data["foto_profil"];
    $tgl=$data["tgl_lahir"];
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

input[type="text"] , input[type="email"], input[type="password"], input[type="radio"]{
  font-family: Segoe UI Light;
}

</style>

</head>
<body>
              <a href="admin.php" style="padding-top: 10px;"> Back </a>

  <div class="" style="text-align: middle; position: relative; text-align: center">
    <div class="testbox" style="height: 610px">
  <br><h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Lecturer </h5><hr>
                <form action="proses edit guru.php" method="post" enctype="multipart/form-data"> 
                <div class="accounttype">
                <table border="0" width="75%" style="margin-left: 20px;">
                
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="id" name="id" placeholder="ID Dosen" value="<?php echo $nip ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-user" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namalengkap" name="namalengkap" placeholder="Name" value="<?php echo $nama; ?>"/></td>
                </tr>
                
                 <tr>
                    <td><i class="far fa-calendar" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="date" id="tanggallahir" name="tanggallahir" style="  font-family: Segoe UI Light;" value="<?php echo $tgl; ?>"/> </td>
                </tr>

                <tr>
                    <td><i class="fas fa-envelope" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="email" id="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-phone-square-alt" style="font-size: 24px; display: inline;padding-right: 20px;"></i><input type="text" id="telepon" name="telepon" placeholder="Telephone" value="<?php echo $no_telp; ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-users" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username; ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-key" style="font-size: 24px; display: inline; padding-right: 20px;"></i><input type="password" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>" readonly/></td>
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

                <tr><td><i class="fas fa-camera" name="file" id="file" style="font-size: 24px; display: inline;"></i> <br><input type="file" name="file" id="file" style="text-align: left; margin: auto"></td></tr>

                <tr>
                <td><button class="myButton" type="submit" style="text-align: center; margin: auto;">Update Dosen</button></td>
                </tr>

                </table>
               </div> 
            </form>
      </div>
    </div>

</body>
</html>