<?php

require 'connect-db.php';


if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$que1=mysqli_query($con,"select password from hod where email='$email'");
	$row = mysqli_fetch_array($que1);
	
	if($password == $row[0])
	{
		session_start();
		$_SESSION['hod'] = $email;
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