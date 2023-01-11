<!DOCTYPE html>
<html>
  <head>
  <title>Projects DPW | Login</title>
  <link href='login.ico' rel='shortcut icon'>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<body>
  <br>

<br>

  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
      echo '<meta http-equiv="refresh" content="2; url=http://localhost/Project/index.php">';
    }
  }
  ?>
  
  <br>

  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <img src="icon-mahasiswa-png.png">
      </div>

      <form method="post" class="form" action="cek_login.php" name="postform">
        <input id="user-email" class="form-content" type="text" name="username" required=""
        placeholder="Username" style="padding-bottom:22px; text-align: center; font-family: Segoe UI Light;
        font-size: 15px">
        
        <div class="form-border"></div>

        <br>
        <input id="user-password" class="form-content" type="password" name="password" required="" 
        placeholder="Password" style="padding-bottom:22px; text-align: center; font-family: Segoe UI Light;
        font-size: 15px">        
        <div class="form-border"></div>
        
      <p style="font-family: Poppins-Regular; font-size: 14px; color: #666666;">
        <input type="checkbox" name="rememberme" > Keep me Logged in </p>
        <input id="submit-btn" type="submit" name="submit" value="LOGIN" style="margin-top: 10px">
      
      <p>
        <div class="text-center p-t-115" style="font-family: Poppins-Regular; font-size: 15px; color: #666666; line-height: 1.5; text-align: center"> Don’t have an account? <a href=""> Please Contacts Admin </a>
        </div>
      </p>
      
      </form>

      <br>
    </div>
  </div>
</body>

</html>