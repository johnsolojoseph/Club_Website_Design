<?php


//Database info
$servername = "server";
$database = "databse";
$username = "user";
$password = "password";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connection_error) {
    die("Connection Failed: " . $conn->connection_error);
} 


//Get the user input
$id_number = $_POST['id_number'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$classlevel = $_POST['group1'];
$on_mailing_list = $_POST['mailing_list'];
$message = $_POST['message'];

//If $on_mailing_list is not yes then it is no becasue it
//Can only be one or the other
if ($on_mailing_list != "Yes") {
    $on_mailing_list = "No";
}




//Insert query for the database
$sql = "INSERT INTO testing (idNumber, firstname, lastname, email, classlevel, dateJoinedClub, onMailingList, message)
VALUES ('$id_number', '$first_name', '$last_name', '$email', '$classlevel', NOW(), '$on_mailing_list', '$message');";

//Insert into database
$conn->query($sql);

$formcontent = "From: $first_name $last_name \nMessage: $message \nEmail: $email \nCampus Classification: $group1 ";
$recipient = "csclubcsustan@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, "Application Form", $formcontent, $mailheader) or die("Error!");

//Varification email sent to new member
$from = "From: csclubcsustan@gmail.com \r\n";
$subject = "Computer Science Club";
$email_message = "Hello $first_name \nWelcome to the Computer Science Club at Stan State.\n 
            If you have any questions feel free to email us at csclubcsustan@gmail.com\n";
$member_email = $email;
mail($member_email, $subject, $email_message, $from) or die("Error!");

$conn->close();
header('Location: index.html');



?>
