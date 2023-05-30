
<?php

//echo '<script language="javascript">';
//echo 'alert("message successfully sent")';
//echo '</script>'; 
   
	$name=$_POST['name'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$phone =$_POST['phone']; 

	require_once('dbconnect.php');
	

	     date_default_timezone_set('Asia/Dhaka');    
        $currentdate = date('Y-m-d'); 
								

	$sql = "INSERT INTO `SIGN_UP`(`SIGN_UP_NAME`, `SIGN_UP_DATE`, `SIGN_UP_PHONE`, `SIGN_UP_MAIL`, `SIGN_UP_PASSWORD`) 
	VALUES ('$name','$currentdate','$phone','$email','$password')";
                                  
	$confirm = mysqli_query($con,$sql);
	
	if($confirm)
	{
		echo '<script> alert("Sign Up Successful");</script>';
		echo "<script>window.open('index.php','_self')</script>";
	}
	
	else
	{
		echo '<script> alert("Error!! Try again");</script>';
		echo "<script>window.open('registration.php','_self')</script>";
	}
	
     mysqli_close($con);
	 

	?>