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
<li class="active"><a href="leave-applications.php">Pending Applications</a></li>
<li><a href="leave-all.php">All Applications</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<div class="center">
	<div class="header-form">
		Pending Leave Applications
	</div>
	<br>
	<br>
	<table>
		<tr>
		<th>Leave ID</th>
		<th>Faculty ID</th>
		<th>Category</th>
		<th>Days</th>
		<th>Reason</th>
		<th>Start Date</th>
		<th>Substitute</th>
		<th>Approve</th>
		<th>Reject</th>
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
	<form action="leave-update.php" method="POST">
	<td><input type="hidden" name="lid" value="<?php echo  $row2[0];?>"><?php echo "$row2[0]"?></td>
	<td><input type="hidden" name="fid" value="<?php echo  $row2[1];?>"><?php echo "$row2[1]"?></td>
	<td><input type="hidden" name="category" value="<?php echo  $row2[2];?>"><?php echo "$row2[2]"?></td>
	<td><input type="hidden" name="days" value="<?php echo  $row2[3];?>"><?php echo "$row2[3]"?></td>
	<td><?php echo "$row2[4]"?></td>
	<td><?php echo "$row2[5]"?></td>
	<td><?php echo "$row2[6]"?></td>
	<td><button type="submit" name="approve">Approve</button></td>
	<td><button type="submit" name="reject">Reject</button></td>
	</form>
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