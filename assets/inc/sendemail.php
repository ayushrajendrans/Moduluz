<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Your email address
    $to = "ayushrajendran@gmail.com"; // Replace with your actual email address

    // Email subject
    $email_subject = "New Form Submission: " . $subject;

    // Email body
    $email_body = "You have received a new message from the contact form on your website.\n\n" .
                  "Here are the details:\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Phone: $phone\n" .
                  "Subject: $subject\n" .
                  "Message: $message\n";

    // Headers
    $headers = "From: noreply@example.com\n"; // Replace with a valid address from your domain
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry! Something went wrong. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
