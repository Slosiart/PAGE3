<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address where you want to receive the form data
    $to = "mike.slosiar@gmail.com";

    // Compose the email message
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Set up the email headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $email_body, $headers);

    // Redirect back to a thank you page or your website's contact confirmation page
    header('Location: thank_you.html');
    exit;
}
?>
