<?php
  //Clean inputs
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  //set mail attributes

  $to = "travisfavaron@gmail.com";
  $headers = "From: contact@thefavarons.com" . "\r\n";
  $subject = "New message from " . $name;
  $body = $message . "\n\nEmail Address: " . $email;

  //mail message
  mail($to,$subject,$body,$headers);
 ?>
 <?php require_once('header.php');
 ?>
 <body class="wrapper page-minor">
   <div class="hero image-bg-1">
     <?php require_once('nav.php') ?>
   </div>
   </div>
   <div class="content content-centered">
     <?php echo "<p>Thank you for your message! We will get back to you as soon as we can!" ?>
   </div>
 <?php require_once('footer.php') ?>
