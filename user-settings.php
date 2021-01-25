<?php
session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';
	$row = mysqli_query($con,"select casual_rem, sick_rem from faculty where email='".$_SESSION['user']."'");
	$row1 = mysqli_fetch_row($row);
	$casual = $row1[0];
	$sick = $row1[1];

?>
<html>
<head>
	<title>Home - Faculty Leaves</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
	<?php
	include("nav.php");
	?>


<!-- Navbar-->
<ul class="nav">
<li><a href="home.php">Calender</a></li>
<li><a href="apply-leave.php">Apply for Leave</a></li>
<li><a href="status-leave.php">Status of Leave</a></li>
<li class="active"><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<!--End navbar-->

<div class="center-content">
<div class="center">
	<div class="header-form">
		Change Password
	</div>

<form action="change-pass.php" method="POST">
	<input type="password" name="old-pass" placeholder="Enter Old Password" required>
	<br>
	<br>
	<input type="password" name="new-pass" placeholder="Enter New Password" required>
	<br>
	<br>
	<button type="submit" name="change" value="change">Change Password</button>
</form>

</div>
</div>


<div class="container-fluid" style="margin-top: 600px;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>
</body>
</html>

<?php

}
else
{
	header("location: index.php");
}

?>