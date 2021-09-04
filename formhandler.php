<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body =  "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "Message: $message.\n";


$to = 'mhrifat1999@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to,$headers,$email_subject,$email_body);

header("Location: contact.html");





?>