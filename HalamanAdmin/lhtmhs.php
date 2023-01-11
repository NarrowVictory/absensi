<?php
  
  session_start();
  include "koneksi.php";
  /*
  if(isset($_session['id'])){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';  
  }*/   
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];
  $c = 1;
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

  </style>
	<title>Responsive Side Navigation Bar</title>
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="NewFolder/styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style type="text/css">

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

.collapsible {
  background-color: transparent;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.3s;
  font-weight: bold;
}

.collapsible:hover {
  background-color: transparent;
}

.active:hover{
  background-color: transparent;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: white;
}

.nav {
  text-align: left;
}

.nav li {
  display: inline-block;
  font-size: 20px;
  padding: 0px;
}

.nav a:hover {
background-color: black;
}

.table1 {
    font-family: sans-serif;
    color: #444;
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #f2f5f7;
}
 
.table1 tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
 
.table1, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table1 tr:hover {
    background-color: #f5f5f5;
}
 
.table1 tr:nth-child(even) {
    background-color: #f2f2f2;
}


  </style>

</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="top_menu" style="width: 100%;">
      <div class="logo">Politeknik Negeri Lhokseumawe</div>
      <?php echo date("d/m/Y");?>
    </div>
  </div>
  <br>
  <div class="sidebar">
      <ul><br>
        <img style="vertical-align: center; display: block; margin-left: auto; margin-right: auto; width: 50%; border-radius: 50%; width: 75px; height: 75px;" src="images/dosen/<?php echo $admin_foto; ?>" class="demo-avatar"><br>
    <p style="text-align: center; color: white"><span style=""><?php echo $admin_name ;?></span></p><br><br>
        <li style="margin-left: 10px"><a href="admin.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span></a></li>
        

        <li style="margin-left: 10px">
          <a href="#"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title"><button onclick="myFunction()" class="dropbtn" style="padding: 0; border: none;background: none; width: 100%; outline: none">&nbsp;Tambah Data</button></span>
        </a>
            <div id="myDropdown" class="dropdown-content">
            <a href="tmbdosen.php">Tambah Dosen</a>
            <a href="tmbmhs.php">Tambah Mahasiswa</a>
            <a href="tmbkelas.php">Tambah Kelas</a>
            <a href="tmbmk.php">Tambah Mata Kuliah</a>
            </div>
        </li>


        <li style="margin-left: 10px">
          <a href="#" class="active"> <span class="icon"><i class="fas fa-file-video"></i></span>
          <span class="title"><button onclick="myFunction1()" class="dropbtn1" style="padding: 0; border: none;background: none; width: 100%; outline: none">&nbsp;Lihat Data</button></span>
        </a>
            <div id="myDropdown1" class="dropdown-content1">
            <a href="lhtdosen.php">Data Dosen</a>
            <a href="#">Data Mahasiswa</a>
            <a href="lhtkelas.php">Data Kelas</a>
            <a href="lhtMK.php">Data Mata Kuliah</a>
            </div>
        </li>

        <li style="margin-left: 10px"><a href="pgturanAkun.php">
          <span class="icon"><i class="fas fa-blog"></i></span>
          <span class="title">Setting</span>
          </a></li>

        <li style="margin-left: 10px"><a href="../logout.php">
          <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container" style="margin-left: 270px">
  <form role="form" action="lhtmhs.php" method="post" name="postform" enctype="multipart/form-data">
            
            <table border="0" style="display: inline; margin-left: 0;">
            <div ><tr><td>
              <a href="tmbmhs.php" target="_blank" style="color : white; text-decoration: none; margin-top: 10px;background-color: #f44336; padding: 10px 20px; border-radius: 5px;" href="" onmouseover="this.style.color='#0F0'" onmouseover="this.style.backgroundColor='#ffffff'" onmouseout="this.style.color='#ffffff'">Tambah Mahasiswa</a></td>
              <input type="text" id="search" name="search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Masukan nama Siswa"/ style="border:none; width: 300px; height: 39px; border-radius: 5px; float: right;"> </tr>
            </div>
            </table>

            <br><br>
        
    </form>
    <table class="table1">
          <thead>
          <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Action</th>           
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
            <td ><?php echo $c++;?></td>
            <td ><?php echo $nim;?></td>
            <td ><?php echo $nama;?></td>
            <td ><?php echo $nama_kelas;?></td>

            <div style="display: inline;">
            <td>
                
            <a id="edit<?php echo $nim; ?>" href="edtmhs.php?id=<?php echo $nim; ?>">
              &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-user-edit"></i>
            </a>                  
               
            <a id="hapus<?php echo $nim; ?>" href="proses/proses hapus murid.php?id=<?php echo $nim; ?>" onclick="return confirm('Anda yakin ingin menghapus?');">
              &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash-alt"></i>
            </a>      
                                       
            <br>
            </td>
            </div>

          </tr>
      <?php }?>
          </tbody>
          </table> 
 
  </div>

  </div>


<script type="text/javascript">
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<script type="text/javascript">
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show1");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {
    var dropdowns1 = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns1.length; i++) {
      var openDropdown1 = dropdowns1[i];
      if (openDropdown1.classList.contains('show1')) {
        openDropdown1.classList.remove('show1');
      }
    }
  }
}
</script>

<script type="text/javascript">
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>