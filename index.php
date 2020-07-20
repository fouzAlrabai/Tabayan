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

				
					<form action="check_logIn.php" method="POST">
						<div class="form-group ">
							<h3 class="text-center" style=" padding:0px 0px 15px; color:white">تسجيل الدخول</h3>
							<img src="img/Tabayan logo without bg copy.png"  width=180 height=140 class="rounded mx-auto d-block" style=" padding:0px 0px 15px;"/>
						</div>
						
						<div class="form-group ">
							<input type="email" class="form-control text-right" id="Email" name="Email" placeholder="البريد الإلكتروني" required >
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control text-right" id="Password" name="Password" placeholder="كلمة المرور" required>
						</div>

						<a href="index.php"><button type="submit" class="btn btn-purple btn-block text-center btn btn-primary" id="buttonStyle" value="Login" >تسحيل الدخول</button></a>
						<a href="resetPassword.php"><p class="text-right" style="color:#687089; padding:15px 15px 0px 0px"> هل نسيت كلمة المرور؟</p></a>
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSevNvksvYZTXLyn2xTwkw0pHwTB-Neyo2AIbr5c5cPnLleKgA/closedform"><h6 class="text-center" style="color:#687089; padding:5px 0px 0px 0px; font-weight: bold"> التسجيل في مبادرة تبيّن</h6></a>
						
			
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