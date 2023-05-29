<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$organization = $_POST['organization'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "abhinayashankar24@gmail.com";

$formData = "Message from Web Form\n\n";

$formData .="Name: $name\n";
$formData .="Email: $email\n";
$formData .="Mobile: $mobile\n";
$formData .="Organization: $organization\n";
$formData .="Subject: $subject\n\n";
$formData .="Message:\n$message\n";

// To send HTML mail, the Content-type header must be set
//$headers[] = 'MIME-Version: 1.0';
//$headers[] = 'Content-type: text/html; charset = iso-8859-1';


// Additional headers
$headers[] = 'To: abhinayashankar24@gmail.com';
$headers[] = 'From: abhinayashankar24@gmail.com';
$headers[] = 'Cc: abhinayashankar@rocketmail.com';
$headers[] = 'Bcc: sripinky249@gmail.com ';
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

//mail($to,"Message from website",$formData, implode("\r\n,$headers"));
$result = mail($to,"Message from website - Quotation",$formData, implode("\r\n,$headers"));
if ($result)
{
	//print($formData);
	header('Location: getquote.html?mail=success');
	//print("Mail Sent Successfully!");
}
else
{
	//print "There was an error";
	header('Location: getquote.html?mail=fail');
}

?>