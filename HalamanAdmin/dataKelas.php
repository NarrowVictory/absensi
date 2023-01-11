<?php
  
  session_start();
  include "koneksi.php";
 
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  $query="select * from sekolah";
  $res=mysqli_query($link, $query);
  while($data=mysqli_fetch_array($res)){
    $nama_sekolah=$data['nama_sekolah'];
    $alamat = $data['alamat'];
    $deskripsi=$data[3];
  }
  
  $jumlah_guru=mysqli_num_rows(mysqli_query($link, "select * from guru where status='Guru'"));
  $jumlah_kelas=mysqli_num_rows(mysqli_query($link, "select * from kelas"));
  $jumlah_siswa=mysqli_num_rows(mysqli_query($link, "select * from siswa"));
  
  
?>

<?php
  
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  
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
          <a href="lihat_murid.php" class="w3-bar-item w3-button">Data Mahasiswa</a>
          <a href="" class="w3-bar-item w3-button">Data Pengawas</a>
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
  <form role="form" action="dataKelas.php" method="post" name="postform" enctype="multipart/form-data">
    <div>
            <label for="search">
              <i class="fa fa-user"></i>
            </label>
            <div>
              <input type="text" id="search" name="search" placeholder="Masukan nama kelas" />
            </div>
            <br>
        </div>
    </form>

        <table border="1">
          <thead>
          <tr>
            <th width="30%">ID Kelas</th>
            <th width="30%">Nama Kelas</th>
            <th width="30%">Aksi</th>           
          </tr>
          </thead>
          <tbody>
          <?php
     if ( empty($_POST["search"]) ){
          $sql="select *,g.nama_guru from kelas k join guru g on k.id_guru=g.id_guru order by nama_kelas";
     }else{   
      $cari=$_POST['search'];
      $sql = "select *,g.nama_guru from kelas k join guru g on k.id_guru=g.id_guru where k.nama_kelas like '$cari%' order by nama_kelas"; 
     }      

          $query=mysqli_query($link, $sql);
          
          while ($data=mysqli_fetch_array($query)){
            $id_kelas=$data["id_kelas"];
            $nama_kelas=$data["nama_kelas"];
        
          ?>

          <tr>
            <td><?php echo $id_kelas; ?></td>
            <td><?php echo $nama_kelas; ?></td>
            <td>
            <a id="edit<?php echo $id_kelas; ?>" href="edit kelas.php?id=<?php echo $id_kelas; ?>">
              <i class="fa fa-pencil"></i>
            </a>                  
            <div for="edit<?php echo $id_kelas; ?>">
             
            </div>      
            <a id="hapus<?php echo $id_kelas; ?>" href="proses hapus kelas.php?id=<?php echo $id_kelas; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">
              <i class="fa fa-trash"></i>
            </a>      
            <div for="hapus<?php echo $id_kelas; ?>">
             
            </div>                              
            <br>
            </td>           
          </tr>
          <?php } ?>
          </tbody>
          </table>

              
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
