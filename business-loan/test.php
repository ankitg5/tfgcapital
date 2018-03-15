<?php

	 
  if(isset($_POST['FirstName']))$FirstName = $_POST['FirstName'];
  if(isset($_POST['LastName']))$LastName = $_POST['LastName'];
if(isset($_POST['company']))$company = $_POST['company'];
  if(isset($_POST['email']))$email = $_POST['email'];
  if(isset($_POST['phone']))$phone = $_POST['phone'];
  if(isset($_POST['loanamount']))$loanamount = $_POST['loanamount'];	
  if(isset($_POST['timebusiness']))$timebusiness = $_POST['timebusiness'];

  
  
  $email_from = 'TFG Capital<care@taxproswealthbuilders.com>';
  $email_subject = 'New Lead Bing';
  
  $email_body = "New lead from Bing. Follow up. Below are the details. \n\n";
  $email_body .= "First Name: $FirstName \n\n";
  $email_body .= "Last Name: $LastName \n\n";	
  $email_body .= "Company Name: $company \n\n";	
  $email_body .= "E-mail: $email \n\n";
  $email_body .= "Phone: $phone \n\n";
  $email_body .= "Loan Amount: $loanamount \n\n";	
  $email_body .= "Time in Business: $timebusiness \n\n";
                            
  $to = "care@tfgcapital.net, taxproswealthbuilders@gmail.com, ravikmr701@gmail.com";
 
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $email_from \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
	header('Location: http://www.tfgcapital.net/thankyou.php');
  
  



?>