<?php

require 'connect-db.php';

if(isset($_POST['signup']))
{
	$fid = $_POST['faculty_id'];
	$name = $_POST['name'];
	if(isset($_POST['gender']))
	{
		$gender = $_POST['gender'];		
	}
	$branch = $_POST['branch'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$casual_rem = 30;
	$sick_rem = 30;

	//Checking if already present
	$query1 = mysqli_query($con,"select * from faculty where email='$email'");
	if(mysqli_num_rows($query1) > 0)
	{
		?>
		<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Leave Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/all.css">

</head>
<body>
<!--Header-->
<div class="container-fluid">
<div class="header-text">
	Faculty Leave Management System
</div>
</div>
<!--End Header-->
<!--Content-->
<div class="card">
	<div class="container1">
		Account already exists. 
		<br>
		<button type="submit" value="Signup" name="signup" onclick="location.href='signup.php'">Sign Up</button>
	</div>
</div>
<!--End content-->
<!--Footer-->
<div class="container-fluid" style="margin-top: 55%;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>
<!--End Footer-->
</body>
</html>
		<?php
	}
	else
	{
	$pass_hash = password_hash($password, PASSWORD_DEFAULT);
	$insert_query="INSERT INTO faculty VALUES(?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($con,$insert_query);
	$stmt->bind_param("ssssssss", $fid, $name, $gender, $branch, $email, $pass_hash, $casual_rem, $sick_rem);
	$stmt->execute();

	header("location:index.php");
	}	
}
else
{
	echo("Database error");
}
?>