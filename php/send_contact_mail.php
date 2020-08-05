<?php
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';
  require 'phpmailer/OAuth.php';
  require 'phpmailer/POP3.php';
  require 'phpmailer/Exception.php';

  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $objet = $_POST['objet'];
  $message = $_POST['message'];

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = 'smtp.gmail.com';
  $mail ->Port = 465;
  $mail ->Timeout = 5;
  $mail ->IsHTML(true);
  $mail ->Username = 'ssitcom69@gmail.com';
  $mail ->Password = '123456789wided';
  $mail ->SetFrom($email,$prenom);
  $mail ->Subject = $objet;
  $mail ->Sender = ($email);
  $mail ->Body = "<p>$message </p>
                  <br>
                  <p><b>De :<b/> $email </p>
                  <hr>
                  e-mail : ssitcom69@gmail.com";
  $mail ->AddAddress('ssitcom69@gmail.com');
  $mail ->CharSet = 'UTF-8';
  $mail->send();
?>
