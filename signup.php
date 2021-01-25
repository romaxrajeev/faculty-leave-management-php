<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Leave Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href="css/all.css" rel="stylesheet">
<style type="text/css">
#idv, #namev, #emailv, #passv
{
	display: none;
	font-size: 12px;
}	
</style>
</head>
<body>

<!--Header-->
<div class="container-fluid">
<div class="header-text">
	Faculty Leave Management System
</div>
</div>
<!--End Header-->
<!--Content-->
<!--Left-->
<div class="image-left">
<img src="signup.svg" width="95%" height="95%" style="padding-top: 100px; padding-left: 30px;">
</div>

<!--End Left-->
<!-- Right-->
<div class="right-content">
<div class="card" style="align-content: center;">
<div class="container1">
<form action="adduser.php" method="POST" onsubmit="return validate()">
<input type="text" name="faculty_id" placeholder="Enter your Faculty ID" onkeyup="checkID()" id="fid" required>
<p id="idv">ID is not of 6 characters.</p>
<br>
<br>
<input type="text" name="name" placeholder="Enter your Name" onkeyup="checkName()" id="fname" required>
<p id="namev">Name is very short.</p>
<br>
<br>
<center style="padding-bottom: 10px; ">

<input type="radio" name="gender" value="male" class="radioN" required>&nbsp;Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="gender" value="female" class="radioN">&nbsp;Female
</center>
<select name="branch">
<option name="AUTO">AUTO</option>
<option name="COMPS">COMPS</option>
<option name="ETRX">ETRX</option>	
<option name="EXTC">EXTC</option>
<option name="IT">IT</option>
<option name="MECH">MECH</option>
</select>
<br>
<br>	
<input type="email" name="email" placeholder="Enter your email" onkeyup="checkMail()" id="email" required>
<p id="emailv">Email does not belong to MES domain.</p>
<br>
<br>
<input type="password" name="password" placeholder="Enter your password" onkeyup="checkPass()" id="pass" required>
<p id="passv">Password is too short</p>
<br>
<br>
<center><button type="submit" value="SignUp" name="signup">Sign Up</button>
</form>
</center>
</div>
</div>
</div>
<!--End Right-->
<!--End content-->
<!--Footer-->
<div class="container-fluid" style="margin-top: 55%;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>
<!--End Footer-->
<script type="text/javascript" src="js/signup.js"></script>

</body>
</html>