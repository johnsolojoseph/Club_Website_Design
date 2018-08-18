<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$group1 = $_POST['group1'];
$formcontent = "From: $first_name $last_name \nMessage: $message \nEmail: $email \nCampus Classification: $group1 ";
$recipient = "csclubcsustan@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, "Application Form", $formcontent, $mailheader) or die("Error!");

header('Location: index.html');
?>
