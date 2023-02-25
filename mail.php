<?php
// Replace with your email address
$to = "basitali21bb@gmail.com";

// Get the form fields and remove whitespace
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

// Set the email subject
$subject = "New message from $name";

// Build the email content
$body = "Name: $name\n\n";
$body .= "Email: $email\n\n";
$body .= "Message: $message\n\n";

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $subject, $body, $headers)) {
  // Email sent successfully
  echo "Thank you for contacting us. We will get back to you as soon as possible.";
} else {
  // Email not sent
  echo "There was a problem sending your message. Please try again later.";
}
?>
