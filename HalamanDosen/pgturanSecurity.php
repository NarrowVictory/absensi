<?php
  
  session_start();
  include "koneksi.php";

  $admin_id = $_SESSION['guru_id'];
  
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

hr{
  color: #a9a9a9;
  opacity: 0.3;
}

.icon {
  padding: 10px;
  background: grey;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius: 3px;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */

.myButton {
  box-shadow:inset 0px 1px 0px 0px #fff6af;
  background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
  background-color:#ffec64;
  border-radius:6px;
  border:1px solid #ffaa22;
  display:inline-block;
  cursor:pointer;
  color:#333333;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ffee66;
  width: 100%;
  text-align: center;
}

.myButton:hover {
  background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
  background-color:#ffab23;
}
.myButton:active {
  position:relative;
  top:1px;
}

.btn {
  background-color: transparent;
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  display: flex;
  align-self: center;
  font-size: 1rem;
  line-height: 1;
  padding: 1.2em 2.8em;
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}

.btn:hover, .btn:focus {
  color: blue;
  outline: 0;
}

td{
  width: 80%;
  padding-right: 50px;
}

tr{
  width: 80%;
}

::-webkit-input-placeholder { 
  font-family: Segoe UI Light;
}

option, select{
  font-family: Segoe UI Light;
}

input[type="date"] , input[type="text"], input[type="email"]{
  font-family: Segoe UI Light;
}

input[type="date"]{
  font-family: Segoe UI Light;
}

input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #d1d3d1;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
        font-family: Segoe UI Light;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #ffa500;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
        font-family: Segoe UI Light;
    }

::-webkit-file-upload-button {
  background-color: black;
  color: white;
  border : 2px;
  text-align: center;
  width: 50%;
  border-radius: 5px;
}

::-webkit-file-upload-button:hover {
  background-color: orange;
}



</style>
</head>
<body>

<a href="absensi.php" target="_SELF" style="margin-top: 10px;" class="btn"> <i class="fas fa-angle-double-left"></i> &nbsp; Previous </a>

<table border="0" align="center">
<form role="form" action="proses setting security.php?id=<?php echo $admin_id;?>" method="post" name="postform" enctype="multipart/form-data" style="max-width:100px; margin:auto">
   <header style="display: inline; text-align: center">
                    <br>
                    <div style="text-align: center">
                    <a href="pgturanAkun.php" style="text-decoration:none; padding-left: 20px; color: #6E0011; padding-left: 20px; cursor: pointer" onmouseover="this.style.color='#DED808';" onmouseout="this.style.color='#6E0011';""><i class="fas fa-user-circle" aria-hidden="true"></i>&nbsp; &nbsp;Akun</a>
                    <a href="pgturanSecurity.php" style="text-decoration:none; padding-left: 20px; color: #6E0011; padding-left: 20px; cursor: pointer" onmouseover="this.style.color='#DED808';" onmouseout="this.style.color='#6E0011';""><i class="fas fa-lock" aria-hidden="true"></i>&nbsp; &nbsp;Security</a><br><br><hr>
                    </div>
                    <br>

                </header>

  <br><br>
  <tr><td>
  <div class="input-container">
    <i class="fas fa-envelope icon"></i>
    <input class="input-field" type="email" name="email" id="email" value="<?php echo $email; ?>">
  </div></td></tr>

<tr>
  <td>
  <div class="input-container">
    <i class="fas fa-user icon"></i>
    <input class="input-field" type="text" id="username" name="username" value="<?php echo $username; ?>">
  </div></td></tr>

  <tr>
  <td>
  <div class="input-container">
    <i class="fas fa-phone-volume icon"></i>
    <input class="input-field" type="text" pattern="[0-9]*" id="telp" name="telp" value="<?php echo $no_telp; ?>">
  </div></td></tr>

  <tr>
  <td>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password"  id="password" name="password" placeholder="Password">
  </div></td></tr>
  
  
<tr>
  <td align="right">
  <div class="input-container">
    <button type="submit" class="myButton" style="text-align: center; float: right;"><p style="font-family: Segoe UI Light; display: inline;">Update</p></button>
  </div></td></tr>



  
</form>
</table>

</body>
</html>
