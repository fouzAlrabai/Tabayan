<?php
	require_once "functions.php";
	session_start();
	if(isset($_POST['resetPassword'])){
		require_once('config.php');

		$email = $con->real_escape_string($_SESSION['email']);
		$email=strtolower($email);
		$token = $con->real_escape_string($_SESSION['token']);
		$newPassword = $con->real_escape_string($_POST['resetPassword']);

		$sql = $con->query("SELECT * FROM user WHERE
			user_email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");

		if ($sql->num_rows > 0) {
			if ($_POST["resetPassword"] === $_POST["confirm_password"]) {
			$con->query("UPDATE user SET token='', user_password = '$newPassword'
				WHERE user_email='$email'
			");
			header("location: login.php?ResetPass=Yes");
 			}else{
				header("location: resetPassword.php?passwordsNotMatch=كلمتا المرور غير متطابقتين"); 
			 }
				
		} else
		header("location: login.php?ResetPass=No");
	} else {
		redirectToLoginPage();
	}
?>
