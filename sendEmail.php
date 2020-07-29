<?php
use PHPMailer\PHPMailer\PHPMailer;

// require_once ("PHPMailer\PHPMailer.php");
require_once('PHPMailer/PHPMailer.php');
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail =new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth =true;
$mail->Username = "tabayanteam@gmail.com";
$mail->Password= '090807tbn';
$mail->Port = 465;
$mail->SMTPSecure ="ssl";

$mail->isHTML(true);
$mail->setFrom("tabayanteam@gmail.com","Tabayan");
$mail->Subject ="Tabayan initiative";
$mail->AddEmbeddedImage('img/logoInEmail.png', 'logoimg', 'img/logoInEmail.png'); // attach file img/Picture 2.png', and later link to it using identfier logoimg
// $mail->addAddress("fouzalrabaye@gmail.com");
// $mail->Subject ="test";
// $mail->Body="hello world";

// if($mail->send()){
//   $response= "Email send";
// }else{
//   $response= "something is wrong</br>".$mail->ErrorInfo;
// }

// exit(json_encode(array("response "=>$response)));
?>