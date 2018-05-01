<?php
$con = mysqli_connect("localhost","root","","test");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  

  

  //insert query

  if (isset($_POST['insert'])) {
  	$username = $_POST["username"];
  	$email = $_POST["email"];
  	$password = $_POST["password"];
	$cpassword = $_POST["confirm_password"];
  	if (empty($username)) {
  		echo "enter user name";
  	}elseif (empty($email)) {
  		echo "enter email id";
  	}elseif (empty($password)) {
  		echo "enter password";
  	}elseif(empty($cpassword)){
	echo" confirm password";}
	else
	$sql = "INSERT INTO `prakhar` (username,email,password,confirm_password) VALUES('$username','$email',$password,$cpassword)";
  	if (mysqli_query($con, $sql)=== true) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($con);
            }
            $con->close();
         }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body style="background-color:grey;">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="confirm_password">
  	</div>
  	<div class="input-group">
  	  <input type="submit"class="abc" name="insert" value="Insert">
  	</div>
  		<p>
  		Already a member? <a href="login.html">Sign in</a>
  	</p>
  </form>
</body>
</html>