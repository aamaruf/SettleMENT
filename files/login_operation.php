<?php
session_start(); 

	$email=$_POST['email'];
	$password =$_POST['password'];
	
    require_once('dbconnect.php');

	$sql = "SELECT * FROM SIGN_UP WHERE SIGN_UP_MAIL = '$email' and SIGN_UP_PASSWORD = '$password'";

	  $result = mysqli_query($con,$sql);
      $count = mysqli_num_rows($result);
      if($count == 1) {
		$sql1 = "SELECT SIGN_UP_ID FROM SIGN_UP WHERE SIGN_UP_MAIL='$email'";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $SIGN_UP_ID =	$row["SIGN_UP_ID"];
									  }
									  }
									  
					$_SESSION['SIGN_UP_ID']= $SIGN_UP_ID;
		echo "<script>window.open('home.php','_self')</script>";
  }
   else {
          echo '<script language="javascript">';
         echo 'alert("User Email/Password did not matched")';
         echo '</script>';
		 echo "<script>window.open('index.php','_self')</script>";
      }
	  
?>