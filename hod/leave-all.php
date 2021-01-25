<?php
session_start();
if(isset($_SESSION['hod']))
{

?>
<html>
<head>
	<title>Applications - Faculty Leaves HOD</title>
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/all.css">
<style type="text/css">
	
table
{
	width: 100%;
	font-family: Montserrat;
}

th
{
	background-color: #05147D;
	color: #fff;
	font-family: inherit;
	font-weight: 600;
	padding: 10px;
	text-align: center;
}

td
{
	border-bottom: 3px solid #ffc107;
	padding: 10px;
	font-weight: 300;
	text-align: center;
}

</style>
</head>
<body>
	<?php
	include("nav.php");
	?>


<!-- Navbar-->
<ul class="nav">
<li><a href="home.php">Calender</a></li>
<li><a href="leave-applications.php">Pending Applications</a></li>
<li class="active"><a href="leave-all.php">All Applications</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<div class="center">
	<div class="header-form">
		Leave Applications 
	</div>
	<br>
	<br>
	<table>
		<tr>
		<th>Leave ID</th>
		<th>Faculty ID</th>
		<th>Faculty Name</th>
		<th>Category</th>
		<th>Days</th>
		<th>Reason</th>
		<th>Start Date</th>
		<th>Substitute</th>
	</tr>
	<?php

	require 'connect-db.php';

	$row = mysqli_query($con,"select branch from hod where email='".$_SESSION['hod']."'");
	$row1 = mysqli_fetch_row($row);
	$branch = $row1[0];

	$lrow = mysqli_query($con,"select leave_id,faculty_id,category,days,reason,startDate,substitute from leaves where branch='".$branch."' and status = 'pending'");
	
	while($row2 = mysqli_fetch_array($lrow, MYSQLI_BOTH))
{
	?>
	<tr>
	<td><?php echo "$row2[0]"?></td>
	<td><?php echo "$row2[1]"?></td>
	<?php
	$facultyname = mysqli_query($con,"select name from faculty where faculty_id='".$row2[1]."'");
	?>
	<td><?php echo "$facultyname"?></td>
	<td><?php echo "$row2[2]"?></td>
	<td><?php echo "$row2[3]"?></td>
	<td><?php echo "$row2[4]"?></td>
	<td><?php echo "$row2[5]"?></td>
	<td><?php echo "$row2[6]"?></td>
	</tr>
	<?php  
}
	?>
	</table>
</div>


<?php

}
else
{
	header("location: index.php");
}

?>