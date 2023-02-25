<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "khanyasirraza1.com";
  $subject = "New message from your website";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if(mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "There was an error sending your message.";
  }
}
?>
