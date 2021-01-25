<?php

session_start();
if(isset($_SESSION['hod']))
{

require 'connect-db.php';

$lid = $_POST['lid'];
$fid = $_POST['fid'];
$category = $_POST['category'];
$days = (int)$_POST['days'];

if(isset($_POST['approve']))
{
	
	$row = mysqli_query($con,"select casual_rem,sick_rem from faculty where faculty_id='".$fid."'");
	$row1 = mysqli_fetch_row($row);
	$casual = (int)$row1[0];
	$sick = (int)$row1[1];
	$status = "Approved";
	if($category == "Casual")
	{
		$rem = $casual - $days;
		$que2 = "update faculty set casual_rem = '".$rem."' where faculty_id = '".$fid."' ";		

	}
	else if($category =="Sick")
	{
		$rem = $sick - $days;
		$que2 = "update faculty set sick_rem = '".$rem."' where faculty_id = '".$fid."' ";		
	}

	$que3 = mysqli_query($con,$que2);	
	
}
else if(isset($_POST['reject']))
{
	$status = "Rejected";
}

$date = date("d/m/Y");

$que = "update leaves set status = '".$status."' ,date_update = '".$date."' where leave_id = '".$lid."' ";
$que1 = mysqli_query($con,$que);



header("location:leave-applications.php");

}
else
{
	header("location:index.php");	
}


?>