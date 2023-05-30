<?php

session_start();


    $SIGN_UP_ID=$_SESSION['SIGN_UP_ID'];
	
	$name=$_POST['name'];
	$amount =$_POST['amount'];
	$debt_selection =$_POST['debt_selection'];
	$contact =$_POST['contact'];
	$details =$_POST['details'];
	$date =$_POST['date'];
	 

	require_once('dbconnect.php');
	

	     date_default_timezone_set('Asia/Dhaka');    
        $currentdate = date('Y-m-d'); 
								

	$sql = "INSERT INTO `DEBT_SETTLEMENT`(`SIGN_UP_ID`,`DEBT_SETTLEMENT_WITH`, `DEBT_SETTLEMENT_AMOUNT`, 
	`DEBT_SETTLEMENT_TYPE`, `DEBT_SETTLEMENT_DATE`, `DEBT_SETTLEMENT_CONTACT`, `DEBT_SETTLEMENT_CUZ`, `DEBT_SETTLEMENT_PAYMENT_DATE`) 
	VALUES ('$SIGN_UP_ID','$name','$amount','$debt_selection','$currentdate','$contact','$details','$date')";
                                  
	$confirm = mysqli_query($con,$sql);
	
	if($confirm)
	{
		echo '<script> alert("A new Diary is added.");</script>';
		echo "<script>window.open('home.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Add un-successful");</script>';
		echo "<script>window.open('new_diary.php','_self')</script>";
	}
	
     mysqli_close($con);
	 

	?>