<?php

session_start();


    $SIGN_UP_ID=$_SESSION['SIGN_UP_ID'];
	
	$details=$_POST['details'];
	$date =$_POST['date'];
	$start_date =$_POST['start_date'];
	 

	require_once('dbconnect.php');
	

	     date_default_timezone_set('Asia/Dhaka');    
        $currentdate = date('Y-m-d'); 
								

	$sql = "INSERT INTO `TO_DO_LIST`(`SIGN_UP_ID`,`TO_DO_LIST_DETAIL`, `TO_DO_LIST_DURATION`, `TO_DO_LIST_DATE`, `TO_DO_LIST_WHEN`) 
	VALUES ('$SIGN_UP_ID','$details','$date','$currentdate','$start_date')";
                                  
	$confirm = mysqli_query($con,$sql);
	
	if($confirm)
	{
		echo '<script> alert("A new Task is added.");</script>';
		echo "<script>window.open('home.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Add un-successful");</script>';
		echo "<script>window.open('new_task.php','_self')</script>";
	}
	
     mysqli_close($con);
	 

	?>