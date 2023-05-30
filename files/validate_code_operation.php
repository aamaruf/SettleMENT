<?php
session_start();
?>

<?php

$validation_mail= $_SESSION['validation_mail'];
	

if (empty($validation_mail)) {
	 echo '<script language="javascript">';
         echo 'alert("something Wrong with you !!!!")';
         echo '</script>';
 echo "<script>window.open('index.php','_self')</script>";

}
?>
 
<?php


$Validate_code= $_SESSION['validation_number'];


$validation_code=$_POST['Code'];

if($Validate_code == $validation_code){
	

     
		echo "<script>window.open('registration.php','_self')</script>";
	
}

else
{
        echo '<script language="javascript">';
         echo 'alert("Code not matched !!!! ")';
         echo '</script>';
		 echo "<script>window.open('validate_code.php','_self')</script>";
}

?> 