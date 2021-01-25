<?php

if(isset($_POST['signup']))
{
	$fid = $_POST['faculty_id'];
	$name = $_POST['name'];
	if(isset($_POST['gender']))
	{
		$gender = $_POST['gender'];		
	}
	$branch = $_POST['branch'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$casual_rem = 30;
	$sick_rem = 30;

		?>
		<!DOCTYPE html>
<html lang="en">
<head>
<title>Faculty Leave Management System</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Montserrat:300' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:600' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/all.css">
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
<div class="center-content">
	<div class="center" style="height: 400px;">
		<div class="header-form">
			Your Account has been successfully created.
		</div>
		<br>
		<p class="new-user-text">
			ID: <?php echo $fid; ?><br>
			Name: <?php echo $name; ?><br>
			Gender: <?php echo $gender; ?><br>
			Branch: <?php echo $branch; ?><br>
			Email: <?php echo $email; ?><br>
			Casual Leaves: <?php echo $name; ?><br>
			Sick Leaves: <?php echo $name; ?><br><br>
			<button class="submit-btn" style="margin-right: auto; margin-left: auto; display: block;"><a style="text-decoration: none; color: #000000;" href="index.php">Log me in <i class="fa fa-arrow-right"></i></a></button>
		</p>
		</div>
</div>
<!--End content-->
<!--Footer-->
<div class="container-fluid" style="margin-top: 55%;">
<div class="footer-text">
	&copy; All Copyrights Reserved. HardCoders
</div>
</div>
<!--End Footer-->
</body>
</html>
<?php
}
?>