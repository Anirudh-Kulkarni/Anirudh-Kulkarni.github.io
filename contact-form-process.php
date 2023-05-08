<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'anirudh.kulkarni08@gmail.com'; // replace with your own email address
  $subject = 'New message from website contact form';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  $headers = "From: $name <$email>";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for your message!';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>
