<?php
  
  session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   
  
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  $id_siswa = $_GET['id'];
  
  $query=mysqli_query($link, "select s.*,k.nama_kelas from siswa s join kelas k on s.id_kelas=k.id_kelas where id_siswa='$id_siswa'");
  while ($data=mysqli_fetch_array($query)){     
    $id_siswa = $data['id_siswa'];
    $nama_kelas = $data['nama_kelas'];
    $nama_siswa= $data['nama_siswa'];
    $jk = $data['jk'];
    $tgl_lahir = $data['tgl_lahir'];
    $alamat = $data['alamat'];
    $no_telp= $data['no_telp'];
    $nama_ortu = $data['nama_ortu'];
    $telp_ortu = $data['telp_ortu'];
    $foto_murid = $data['foto_murid'];
    $id_kelas = $data['id_kelas'];    
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

option, select{
  font-family: Segoe UI Light;
}

</style>

</head>
<body>
              <a href="admin.php" style="margin-top: 10px;"> Back </a>

  <div class="" style="text-align: middle; position: relative; text-align: center">
    <div class="testbox" style="height: 850px">
  <br>
  <h5 style="margin-left: 35px; font-family: Ruda; font-size: 16px;"> Registration of Student </h5><hr>
                <form action="proses/proses_addMhs.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                
                <tr>
                    <td><i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="nim" name="nim" placeholder="&nbsp;&nbsp;NIM" value="<?php echo $id_siswa ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-user" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="namalengkap" name="namalengkap" placeholder="&nbsp;&nbsp;Nama Lengkap" value="<?php echo $nama_siswa ?>"/></td>
                </tr>

                 <tr>
                    <td><i class="far fa-calendar" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="date" id="tanggallahir" name="tanggallahir" value="<?php echo $tgl_lahir ?>"/> </td>
                </tr>

                <tr>
                    <td><i class="far fa-address-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo $alamat ?>"/></td>
                </tr>

                   <tr>
                    <td><i class="fas fa-user-tie" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="nama_ortu" name="nama_ortu" placeholder="Nama Ortu" value="<?php echo $nama_ortu ?>"/></td>
                </tr>

                   <tr>
                    <td><i class="fas fa-tty" style="font-size: 24px; display: inline; padding-right: 20px; "></i><input type="text" id="telp_ortu" name="telp_ortu" placeholder="Telp. Ortu" value="<?php echo $telp_ortu ?>" /></td>
                </tr>

                <tr>
                    <td><i class="fas fa-phone-square-alt" style="font-size: 24px; display: inline;padding-right: 20px;"></i><input type="text" pattern="[0-9]*" class="" id="no_telp" name="no_telp" placeholder="No. Telp (+62)" value="<?php echo $no_telp ?>"/></td>
                </tr>

                <tr>
                    <td><i class="fas fa-key" style="font-size: 24px; display: inline; padding-right: 20px;"></i><input type="password"  id="password" name="password" placeholder="Password" /></td>
                </tr>

                <tr>
                    <td><select name="kelas" id="kelas" style="border-width:0 0 2px; outline:0px; width: 250px; height: 39px; text-align: center" >
                      <option style="margin-left: 8px" selected="<?php echo $nama_kelas ?>"><?php echo $nama_kelas ?></option>
                      <?php
                        $sql_kelas = mysqli_query($link, "select * from kelas");
                        while($data = mysqli_fetch_array($sql_kelas)){
                          echo "<option value='$data[0]' > $data[1] </option>";
                        }     
                      ?>
                    </select> </td>
                </tr>

                 <tr></tr>
                <tr></tr>
                
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

                <tr></tr>
                <tr></tr>

               <tr><td><input type="file" name="file" id="file" style="text-align: left; margin: auto; opacity: 0.9"></td></tr>            
               
               <tr></tr>


                <tr>
                <td><button class="myButton" type="submit">Update Mahasiswa</button></td> 
                </tr>
                 </table> 
            </form>
      </div>
    </div>

</body>
</html>