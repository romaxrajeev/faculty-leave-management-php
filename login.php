<?php

mysql_connect("localhost","root","");
mysql_select_db("trial");

if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$que1=mysql_query("select * from users where Email='$email' and Password='$password'");
	$count1=mysql_num_rows($que1);
	if($count1==1)
	{
		header("location:home.php");
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


?>