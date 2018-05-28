<?php


$email_u = $_POST['email'];
$msg = $_POST['msg'];
$nome = $_POST['nome'];

$mensagem = "
Nome: $nome <br>
E-mail: $email_u <br><br>
Mensagem: $msg
";


// error_reporting(E_STRICT);
date_default_timezone_set('America/Toronto');
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port = 465;                   // set the SMTP port for the GMAIL server
$mail->Username = "sportboll3@gmail.com";  // GMAIL username
$mail->Password = "159951acb";            // GMAIL password
$mail->SetFrom('sportboll3@gmail.com', 'SportBoll - Reservas');
$mail->Subject = "SportBoll - Reservas";
$mail->MsgHTML($mensagem);
$address = "sportboll3@gmail.com";
$mail->AddAddress($address, "SportBoll - Reservas");


$mail->Send();

echo "<script>alert('Email enviado com Sucesso!');location.href=\"index.php\";</script>";


