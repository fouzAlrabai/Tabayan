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



	<?php require_once "functions.php";


	if (isset($_GET['email']) && isset($_GET['token'])) {
		require_once('config.php');
		session_start();
		$_SESSION['email']=$_GET['email'];
		$_SESSION['token']=$_GET['token'];
		}
	?>

		<div class="container">
				<div class="row justify-content-center text-center">
				
				<div class="col-lg-5 col-md-8 col-sm-12 col-xs-12  py-5 first" id="top2">

						
							<form action="resetPasswordInDB.php" method="POST">
								<div class="form-group ">
									<h3 class="text-center" style=" padding:0px 0px 15px; color:white">إعادة تعيين كلمة المرور</h3>
									<img src="img/Tabayan logo without bg copy.png"  width=180 height=140 class="rounded mx-auto d-block" style=" padding:0px 0px 15px;"/>
								</div>

								<?php 
	
									if(@$_GET['passwordsNotMatch']==true)
										{
									?>
									<div class=" text-danger py-3 "><?php echo $_GET['passwordsNotMatch']?></div>
									<?php 
									}?>
								<div class="form-group">
									<input type="password" class="form-control text-right" id="resetPassword" name="resetPassword" placeholder="كلمة المرور الجديدة" required>
								</div>

								<div class="form-group">
									<input type="password" class="form-control text-right" id="confirm_password" name="confirm_password" placeholder="تاكيد كلمة المرور" required>
								</div>
								

								<button type="submit" class="btn btn-purple btn-block text-center btn btn-primary" id="buttonStyle">تعيين كلمة المرور</button>
						
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
