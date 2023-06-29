<?php
require_once("function.php");
if(isset($_POST['submit'])!=NULL)
{
	$check=0;
session_start();
$con=mysqli_connect("localhost","root","","Aditya");
$name1 = isset($_POST['uname']) ? $_POST['uname'] : '';
$id = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['psw']) ? $_POST['psw'] : '';
$sel="SELECT * FROM users";
$quert=mysqli_query($con,$sel);
while($row=mysqli_fetch_assoc($quert))
{
	if($row['username']==$name1)
	{
		$check=1;
	}
}
if($check!=1)
{
$ins="INSERT INTO users (username,password,email) VALUES ('$name1','$password','$id')";
$quer=mysqli_query($con,$ins);
		if($quer)
		{
			echo "<script type='text/javascript'>alert('your username has been registered);</script>";
			echo "done";
		}
		else
		{
			echo "failed";
		}
}
else
{
	echo " <style=font-color:red;> "."*username already taken"."</style>";
}
}
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>

<h2>Registration Page</h2>
<form action="register.php" method="post">
  <div >
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email-id" name="email" required>
        
    <button type="submit" name="submit">Register</button>
  </div>
  <div  style="background-color:#f1f1f1">
    <a type="button" class="cancelbtn" href="http://localhost/Aditya/login.php">Login</a>  
  </div>
</form>
</body>
</html>
