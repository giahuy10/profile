<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y/m/d");
?>
<?php

$txt = "Contact on ".$date."\n 
Name: ".$name."\n 
Email: ".$email."\n 
Subject: ".$subject."\n 
Message: ".$message."\n 
---------------------------------------------------------------------------------------------------------\n
---------------------------------------------------------------------------------------------------------\n
	
";
$txt .= file_get_contents('contact.txt');
$myfile = file_put_contents('contact.txt', $txt.PHP_EOL);
fclose($myfile);
?>
