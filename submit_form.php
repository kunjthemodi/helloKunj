<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  // Email configuration
  $to = "your-email@example.com"; // Replace with your email address
  $subject = "Contact Form Submission from $name";
  $body = "You have received a new message from $name.\n\n".
          "Email: $email\n\n".
          "Message:\n$message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Thank you for contacting us! We will get back to you soon.";
  } else {
    echo "There was an error sending your message. Please try again.";
  }
}
?>
