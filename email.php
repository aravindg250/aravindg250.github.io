<?php
    $name = $_POST["name"];
    $visitor_email = $POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $email_from = "aravindg.usa@gmail.com";

    $email_subject = "Wesbite Submission: $subject";

    $email_body = "Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Message: \n $message.\n";

    $to = "aravindusa@yahoo.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");


?>