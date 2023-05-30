<?php

     $TO_DO_LIST_ID=$_GET['TO_DO_LIST_ID'];
	
    $details=$_POST['details'];
	$date =$_POST['date'];
	$start_date =$_POST['start_date'];
;


	require_once('dbconnect.php');



	$sql = "UPDATE `TO_DO_LIST` SET `TO_DO_LIST_DETAIL`='$details', `TO_DO_LIST_DURATION`='$date' ,`TO_DO_LIST_WHEN`='$start_date'
	WHERE TO_DO_LIST_ID='$TO_DO_LIST_ID'";

                                  

	$confirm = mysqli_query($con,$sql);

	

	if($confirm)

	{

		echo '<script> alert("A new information is updated !!");</script>';

		echo "<script>window.open('home.php','_self')</script>";

	}

	

	else

	{

		echo '<script> alert("Update un-successful !!!!");</script>';

		echo "<script>window.open('task_edit.php','_self')</script>";

	}

	

     mysqli_close($con);






?>