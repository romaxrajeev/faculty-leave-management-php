<?php

require 'connect-db.php';

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$que1=mysqli_query($con,"select password from faculty where email='$email'");
	$row = mysqli_fetch_array($que1);
	
	if(password_verify($password, $row['password']))
	{
		session_start();
		$_SESSION['user'] = $email;
		header("location: home.php");	
	}

	else
	{
		header("location:index.php");
	}
	

}


else
{
	echo("Database error");
}


?>