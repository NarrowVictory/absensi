<?php
  
  session_start();
  include "koneksi.php";
 
  $admin_name = $_SESSION["user_name"];
  $admin_foto = $_SESSION["user_foto"];

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
<html lang="en">
<head>
	<meta charset="UTF-8">
  <style type="text/css">

  </style>
	<title>Responsive Side Navigation Bar</title>
  <link rel="stylesheet" href="tes.css">
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

input[type="text"], input[type="date"], input[type="radio"]{
  font-family: Segoe UI Light;
}



  </style>

</head>
<body>
  <a href="admin.php">Back</a>
  <div class="" style="text-align: middle; text-align: center; padding-top: 20px; background-color: none">
    <div class="testbox" style="height: 360px ; background-color: none">
               <div>
                <header style="display: inline;">
                    <br>
                    <a href="pgturanAkun.php" style="text-decoration:none; padding-left: 20px"><i class="fas fa-user-circle" aria-hidden="true"></i>&nbsp; &nbsp;Akun</a>
                    <a href="pgturanSecurity.php" style="text-decoration:none; padding-left: 20px"><i class="fas fa-lock" aria-hidden="true"></i>&nbsp; &nbsp;Security</a><br><br><hr>
                    <br>

                </header>
                
           
                    <div>

                   <div>
                      <div>
                        <form role="form" action="proses setting akun.php?id=<?php echo $admin_id;?>" method="post" name="postform" enctype="multipart/form-data">                       
      
                                <i class="fas fa-id-card" style="font-size: 24px; display: inline; padding-right: 20px; "></i>
                                <input type="text" pattern="[A-Z a-z]*" id="nama" name="nama" value="<?php echo $nama; ?>" />  
                                <br>
            
                                <i class="fas fa-calendar-week" style="font-size: 24px; display: inline; padding-right: 20px; "></i>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" />
                                <br><br>

                                <label for="option-1">
                                <input type="radio" id="option-1" name="jk" value="Pria" checked/>
                                <span style="padding-right: 10px"> &nbsp;&nbsp;Pria </span>
                            </label>

                            <label for="option-2">
                                <input type="radio" id="option-2" name="jk" value="Wanita" />
                                <span style="padding-right: 10px">&nbsp;&nbsp;Wanita</span>
                            </label>                    
                            <br><br>

                            <div>
                                <i class="fas fa-camera" style="font-size: 24px; display: inline; padding-right: 20px; "></i>
                                <input type="file" id="file" name="file" value="<?php echo $foto_profil; ?>" />
                            </div>
                            <br>
                            <button class="myButton" type="submit">Edit Akun</button>
                        </form>

                      </div>
                    </div>
                    </div>
              </div>   
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