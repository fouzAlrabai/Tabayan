


<!DOCTYPE html>
<html lang="en">
<head>
		<?php include 'includes/head.php';?>
</head>
<body> 
<!--- Image Slider -->
<div id="bgimage">
<h1 class="text-center" style="padding:150px 0px 0px; color:white; font-weight: bold" id="TabayanSmall">مبادرة تبيّن</h1>
</div>
	<!--- End Image Slider -->


                    
<?php $page ='login';include 'includes/navbar.php';?>


<div class="container">
		<div class="row justify-content-center text-center">
		
		<div class="col-lg-5 col-md-8 col-sm-12 col-xs-12  py-5 first" id="top2">

				
					<form>
						<div class="form-group ">
							<h3 class="text-center" style=" padding:0px 0px 15px; color:white">إعادة تعيين كلمة المرور</h3>
							<img src="img/Tabayan logo without bg copy.png"  width=180 height=140 class="rounded mx-auto d-block" style=" padding:0px 0px 15px;"/>
						</div>
						
						<div class="form-group ">
							<input type="email" class="form-control text-right" id="exampleInputEmail1" placeholder="البريد الإلكتروني">
						</div>
						

						<button type="button" class="btn btn-purple btn-block text-center btn btn-primary" id="buttonStyle">تعيين كلمة المرور</button>

						<?php

	$company_name = "Tabayan";
	$email = "tabayan.noreply@gmail.com";
	if (isset($_POST['submit'])) {
		$company_name = $_POST["company_name"];
		$email = $_POST["email_address"];
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_";
		$password = substr(str_shuffle($chars), 0, 8);
		$to = $email;
		$subject = 'your registration is completed';
		$message = 'Welcome' . $company_name . ''
				. 'Your email and password is following :'
				. 'Email:' . $email . ''
				. 'Your new password : ' . $password . ''
				. 'Now you can login with this email and password';
		$headers = 'From: Your name <'.$email .'>' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

		mail($to, $subject, $message, $headers);
	}
	?>
 


					</form>
					
			</div>
		</div>
</div>



<!--- Start Footer -->
<?php include 'includes/footer.php';?>
<!--- End of Footer -->

<!--- Script Source Files -->
<?php include 'includes/scripts.php';?>
<!--- End of Script Source Files -->

</body>
</html>