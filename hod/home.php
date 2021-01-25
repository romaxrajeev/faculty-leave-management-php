<?php
session_start();
if(isset($_SESSION['hod']))
{

?>
<html>
<head>
	<title>Home - Faculty Leaves HOD</title>
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
<li><a href="leave-applications.php">Pending Applications</a></li>
<li><a href="leave-all.php">All Applications</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<!--End navbar-->
	<div class="calender">
	
	<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23011126&amp;ctz=Asia%2FKolkata&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%230B8043&amp;title=Holidays&amp;showNav=0&amp;showPrint=0&amp;showTz=0&amp;showCalendars=0&amp;showTabs=0" style="border-width:0;" width="800px" height="600px" frameborder="0" scrolling="no"></iframe>
	
	</div>


<div class="container-fluid" style="margin-top: 50px;">
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