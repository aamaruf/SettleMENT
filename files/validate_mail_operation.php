<?php
session_start();

$email=$_POST['mail'];

if(empty($email))
{
	echo '<script language="javascript">';
         echo 'alert("Something wrong with you !!!")';
         echo '</script>';
		echo "<script>window.open('validate_mail.php','_self')</script>";
}

$random_number = rand(1000,9999);

$_SESSION['validation_number']= $random_number;
$_SESSION['validation_mail']= $email; 

$message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
    
     <h3>SettleMENT Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT </a> )</font></h3>
	
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>Mail Verification</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <p>A code is sent from EduOrb to validate your mail. This code will take you next step for account registration.</p>
      <hr>
      <img src="http://debt.eduorb.com/valid.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
	  <p>Validation Code : '.$random_number.'</p><br>
    </div>
	
	
	
	
	
    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to =$email;
$subject = "SettleMENT Validation" ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$res=mail($to, $subject, $message, $header);

if($res)
{
       echo '<script language="javascript">';
         echo 'alert("Validation code is sent to email..\nPlease Check mail  INBOX")';
         echo '</script>';
		echo "<script>window.open('validate_code.php','_self')</script>";
           }
else
{
        echo '<script language="javascript">';
         echo 'alert("Email did not send..")';
         echo '</script>';
		 echo "<script>window.open('validate_mail.php','_self')</script>";
}

?> 