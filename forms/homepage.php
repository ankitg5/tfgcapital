<?php

	 
if(isset($_POST['company']))$company = $_POST['company'];
  if(isset($_POST['name']))$name = $_POST['name'];
  if(isset($_POST['email']))$email = $_POST['email'];
  if(isset($_POST['phone']))$phone = $_POST['phone'];
  if(isset($_POST['products']))$phone = $_POST['products'];
  if(isset($_POST['loanamount']))$loanamount = $_POST['loanamount'];	

  
  
  $email_from = 'TFG Capital<care@taxproswealthbuilders.com>';
  $email_subject = 'New Lead Bing';
  
  $email_body = "New lead from Bing. Follow up. Below are the details. \n\n";
  $email_body .= "Business Name: $company \n\n";
  $email_body .= "Name: $name \n\n";	
  $email_body .= "E-mail: $email \n\n";
  $email_body .= "Phone: $phone \n\n";
  $email_body .= "Products: $products \n\n";	
  $email_body .= "Loan Amount: $loanamount \n\n";	
                            
  $to = "care@tfgcapital.net";
 
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email_from \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
	header('Location: http://www.tfgcapital.net/thankyou.php');
  
  



?>