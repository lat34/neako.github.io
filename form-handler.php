<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
message = $_POST['message'];


$email_from = 'info@gmail.com';

$email_subject = 'New form submission';

email_body = "User name: $name.\n".
             "User Email: $visitor.\n".
             "Subject: $subject.\n".
             "User Message: $message .\n".

    
$to = 'ttheo637@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>