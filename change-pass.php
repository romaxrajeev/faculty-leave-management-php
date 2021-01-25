<?php

session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';

	if(isset($_POST['change']))
	{
		$oldpass = $_POST['old-pass'];
		$newpass = $_POST['new-pass'];
		$newpasshash = password_hash($newpass, PASSWORD_DEFAULT);

		$que1=mysqli_query($con,"select password from faculty where email='".$_SESSION['user']."'");
		$row = mysqli_fetch_array($que1);
		
		if(password_verify($oldpass, $row['password']))
		{
			
			$que2 = "update faculty set password = '".$newpasshash."' where email = '".$_SESSION['user']."' ";
			header("location: home.php");	
		}

		else
		{
			echo "Error";
		}
		

	}


	else
	{
		echo("Database error");
	}	
}



?>