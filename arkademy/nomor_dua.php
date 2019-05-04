<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php


// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Username tidak boleh kosong!";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
	$jh = 8;
	$name=substr($_POST["name"], 0, $jh);
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password tiak boleh kosong!";
  } else {
    $pass = test_input($_POST["pass"]);
	$result=substr($pass, 8, 35);
    $passErr = "Password minimal 8 karakter!";
  }

 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo 'Username'.' : '. $name;
echo "<br>";
echo 'Password'.' : '. $pass;
?>

</body>
</html>