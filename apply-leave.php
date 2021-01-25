<?php
session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';
	$row = mysqli_query($con,"select gender,casual_rem,sick_rem from faculty where email='".$_SESSION['user']."'");
	$row1 = mysqli_fetch_row($row);
	$gender = $row1[0];
	$casual_rem = $row1[1];
	$sick_rem = $row1[2];
	
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
	#datepicker
	{
		width: 100%;
		margin-bottom: -30px;
		border: none;		
	}

</style>
</head>
<body>
<?php
include("nav.php");
?>
<ul class="nav">
<li><a href="home.php">Calender</a></li>
<li class="active"><a href="apply-leave.php">Apply for Leave</a></li>
<li><a href="status-leave.php">Status of Leave</a></li>
<li><a href="user-settings.php">Settings</a></li>
<li><a href="signout.php">Sign Out</a></li>
</ul>
<div class="center-content">
<div class="center">
	<div class="header-form">
		Apply for Leave
	</div>

<form action ="leave-process.php"  method="POST" style="margin-top: 40px;">

<select name="category" onchange="checkType(this);">
	<?php
	if($casual_rem > 0)
	{
		?>
		<option name="Casual" value="Casual">Casual</option>
		<?php
	}
	?>

	<?php
	if($sick_rem > 0)
	{
		?>
		<option name="Sick" value="Sick">Sick</option>
		<?php
	}
	?>


<option name="Half" value="Half">Half Day</option>
<option name="Other" value="Other">Other</option>
<?php
if($gender == 'female')
{echo '<option name="Maternity" value="Maternity">Maternity</option>';	}
?>
</select>
<br>
<br>

<div id="days">
<input type="number" name="days" placeholder="Enter Number of Days" max="30" required>
<br>
<br>
</div>

<div id="Reason" style="display: none;">
<input type="text" name="reason"  placeholder="Enter Reason for Leave">
<br>
<br>
</div>

<div id="datepicker" class="date" data-date-format="dd-mm-yyyy">
<input type="text" name="start_date" placeholder="Select Start Date">
<span class="input-group-addon">
<span class="glyphicon glyphicon-calendar"></span>
</span>
</div>

<br>
<br>
<input type="text" name="substitute" placeholder="Enter Substitute Faculty">
<br>
<br>
<center><button type="submit" value="Apply" name="apply">Apply</button></center>
</form>
</div>
</div>


<div class="container-fluid" style="margin-top: 50px;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>

<script>
	    $(function () {
	        $('#datepicker').datepicker({
	            format: "dd/mm/yyyy",
	            autoclose: true,
	            todayHighlight: true,
		        showOtherMonths: true,
		        selectOtherMonths: true,
		        changeMonth: true,
		        changeYear: true,
		        minDate: new Date(),
	        });
	    });
	</script>
<script type="text/javascript">
function checkType(that)
{
	if(that.value == "Other")
	{
		document.getElementById("Reason").style.display = "block";
		document.getElementById("days").style.display = "block";
	}
	else if(that.value == 'Half')
	{
		document.getElementById("Reason").style.display = "block";
		document.getElementById("days").style.display = "none";
	}
	else
	{
		document.getElementById("Reason").style.display = "none";
		document.getElementById("days").style.display = "block";
	}
}

</script>
</body>
</html>
<?php
}
else
{
	header("location: index.php");
}
?>