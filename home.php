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
<li class="active"><a href="home.php">Calender</a></li>
<li><a href="apply-leave.php">Apply for Leave</a></li>
<li><a href="status-leave.php">Status of Leave</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<!--End navbar-->
	<div class="calender" style="margin-left: auto; margin-right: auto; display: block;">
	
	<iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=bWVzLmFjLmluX2NsYXNzcm9vbWRlOGVjNDAyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%2333B679&amp;color=%230B8043&amp;color=%23263238&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0" style="border-width:0" width="600" height="600" frameborder="0" scrolling="no"></iframe>
	
	</div>


<div class="center-content">
<div class="card" style="align-content: center;">
<center>
Casual Leaves left: <?php echo $row1[0]; ?>
<br>
Sick Leaves left: <?php echo $row1[1]; ?>
<br>
</center>
</div>	
</div>
<br>
<br>

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