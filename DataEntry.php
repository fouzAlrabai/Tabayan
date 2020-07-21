<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php';?>
	<meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	
<?php $page ='home'; include 'includes/navbar2.php';?>


<!-- Tabayan description -->
<div id="bgimage">
        <div class="container">
			<div class="row flex-row-reverse">
                <div class="col-lg-12 col-md-12 col-sm-12 text-right first" id="top" >
					
						<p class="lead" style="padding:15px">تهدف مبادرة تبيّن لتكوين مجموعة بيانات عربية مفتوحة المصدر لمساعدة الباحثين في مجال التعرف على الشائعات<br>
										.في وسائل التواصل الاجتماعي وتصويب المحتوى غير الصحيح<br>
										وتقوم هذه المبادرة على مساهمة العديد من المتطوعين برصد بعض ما يتم تداوله من أخبار ومعلومات في وسائل التواصل الاجتماعي<br>
										.الاجتماعي وتصنيفه بعد اتباع الإرشادات والقواعد الضابطة ورفع ما تم رصده لمنصة تبيّن</p>
				</div>

			</div>
		</div>
</div>
				<!-- End Tabayan description -->

<!-- Enter Data-->
		<div class="container">
			<div class="row flex-row-reverse text-right">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
				        <h4 class="text-right pt-5 pb-3" style="color:#1e4072;">: ادخال البيانات</h3>
						<textarea class="form-control" aria-label="With textarea" style="padding:0px 30px 15px; "dir="rtl"></textarea>
						<h4 class="text-right pt-5 pb-3" style="color:#1e4072;">: نوع البيانات </h4>

						<div class="form-group">
    						<!-- <div class="col-sm-2 col-md-2 col-lg-2 ">
    							<div class="input-group"> -->
    								<div id="radioBtn" class="btn-group">
    									<a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="Y" style="width:130px; height:35px ; font-size:20px; border-color: #1e4072">لا اعلم</a>
										<a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="N"style="width:130px; height:35px ; font-size:20px; border-color: #1e4072">حقيقة</a>
										<a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="O"style="width:130px; height:35px ; font-size:20px; border-color: #1e4072">إشاعة</a>
    								</div>
    								<input type="hidden" name="happy" id="happy">
    							<!-- </div>
    						</div> -->
						</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >		
						<h4 class="text-right pt-5 pb-3" style="color:#1e4072;">: مجال البيانات </h4>
										
						<div class="form-group">
							<div class="box">
								<select>
								<option>اختر مجال معين</option>
										<option>الصحة</option>
										<option>الرياضة</option>
										<option>التعليم</option>
										<option>السياسه</option>
										<option>الاقتصاد</option>
										<option>غير ذلك</option>
								</select>
						 	</div>
						</div>
						<!-- datePicker -->
						<h4 class="text-right pt-5 pb-3" style="color:#1e4072;">: تاريخ نشر البيانات </h4>

						<div class="form-group float-right ">
							<div class="row jus " >
								<div class="col-md-12 " >
									<input id="datepicker" width="270" style="padding:20px 30px 30px; margin-right: 20px; "/>
								</div>
							</div>
						</div>
					<!-- js for datepicker-->
					<script>
					$('#datepicker').datepicker({
					uiLibrary: 'bootstrap'});
					</script>
				</div>
			</div>	
				<!---End if DatePicker---->		 
		</div>
<!-- End Enter Data-->

<!-- Save Button-->
<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5">
			<br><br><button onclick="validation2();" type="button" class="btn btn-purple btn-block text-center btn btn-primary"style="font-size:20px;font-weight: bold;">حفظ البيانات</button>
		</div>
	</div>	
</div>
<!-- End Save Button-->
<div class="div1">
<hr class="incline-line"></hr>
<hr class="incline-line2"></hr>
</div>

<!-- volunteers-->
		<div class="container">
			<h2 class="text-center pt-5 pb-3" style="color:#1e4072;">: المتطوعين المتميزين</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-3">
					<div class="feature">
					<img src="img/profile2.png" class="img-circle myimg" alt="circle"/>
						<h3 class="name">سمية ناصر</h3>
					</div>
				</div>
				<div class="col-10 col-md-3">
					<div class="feature">
					<img src="img/profile.png" class="img-circle myimg" alt="circle"/>
						<h3 class="name">خالد عبدالعزيز</h3>
					</div>
				</div>
				<div class="col-10 col-md-3">
					<div class="feature">
					<img src="img/profile3.png" class="img-circle myimg" alt="circle"/>
						<h3 class="name">سعود ناصر</h3>
					</div>
				</div>
				<div class="col-10 col-md-3">
					<div class="feature">
					<img src="img/profile2.png" class="img-circle myimg" alt="circle"/>
						<h3 class="name">خلود سعد</h3>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->

<!-- End volunteers-->

<!--- Start Footer -->
<?php include 'includes/footer.php';?>
<!--- End of Footer -->

<!--- Script Source Files -->
<?php include 'includes/scripts.php';?>


<!--- End of Script Source Files -->

</body>
</html>

