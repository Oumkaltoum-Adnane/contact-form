<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "kaltoum.adnane@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $name <$email>"; $body = "Name: $name\nEmail:
$email\nPhone: $phone\nWebsite:
$website\n\nMessage:\n$message\n\nRegards,\n$name"; $sender = "From: $email";
if(mail($receiver, $subject, $body, $sender)){ echo "Your message has been
sent"; }else{ echo "Sorry, failed to send your message!"; } }else{ echo "Enter a
valid email address!"; } }else{ echo "Email and message field is required!"; }
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form | CodingNepal</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <header>Send us a Message</header>
      <form action="#">
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="name" placeholder="Enter your name" />
            <i class="fas fa-user"></i>
          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Enter your email" />
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone" />
            <i class="fas fa-phone-alt"></i>
          </div>
          <div class="field">
            <input
              type="text"
              name="website"
              placeholder="Enter your website"
            />
            <i class="fas fa-globe"></i>
          </div>
        </div>
        <div class="message">
          <textarea placeholder="Write your message" name="message"></textarea>
          <i class="material-icons">message</i>
        </div>
        <div class="button-area">
          <button type="submit">Send Message</button>
          <span></span>
        </div>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
