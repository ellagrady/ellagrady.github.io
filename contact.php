<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data.
    $firstName = htmlspecialchars(stripslashes(trim($_POST['firstname'])));
    $lastName = htmlspecialchars(stripslashes(trim($_POST['lastname'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));

    // Specify your email and the subject line
    $to = 'elmgrady@example.com';
    $emailSubject = 'New Contact Form Submission';
    
    // Prepare the email body
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Here are the details:\n";
    $body .= "First Name: $firstName\n";
    $body .= "Last Name: $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Message: $subject\n";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $emailSubject, $body, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>