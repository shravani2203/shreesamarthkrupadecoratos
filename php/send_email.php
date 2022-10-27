<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$to      = 'milindvavare555@gmail.com';
$subject = 'Samarath Krupa Equiry';
$message = $message;
$headers = 'From: '.$email.''. phpversion();

 mail($to, $subject, $message, $headers);

?>