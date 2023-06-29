<?php
require_once("function.php");
if(isset($_POST['submit'])!=NULL)
{
	$check=0;
session_start();
$con=mysqli_connect("localhost","root","","Aditya");
$name1 = isset($_POST['uname']) ? $_POST['uname'] : '';
$id = isset($_POST['email']) ? $_POST['email'] : '';
$id1 = isset($_POST['email1']) ? $_POST['email1'] : '';
$password = isset($_POST['psw']) ? $_POST['psw'] : '';

$ins="INSERT INTO prob (disease,hospital,doctors,contact) VALUES ('$name1','$password','$id','$id1')";
$quer=mysqli_query($con,$ins);
		if($quer)
		{
			
			echo "<f>done";
		}
		else
		{
			echo "failed";
		}

}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>


<form action="loc.php" method="post">
  <div >
    <label for="uname"><b>Disease</b></label>
    <input type="text" placeholder="Enter Disease" name="uname" required>
    <label for="psw"><b>Hospital</b></label>
    <input type="text" placeholder="Enter Hospital" name="psw" required>
	<label for="email"><b>Doctor Name</b></label>
    <input type="text" placeholder="Enter Doctor-name" name="email" required>
	<label for="email1"><b>contact number</b></label>
    <input type="text" placeholder="Enter contact number" name="email1" required>
    <button type="submit" name="submit">Enter</button>
  </div>
  
</form>
</body>
</html>
