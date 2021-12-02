<?php


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@myjigyasa.com>' . "\r\n";       
$message = include 'mailbody.php';

mail('shreyastalole2001@gmail.com', 'Test',$message,$headers);
$error="Check your email";

echo $error;




?>



<!DOCTYPE html>
<html>
<head>
	<title>text</title>
</head>
<body>

	<form method="post">
		<input type="submit" name="submit" value="Send Email">
	</form>

</body>
</html>