<?php 

if(isset($_POST)) {
  $to = "email@email.com";
  $subject = "Subject";
  $message = 'Message..'; // $_POST['name'] . " - " . $_POST['email'];
  $headers = 'From: email@domain.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}