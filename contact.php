<?php
  if (!isset($_POST['submit-input'])) {
    echo "Please submit the form";
  }

  $name = $_POST['name-input'];
  $email = $_POST['email-input'];
  $message = $_POST['message-input'];

  $to = "ishdr08@gmail.com";
  $subject = "New Form Submission";
  $body = "You have received a message from $name. \n" .
          "Email Address: $email \n" .
          "Message: \n $message";
  // $header = "From: $email \r\n";

  mail($to, $subject, $body);

  header("Location: index.html");
?>
