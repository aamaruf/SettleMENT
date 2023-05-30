<?php

    $DEBT_SETTLEMENT_ID=$_GET['DEBT_SETTLEMENT_ID'];
	
    $name=$_POST['name'];
	$amount =$_POST['amount'];
	$debt_selection =$_POST['debt_selection'];
	$contact =$_POST['contact'];
	$details =$_POST['details'];
	$date =$_POST['date'];


	require_once('dbconnect.php');



	$sql = "UPDATE `DEBT_SETTLEMENT` SET `DEBT_SETTLEMENT_WITH`='$name', `DEBT_SETTLEMENT_AMOUNT`='$amount' ,`DEBT_SETTLEMENT_TYPE`='$debt_selection', `DEBT_SETTLEMENT_CONTACT`='$contact' , `DEBT_SETTLEMENT_CUZ`='$details' , 
	`DEBT_SETTLEMENT_PAYMENT_DATE`='$date' WHERE DEBT_SETTLEMENT_ID='$DEBT_SETTLEMENT_ID'";

                                  

	$confirm = mysqli_query($con,$sql);

	

	if($confirm)

	{

		echo '<script> alert("A new information is updated !!");</script>';

		echo "<script>window.open('home.php','_self')</script>";

	}

	

	else

	{

		echo '<script> alert("Update un-successful !!!!");</script>';

		echo "<script>window.open('edit.php','_self')</script>";

	}

	

     mysqli_close($con);






?>