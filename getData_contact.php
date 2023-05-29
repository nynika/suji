<?php
$compname = $_POST['company_name'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$organization = $_POST['organization'];
$query = $_POST['query'];
$to = "abhinayashankar24@gmail.com";

$formData = "Message from Web Form - Contact\n\n";

$formData .="Compnay Name: $compname\n";
$formData .="Name: $name\n";
$formData .="Address: $address\n";
$formData .="Email: $email\n";
$formData .="Mobile: $mobile\n\n";
$formData .="Query:\n$query\n";

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
$result = mail($to,"Message from website - Contact",$formData, implode("\r\n,$headers"));
if ($result)
{
	//print($formData);
	header('Location: contactus.html?mail=success');
	//print("Mail Sent Successfully!");
}
else
{
	//print "There was an error";
	header('Location: contactus.html?mail=fail');
}

?>