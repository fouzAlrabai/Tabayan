<?php
use PHPMailer\PHPMailer\PHPMailer;
	require_once "functions.php";
	session_start();
	if(isset($_POST['Suggestion']) && isset($_POST['Email']) ){
		

		require_once('sendEmail.php');

		$name="";
		$email=$_POST['Email'];
		$Suggestion=$_POST['Suggestion'];
		if(isset($_POST['userName'])){
			$name=$_POST['userName'];
			
		}	
		$mail->addAddress("tabayanteam@gmail.com");
		$mail->setFrom("tabayanteam@gmail.com","Tabayan");
		$mail->Subject = "Suggestion";
		$mail->isHTML(true);
		$mail->Body ="<html lang='HE'>
			<head>
			<title>
				مبادرة تبيّن
			</title>
			</head>
			<body style='text-align:right; direction:rtl;'>
				<table>
					<tr>
						<td><h4>تم ارسال اقتراح من </h4></td>
					</tr>

					<tr>
					<td>$name<br>$email<br>
					</td>
					</tr>
					<br>
					<tr>
					<td>الاقتراح:<br> $Suggestion</td>
					</tr>
				</table>
			</body>
		</html>";
	   
			if ($mail->send()){
				header("location: contact-us.php?sendEmail=Yes");
			}else{
				header("location: contact-us.php?sendEmail=No");
			}		
		
	} else {
		redirectToIndexPage();
	}
?>
