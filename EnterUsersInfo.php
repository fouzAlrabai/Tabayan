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


                    



<div class="container">
		<div class="row justify-content-center text-center">
		
		<div class="col-lg-5 col-md-8 col-sm-12 col-xs-12  py-5 first" id="top2">

				
					<form action="SaveUsersInfo.php" method="POST">
						<div class="form-group ">
							<h3 class="text-center" style=" padding:0px 0px 15px; color:white">ادخل معلومات المشارك</h3>
							<img src="img/Tabayan logo without bg copy.png"  width=180 height=140 class="rounded mx-auto d-block" style=" padding:0px 0px 15px;"/>
						</div>
						
						<div class="form-group ">
							<input type="email" class="form-control text-right" id="Email" name="Email" placeholder="البريد الإلكتروني" required >
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control text-right" id="Password" name="Password" placeholder="كلمة المرور" required>
						</div>

						<div class="row flex-row-reverse ">
							<div class="col-xs-3 col-sm-3 col-md-12	col-lg-12	">
								<h5>: مجال المشارك</h5>
								<div class="form-check-inline ">
							
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio" value="DataEntry" required>مدخل بيانات 
									</label>

								</div>

								<div class="form-check-inline">
									<label class="form-check-label">
										<input type="radio" class="form-check-input" name="optradio" value="DataChecker">مدقق بيانات
									</label>
								</div>

							</div>
						</div>
		
						<div class="row justify-content-center text-center py-3">
							<div class=" col-lg-5 col-md-5 col-sm-5 col-xs-5 " >
								<button type="submit" class="btn btn-purple btn-block text-center btn btn-primary" id="buttonStyle" value="Login" onclick="validation2();">حفظ</button>
							</div>
						</div>
			
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