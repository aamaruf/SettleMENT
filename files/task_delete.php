<?php

  $TO_DO_LIST_ID=$_GET['TO_DO_LIST_ID'];
  
   require_once('dbconnect.php');
   
  $sql = "UPDATE `TO_DO_LIST` SET `TO_DO_LIST_STATUS`='2' WHERE TO_DO_LIST_ID='$TO_DO_LIST_ID'";
  
  
   $res1 =mysqli_query($con,$sql);
 
   if($res1 )
   { 
 print '<script type="text/javascript">';
 print 'alert("Successfully Deleted !!")';
  print '</script>';
 
  echo "<script>window.open('task_history.php','_self')</script>";
  }
   else
   {
  print '<script type="text/javascript">';
 print 'alert("Error in Removed !!")';
  print '</script>';
 
  echo "<script>window.open('task_history.php','_self')</script>";

   }
  
  
?>