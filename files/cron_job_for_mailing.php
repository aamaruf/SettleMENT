<?php

   require_once('dbconnect.php');
		   
		    
	                             date_default_timezone_set('Asia/Dhaka');    
                                $currentdate = date('Y-m-d'); 
								
								
								
								
								
								
								
	
	
	$sql1 = "SELECT *  FROM   TO_DO_LIST WHERE TO_DO_LIST_WHEN=DATE_ADD(CURDATE(),INTERVAL 1 DAY) AND TO_DO_LIST_STATUS=1";
     	
	                                 $result = $con->query($sql1); 
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $SIGN_UP_ID =	$row["SIGN_UP_ID"]; 
                                      $TO_DO_LIST_DETAIL =	$row["TO_DO_LIST_DETAIL"];
                                      $TO_DO_LIST_DURATION =	$row["TO_DO_LIST_DURATION"];
									  $TO_DO_LIST_WHEN =	$row["TO_DO_LIST_WHEN"];
									  
									  	
								$sql10 = "SELECT SIGN_UP_NAME,SIGN_UP_MAIL  FROM   SIGN_UP WHERE SIGN_UP_ID='$SIGN_UP_ID'";
     	
	                                 $result0 = $con->query($sql10);
                                 
                                      if ($result0->num_rows > 0) { 
                                      while($row0 = $result0->fetch_assoc()) {

                                      $SIGN_UP_NAME =	$row0["SIGN_UP_NAME"];
                                      $SIGN_UP_MAIL =	$row0["SIGN_UP_MAIL"];
									  }
									  }
									  
									  
				
											    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT </a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>A new Reminder from your TO-DO List</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have a new reminder to do a new Task at Tomorrow ( '.$TO_DO_LIST_WHEN.' ).  </p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Task Duration    : <font color="red">'.$TO_DO_LIST_DURATION.'</font></p>
	
      <hr>
     The Task you added : </br>
	  <p>" <b>'.$TO_DO_LIST_DETAIL.' </b>"</p>
	  
	  <p>Thanks From -</p>
      <p>SettleMENT Team</p>
	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = "Reminder from TO-DO List";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);


										  
											  
											  
									  
									  
									  
									  }
									  }
	
	
								
								
								
								
								
								
								
	
	
	$sql1 = "SELECT *  FROM   TO_DO_LIST WHERE TO_DO_LIST_WHEN = '$currentdate' AND TO_DO_LIST_STATUS=1";
     	
	                                 $result = $con->query($sql1); 
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $SIGN_UP_ID =	$row["SIGN_UP_ID"]; 
                                      $TO_DO_LIST_DETAIL =	$row["TO_DO_LIST_DETAIL"];
                                      $TO_DO_LIST_DURATION =	$row["TO_DO_LIST_DURATION"];
									  $TO_DO_LIST_WHEN =	$row["TO_DO_LIST_WHEN"];
									  
									  	
								$sql10 = "SELECT SIGN_UP_NAME,SIGN_UP_MAIL  FROM   SIGN_UP WHERE SIGN_UP_ID='$SIGN_UP_ID'";
     	
	                                 $result0 = $con->query($sql10);
                                 
                                      if ($result0->num_rows > 0) { 
                                      while($row0 = $result0->fetch_assoc()) {

                                      $SIGN_UP_NAME =	$row0["SIGN_UP_NAME"];
                                      $SIGN_UP_MAIL =	$row0["SIGN_UP_MAIL"];
									  }
									  }
									  
									  
				
											    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT </a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>Today Reminder from your TO-DO List</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have a reminder to do a new Task Today</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Task Duration    : <font color="red">'.$TO_DO_LIST_DURATION.'</font></p>
	
      <hr>
     The Task you added : </br>
	  <p>" <b>'.$TO_DO_LIST_DETAIL.' </b>"</p>
	  
	  <p>Thanks From -</p>
      <p>SettleMENT Team</p>
	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = "Reminder from TO-DO List";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);


										  
											  
											  
									  
									  
									  
									  }
									  }
	
	
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
		
					
								
								
								
							
								$sql1 = "SELECT *  FROM   DEBT_SETTLEMENT WHERE DEBT_SETTLEMENT_PAYMENT_DATE='$currentdate' AND DEBT_SETTLEMENT_STATUS=1";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $SIGN_UP_ID =	$row["SIGN_UP_ID"]; 
                                      $DEBT_SETTLEMENT_WITH =	$row["DEBT_SETTLEMENT_WITH"];
                                      $DEBT_SETTLEMENT_AMOUNT =	$row["DEBT_SETTLEMENT_AMOUNT"];
									  $DEBT_SETTLEMENT_TYPE =	$row["DEBT_SETTLEMENT_TYPE"];
									  $DEBT_SETTLEMENT_CONTACT =	$row["DEBT_SETTLEMENT_CONTACT"];
									  $DEBT_SETTLEMENT_CUZ =	$row["DEBT_SETTLEMENT_CUZ"];
									  $DEBT_SETTLEMENT_PAYMENT_DATE =$row["DEBT_SETTLEMENT_PAYMENT_DATE"];
									  
									  
									  
									  	
								$sql10 = "SELECT SIGN_UP_NAME,SIGN_UP_MAIL  FROM   SIGN_UP WHERE SIGN_UP_ID='$SIGN_UP_ID'";
     	
	                                 $result0 = $con->query($sql10);
                                 
                                      if ($result0->num_rows > 0) { 
                                      while($row0 = $result0->fetch_assoc()) {

                                      $SIGN_UP_NAME =	$row0["SIGN_UP_NAME"];
                                      $SIGN_UP_MAIL =	$row0["SIGN_UP_MAIL"];
									  }
									  }
									  
									  
									  
									  
									  
									  
									  if($DEBT_SETTLEMENT_TYPE=="Creditor")
										  
										  {
											  
											  
											    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT </a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>New info about a Creditor</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have to pay amount = <font color="red">'.$DEBT_SETTLEMENT_AMOUNT.'</font> Today.  </p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Name    : '.$DEBT_SETTLEMENT_WITH.'</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Contact : '.$DEBT_SETTLEMENT_CONTACT.'</p>
      <hr>
     Reason Of Payment you added: </br>
	  <p>"<b> '.$DEBT_SETTLEMENT_CUZ.' </b>"</p>
	  
	  <p>Thanks From -</p>
      <p>SettleMENT Team</p>

	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = " Creditor's Payment Issue";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);


											  
										  }
										  
										  
										  
										  else
											  
											  {
												  
													    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT Ltd.</a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>New info about a Debtor</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have to collect amount = <font color="red">'.$DEBT_SETTLEMENT_AMOUNT.'</font> Today.  </p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Name    : '.$DEBT_SETTLEMENT_WITH.'</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Contact : '.$DEBT_SETTLEMENT_CONTACT.'</p>
      <hr>
     Reason Of collection you added: </br>
	  <p>" <b>'.$DEBT_SETTLEMENT_CUZ.' </b>"</p>
	  
	 <p>Thanks From -</p>
      <p>SettleMENT Team</p>

	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = " Debtor's Payment Issue";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);	  
												  
											  }
											  
											  
											  
									  
									  
									  
									  }
									  }
	

	
	
	
	
	
	
	
	
	
	
	
	
								
								
							
								$sql1 = "SELECT *  FROM   DEBT_SETTLEMENT WHERE DEBT_SETTLEMENT_PAYMENT_DATE=DATE_ADD(CURDATE(),INTERVAL 1 DAY) AND DEBT_SETTLEMENT_STATUS=1";
     	
	                                 $result = $con->query($sql1);
                                 
                                      if ($result->num_rows > 0) { 
                                      while($row = $result->fetch_assoc()) {

                                      $SIGN_UP_ID =	$row["SIGN_UP_ID"]; 
                                      $DEBT_SETTLEMENT_WITH =	$row["DEBT_SETTLEMENT_WITH"];
                                      $DEBT_SETTLEMENT_AMOUNT =	$row["DEBT_SETTLEMENT_AMOUNT"];
									  $DEBT_SETTLEMENT_TYPE =	$row["DEBT_SETTLEMENT_TYPE"];
									  $DEBT_SETTLEMENT_CONTACT =	$row["DEBT_SETTLEMENT_CONTACT"];
									  $DEBT_SETTLEMENT_CUZ =	$row["DEBT_SETTLEMENT_CUZ"];
									  $DEBT_SETTLEMENT_PAYMENT_DATE =$row["DEBT_SETTLEMENT_PAYMENT_DATE"];
									  
									  
									  
									  	
								$sql10 = "SELECT SIGN_UP_NAME,SIGN_UP_MAIL  FROM   SIGN_UP WHERE SIGN_UP_ID='$SIGN_UP_ID'";
     	
	                                 $result0 = $con->query($sql10);
                                 
                                      if ($result0->num_rows > 0) { 
                                      while($row0 = $result0->fetch_assoc()) {

                                      $SIGN_UP_NAME =	$row0["SIGN_UP_NAME"];
                                      $SIGN_UP_MAIL =	$row0["SIGN_UP_MAIL"];
									  }
									  }
									  
									  
									  
									  
									  
									  
									  if($DEBT_SETTLEMENT_TYPE=="Creditor")
										  
										  {
											  
											  
											    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT </a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>Reminder for a new info about a Creditor</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have to pay amount = <font color="red">'.$DEBT_SETTLEMENT_AMOUNT.'</font> at Tomorrow.  </p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Name    : '.$DEBT_SETTLEMENT_WITH.'</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Contact : '.$DEBT_SETTLEMENT_CONTACT.'</p>
      <hr>
     Reason Of Payment you added: </br>
	  <p>"<b> '.$DEBT_SETTLEMENT_CUZ.' </b>"</p>
	  
	  <p>Thanks From -</p>
      <p>SettleMENT Team</p>

	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = " Creditor's Payment Issue";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);


											  
										  }
										  
										  
										  
										  else
											  
											  {
												  
													    
  $message='
<html>
<body>

<div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">

    <h3>Settle<B>MENT</B> Community  <font size="1px" color="#0ABB9E">( Powered By <a href="http://hopeitbd.com"> Hope IT Ltd.</a> )</font></h3>
	 
<br/><br/>
  <div  style="box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);">
    <header style="color: #000 !important;background-color: #f1f1f1 !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
      <h4>Reminder for a new info about a Creditor</h4>
    </header>
    <div style="padding:0.01em 16px;box-sizing: inherit;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
	
	 <img src="http://debt.eduorb.com/info.png" alt="."   style="width: 50px;float: left !important;border-radius: 50%;margin-right: 16px !important;border-style: none;margin-bottom: -5px;">
      
      <p>'.$SIGN_UP_NAME.' !! You have to collect amount = <font color="red">'.$DEBT_SETTLEMENT_AMOUNT.'</font> at Tomorrow.  </p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Name    : '.$DEBT_SETTLEMENT_WITH.'</p>
	  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debtor Contact : '.$DEBT_SETTLEMENT_CONTACT.'</p>
      <hr>
     Reason Of collection you added: </br>
	  <p>" <b>'.$DEBT_SETTLEMENT_CUZ.' </b>"</p>
	  
	 <p>Thanks From -</p>
      <p>SettleMENT Team</p>

	  <br>
    </div>
	
	

    <header style="color: #000 !important;background-color: #f1f1f1  !important;display: block;box-sizing: inherit;padding:0.01em 16px;font-family: Verdana,sans-serif;font-size: 15px;line-height: 1.5;">
     <center><h5> <font color="black">Visit SettleMENT ( www.debt.eduorb.com ) </font> </h5></center> 
    </header>
	
	
	
  </div>
</div><br><br>
</body>
</html>
';



$to=$SIGN_UP_MAIL;
$subject = " Debtor's Payment Issue";
$message = $message ;
$header= "MIME-Version: 1.0\r\n"; 
 $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$header .= 'From: SettleMENT <noreply@eduorb.com>' . "\r\n";



$f=mail($to, $subject, $message, $header);	  
												  
											  }
											  
											  
											  
									  
									  
									  
									  }
									  }
	

	
	
	
	
	
	
	
	
	
	
	

	

   if($f)
   {
  //echo $message;
   
   print '<script type="text/javascript">';
   print 'alert("Successfull")';
   print '</script>'; 
 
   }  

   else
   {
    print '<script type="text/javascript">';
   print 'alert("No !!! ")';
   print '</script>';  

	
   }


 
     mysqli_close($con);
	 

	?>