<?php

  $DEBT_SETTLEMENT_ID=$_GET['DEBT_SETTLEMENT_ID'];
  
   require_once('dbconnect.php');
   
  $sql = "UPDATE `DEBT_SETTLEMENT` SET `DEBT_SETTLEMENT_STATUS`='0' WHERE DEBT_SETTLEMENT_ID='$DEBT_SETTLEMENT_ID'";
  
  
   $res1 =mysqli_query($con,$sql);
 
   if($res1 )
   { 
 print '<script type="text/javascript">';
 print 'alert("Successfully Removed !!")';
  print '</script>';
 
  echo "<script>window.open('home.php','_self')</script>";
  }
   else
   {
  print '<script type="text/javascript">';
 print 'alert("Error in Removed !!")';
  print '</script>';
 
  echo "<script>window.open('home.php','_self')</script>";

   }
  
  
?>