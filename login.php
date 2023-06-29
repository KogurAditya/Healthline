<?php
session_start();
require_once("function.php");
if(isset($_POST['submit'])!=NULL)
{
$con=mysqli_connect("localhost","root","","aditya");
if(!$con)
{ echo "conecction fail";
}
$flag=0;
$name = isset($_POST['uname']) ? $_POST['uname'] : '';
$id = isset($_POST['psw']) ? $_POST['psw'] : '';
//echo $name."<br>".$id;
$_SESSION['id']=$name;
$query1 = mysqli_query($con, "SELECT * FROM users");
if($query1)
{
while($row = mysqli_fetch_assoc($query1))
{
	if(($row['username']==$name)&&($row['password']==$id))
	{
		if($row['username']=="Admin")
		{
			redirect("loc.php");
		}
		else{
			redirect("next.php");
		}
			$flag=1;
	}
	
}
if($flag==0)
{
	echo"invalid username or password";
}

}
else
{
	echo"query has failed server is down ";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body style="background-color:;">

<h2>Login Page</h2>
<form action="login.php" method="post">
  <div >
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
  </div>
  <div  style="background-color:#f1f1f1">
    <a type="button" class="cancelbtn" href="http://localhost/Aditya/register.php">Register</a>  
  </div>
</form>
</body>
</html>
