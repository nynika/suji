<?php

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$organization = $_POST['organization'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "dowelllogistics@dowelltech.com";

$formData = "<h1>Message from Web Form</h1>";

$formData .="Name:$name<br>";
$formData .="Email:$email<br>";
$formData .="mobile:$mobile<br>";
$formData .="organization:$organization<br>";
$formData .="subject:$subject<br><br>";
$formData .="message:$message<br>";

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset = iso-8859-1';

$result = mail($to,"Message from website",$formData, implode("\r\n,$headers"));
if ($result)
{
	print($formData);
}
else
{
	print "There was an error";
}

?>