<?php
session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';
	$row = mysqli_query($con,"select gender from faculty where email='".$_SESSION['user']."'");
	$row1 = mysqli_fetch_row($row);
	$gender = $row1[0];
	
?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Apply Leave - Faculty Leaves</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
<ul class="nav">
<li><a href="home.php">Calender</a></li>
<li><a href="apply-leave.php">Apply for Leave</a></li>
<li class="active"><a href="status-leave.php">Status of Leave</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<div class="center">
	<div class="header-form">
		Status of Leaves
	</div>
	<br>
	<br>
	<table>
		<tr>
		<th>Leave ID</th>
		<th>Category</th>
		<th>Days</th>
		<th>Reason</th>
		<th>Start Date</th>
		<th>Substitute</th>
		<th>Status</th>
		<th>Date Update</th>
	</tr>
	<?php

	$row = mysqli_query($con,"select faculty_id from faculty where email='".$_SESSION['user']."'");
	$row1 = mysqli_fetch_row($row);
	$fid = $row1[0];

	$lrow = mysqli_query($con,"select leave_id,category,days,reason,startDate,substitute,status,date_update from leaves where faculty_id='".$fid."'");
	while($row2 = mysqli_fetch_array($lrow, MYSQLI_BOTH))
{
	echo "<tr>";
    echo "<td>".$row2[0]."</td>";
    echo "<td>".$row2[1]."</td>";
    echo "<td>".$row2[2]."</td>";
    echo "<td>".$row2[3]."</td>";
    echo "<td>".$row2[4]."</td>";
    echo "<td>".$row2[5]."</td>";
    echo "<td>".$row2[6]."</td>";
    echo "<td>".$row2[7]."</td>";
    echo "</tr>";    
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