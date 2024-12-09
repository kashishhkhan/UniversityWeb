<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from ='info@eduford.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
                "User Email: $visitor_email.\n"
                 "Subject: $visitor_email.\n"
                 "User Message: $visitor_email.\n";

$to = 'aibrilliantminds7@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html.html")
?>