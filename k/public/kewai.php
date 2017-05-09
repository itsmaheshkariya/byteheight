<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "kewaiinfotech@gmail.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['name'];
  $comment = $_REQUEST['phone'];
  $message = $_REQUEST['message'];
  
  //send email
  mail($admin_email, "$subject.$message", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {



  

  }
?>