<?php

session_start();
if(isset($_SESSION['user']))
{
	require 'connect-db.php';

	if(isset($_POST['apply']))
	{
		$row = mysqli_query($con,"select faculty_id, branch, casual_rem, sick_rem from faculty where email='".$_SESSION['user']."'");
		$row1 = mysqli_fetch_row($row);
		$fid = $row1[0];
		$branch = $row1[1];
		$casual = $row1[2];
		$sick = $row1[3];
		$category = $_POST['category'];
		if($category == "Half")
		{
			$days = 1;
		}
		else
		{
			$days = $_POST['days'];	
		}
		
		$reason = $_POST['reason'];
		$start_date = $_POST['start_date'];
		$substitute = $_POST['substitute'];
		if(($category == "Casual" and $days > $casual) or ($category == "Sick" and $days > $sick))
		{
			$status = "Rejected";
			$date = date("d/m/Y");
			$date_update = $date;
		}
		else
		{
			$status = "Pending";
			$date_update = "NaN";
		}
		

		function getName($n) { 
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
		    $randomString = ''; 
		  
		    for ($i = 0; $i < $n; $i++) { 
		        $index = rand(0, strlen($characters) - 1); 
		        $randomString .= $characters[$index]; 
		    } 
		  
		    return $randomString; 
		}

		$leave_id = getName(10);

		//Entry in DB 

		$insert_query="INSERT INTO leaves VALUES(?,?,?,?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($con,$insert_query);
		$stmt->bind_param("ssssssssss", $leave_id, $fid, $branch, $category, $days, $reason, $start_date, $substitute, $status, $date_update);
		$stmt->execute();

		
		header("location:status-leave.php");

	}

}

?>