<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['service'];
$message = $_POST['message'];

$email_from = 'info@abcd.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Service: $service.\n".
                  "User Message: $message.\n";

                  $to = 'Bira4617@gmail.com';

                  $headers = "From: $email_from \r\n";

                  $headers .= "Reply-TO: $visitor_email \r\n";

                  mail($to,$email_subject,$email_body,$headers);

                  header("Location: contact us.html");



?>