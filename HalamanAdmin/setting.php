<?php
  
  session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   
  $admin_id = $_SESSION['id'];
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  
  $sql="select * from guru where id_guru='$admin_id'";
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
    $tgl_lahir = $data["tgl_lahir"];
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
          <a href="#" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="#" class="w3-bar-item w3-button">Data Pengawas</a>
          <a href="#" class="w3-bar-item w3-button">Data Kelas</a>
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
  
  <main>   
               <div>
                <header>
         
                 
                    <a href="setting.php" style="text-decoration:none"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; &nbsp;Akun</a>
                    <br>
                    <a href="setting1.php" style="text-decoration:none"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp; &nbsp;Security</a>

                </header>
                
           
                    <div>
                    <!-- akun -->
                   <div>
                      <div>
                        <!-- Form Tambah Guru-->
                        <form role="form" action="proses setting akun.php?id=<?php echo $admin_id;?>" method="post" name="postform" enctype="multipart/form-data">                       
      
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" pattern="[A-Z a-z]*" id="nama" name="nama" value="<?php echo $nama; ?>" />  
                            <br>

                            <label for="option-1">
                                <input type="radio" id="option-1" name="jk" value="Pria" checked/>
                                <span class="mdl-radio__label"> Pria </span>
                            </label>

                            <label for="option-2">
                                <input type="radio" id="option-2" name="jk" value="Wanita" />
                                <span> Wanita</span>
                            </label>
                            <br>

            
                                <label >Tanggal Lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" />                    
                            <br>

                            <div>
                                <label >Masukan Foto (JPG atau PNG)</label>
                                <input type="file" id="file" name="file" value="<?php echo $foto_profil; ?>" />
                            </div>
                            <br>
                            <button type="submit">Edit Akun</button>
                        </form>

                      </div>
                    </div>
                    </div>
                 
              </div>

        <!-- /form tambah guru-->
      </main>

              
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
