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
$mail->Username = "fooooz399@gmail.com";
$mail->Password= 'foz831419foz';
$mail->Port = 465;
$mail->SMTPSecure ="ssl";

$mail->isHTML(true);
$mail->setFrom("fooooz399@gmail.com","Tabayan");
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