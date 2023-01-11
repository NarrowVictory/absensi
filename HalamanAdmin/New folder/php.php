<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>

<h3>Password Validation</h3>
<p>Try to submit the form.</p>

<div class="container">
  <form action="php.php" method="post">
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    
    <input type="submit" value="Submit">
  </form>
</div>

<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<?php
if(!empty($_POST["password"]) && $_POST["password"] != "" ){

    if (strlen($_POST["password"]) <= '8') {
        $err = "Your Password Must Contain At Least 8 Digits !"."<br>";
    }
    elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
        $err = "Your Password Must Contain At Least 1 Number !"."<br>";
    }
    elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
        $err = "Your Password Must Contain At Least 1 Capital Letter !"."<br>";
    }
    elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
        $err = "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>";
    }
    elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
        $err = "Your Password Must Contain At Least 1 Special Character !"."<br>";
    }
}else{
    $err = "Please Enter your password"."<br>";
}
?>

</body>
</html>
