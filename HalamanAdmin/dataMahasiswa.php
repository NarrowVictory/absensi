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
 <main class="mdl-layout__content mdl-color--white-100">
        <div class="mdl-grid demo-content">
          <!--<div class="demo-charts mdl-color--white  mdl-cell mdl-cell--12-col mdl-grid">-->
            <!-- List guru-->
    <form role="form" action="lihat murid.php" method="post" name="postform" enctype="multipart/form-data">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons"><i class="mdi mdi-account-search"></i></i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" name="search" placeholder="Masukan nama murid"/>
              <label class="mdl-textfield__label" for="search">Masukan Nama Murid</label>
            </div>
        </div>
    </form>
    <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col mdl-shadow--2dp">
          <thead>
          <tr>
            <th class="mdl-data-table__cell--non-numeric">NIM</th>
            <th class="mdl-data-table__cell--non-numeric">Nama Siswa</th>
            <th class="mdl-data-table__cell--non-numeric">Kelas</th>
            <th></th>           
          </tr>
          </thead>
          <tbody>
     <?php
   if ( empty($_POST["search"]) ){
    $sql=" select s.*,k.nama_kelas from siswa s join kelas k on s.id_kelas=k.id_kelas";
  }else{    
    $cari=$_POST['search'];
    $sql=" select s.*,k.nama_kelas from siswa s join kelas k on s.id_kelas=k.id_kelas where nama_siswa like '$cari%'";
  }
    

    $query=mysqli_query($link, $sql);
    
    while ($data=mysqli_fetch_array($query)){
      $nim=$data["id_siswa"];
      $nama=$data["nama_siswa"];
      $jk=$data["jk"];
      $tgl_lahir=$data["tgl_lahir"];
      $alamat=$data["alamat"];
      $nama_ortu=$data["nama_ortu"];
      $telp_ortu=$data["telp_ortu"];
      $no_telp=$data["no_telp"];
      $nama_kelas = $data["nama_kelas"];
      ?>
     
          <tr>
            <td ><?php echo $nim;?></td>
            <td ><?php echo $nama;?></td>
            <td ><?php echo $nama_kelas;?></td>
            <td>
                
            <a id="edit<?php echo $nim; ?>" href="edit siswa.php?id=<?php echo $nim; ?>">
              <i class="fa fa-pencil"></i>
            </a>                  
            <div class="mdl-tooltip" for="edit<?php echo $nim; ?>">
            </div>      
            <a id="hapus<?php echo $nim; ?>" class="mdl-button mdl-js-button mdl-button--icon" href="proses/proses hapus murid.php?id=<?php echo $nim; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">
              <i class="fa fa-trash"></i>
            </a>      
            <div class="mdl-tooltip" for="hapus<?php echo $nim; ?>">
            </div>                              
            <br>
            </td>           
          </tr>
      <?php }?>
          </tbody>
          </table> 
        </div>
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
