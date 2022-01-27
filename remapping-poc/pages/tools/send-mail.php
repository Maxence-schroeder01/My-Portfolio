<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$name =$_POST['name'];
$visitoremail =$_POST['email'];
$message = $_POST['message'];

$from = "Moderma@clubdes10.cash";
$subject = "New message from your website";

$email_body = "User Name: $name. \n".
                "User Email: $visitoremail. \n".
                    "User Message: $message. \n";

$to = "maxence.schroeder@gmail.com";

$headers = "From: $from \r\n";


$headers .= "Reply-To: $visitoremail \r\n";

mail($to,$subject,$email_body, $headers);

header("Location: ../contact.php");
?>