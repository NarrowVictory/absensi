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
<html>
<head>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/input.css">
  <style type="text/css">

.stat {
  line-height: 50px;
  width: 220px;
  color: #fff;
  height: 250px;
  background-color: #005E6E;
  padding-left: 50px;
  font-family: 'Roboto';
  border-radius: 5px;
  display: inline-block;
  padding: 20px;
  font-size: 18px;
}

.kotak1 {
  padding-left: 30px;
}

.w3-sidebar{
  
}

h4{
  font-size: 20px;
}

.header {
  padding: 30px;
  text-align: center;
  background: rgb(0,148,134);
  color: white;
  font-size: 20px;
  width: 100%;
}

  </style>
</head>
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <img style="vertical-align: center; display: block; margin-left: auto; margin-right: auto; width: 50%; border-radius: 50%; width: 75px; height: 75px;" src="images/guru/<?php echo $admin_foto; ?>" class="demo-avatar">
  <p style="text-align: center;"><span style=""><?php echo $admin_name ;?></span></p>
  <br><br>
  <a href="admin.php" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-user"></i>&nbsp; &nbsp; &nbsp;&nbsp;Home</a>

      <div class="w3-dropdown-hover">
        <button class="w3-button" style="padding-left: 30px"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Tambah Data
            <i class="fa fa-caret-down"></i>
        </button>

        <div class="w3-dropdown-content w3-bar-block">
          <a href="tambah_dosen.php" class="w3-bar-item w3-button">Data Dosen</a>
          <a href="tambah_mahasiswa.php" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="tambah_pengawas.php" class="w3-bar-item w3-button">Data Pengawas</a>
          <a href="tambah_kelas.php" class="w3-bar-item w3-button">Data Kelas</a>
        </div>
      </div>

      <div class="w3-dropdown-hover">
        <button class="w3-button" style="padding-left: 30px"><i class="fa fa-search" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Lihat Data
            <i class="fa fa-caret-down"></i>
        </button>

        <div class="w3-dropdown-content w3-bar-block">
          <a href="dataDosen.php" class="w3-bar-item w3-button">Data Dosen</a>
          <a href="dataMahasiswa.php" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="" class="w3-bar-item w3-button">Data Pengawas</a>
          <a href="dataKelas.php" class="w3-bar-item w3-button">Data Kelas</a>
        </div>
      </div>

        <a href="setting.php" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Setting</a>

        <a href="#" class="w3-bar-item w3-button" style="padding-left: 30px"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; &nbsp;&nbsp;&nbsp;Logout</a>

</div>

<div id="main">

<div class="w3-teal" style="">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
        <h1 style="text-align: center">Politeknik Negeri Lhokseumawe</h1>
  </div>
</div>


<div class="w3-container">
  <br>
  <h4 style="margin-left: 35px"> Form Data Mahasiswa </h4>
                <form action="proses edit murid.php" method="post" enctype="multipart/form-data"> 
                <table border="0" width="75%" style="margin-left: 20px; margin-bottom: 200px; border-spacing: 15px 10px;">             
                <tr>
                    <td><label for="nip">NIM</label></td>
                    <td><input type="text" pattern="[P0-9]*" id="nim" name="nim" placeholder="&nbsp;&nbsp;Format : PXXX" value="<?php echo $id_siswa ?>" /></td>
                </tr>

                <tr>
                    <td><label for="namadepan">Nama Lengkap</label></td>
                    <td><input type="text" pattern="[A-Za-z]*" id="namalengkap" name="namalengkap" placeholder="&nbsp;&nbsp;Format : A-Z" value="<?php echo $nama_siswa ?>"/></td>
                </tr>

                <tr>
                    <td><label for="kelas">Kelas</label></td>
                    <td><select name="kelas" id="kelas" style="border-width:0 0 2px; outline:0px; width: 100% "  >
                      <option disabled selected style="margin-left: 8px" selected="<?php echo $nama_kelas ?>">Pilih Kelas</option>
                      <option selected=""><?php echo $nama_kelas ?></option>
                      <?php
                        $sql_kelas = mysqli_query($link, "select * from kelas");
                        while($data = mysqli_fetch_array($sql_kelas)){
                          echo "<option value='$data[0]' > $data[1] </option>";
                        }     
                      ?>
                    </select> </td>
                </tr>
                
                <tr>
                <td>Jenis Kelamin : </td>
                <td width=""><label for="option-1">
                    <input type="radio" name="jk" value="Pria" id="option-1" checked style="margin-left: 10px"/>
                    <span class="" > Pria </span>
                </label>

                <label for="option-2" style="margin-left: 10px">
                    <input type="radio" name="jk" value="Wanita" id="option-2" />
                    <span class=""> Wanita</span>
                </label> </td>
                </tr>

                 <tr>
                    <td><label >Tanggal Lahir</label></td>
                    <td><input type="date" id="tanggallahir" name="tanggallahir" value="<?php echo $tgl_lahir ?>" /> </td>
                </tr>

                <tr>
                    <td><label for="alamat" class="">Alamat</label></td>
                    <td><input type="text" id="alamat" name="alamat" value="<?php echo $alamat ?>" /></td>
                </tr>

                   <tr>
                    <td><label for="nama_ortu" class="">Nama Ortu</label></td>
                    <td><input type="text" id="nama_ortu" name="nama_ortu" value="<?php echo $nama_ortu ?>" /></td>
                </tr>


                   <tr>
                    <td><label for="telp_ortu" class="">Telp Ortu</label></td>
                    <td><input type="text" id="telp_ortu" name="telp_ortu" value="<?php echo $telp_ortu ?>" /></td>
                </tr>

                <tr>
                <div class="">
                    <td><label for="password" >Password</label></td>
                    <td><input type="password"  id="password" name="password" disabled="" /></td>
                </div>
                </tr>
                
                <tr>
                    <td><label for="telepon">No Telp</label></td>
                    <td><input type="text" pattern="[0-9]*" class="" id="no_telp" name="no_telp" placeholder="No. Telp (+62)" value="<?php echo $no_telp ?>" /></td>
                </tr>

                <tr>
                    <td><label >Masukan Foto (JPG atau PNG)</label></td>
                    <td><input type="file" name="file" id="file" value="Masukan Foto PNG atau JPEG" /></td>
                <br>
                </tr>                
               
                <tr>
                <td><button type="submit">Edit Mahasiswa</button></td> 
                </tr>
                 </table> 
            </form>

              
      </div>
</div>

<br>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}

function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
