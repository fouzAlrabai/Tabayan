<!DOCTYPE html>
<html lang="en">
<head>
		<?php include 'includes/head.php';?>
</head>
<body>
	
<?php $page ='home'; include 'includes/navbar.php';?>

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/data-image3.png"></div>
			<!-- <div class="carousel-item"><img src="img/sky.png"></div>
			<div class="carousel-item"><img src="img/bridge.png"></div> -->
		</div>
	</div>
	<!-- <div class="ex2"><br>تهدف مبادرة تبيّن لتكوين مجموعة بيانات عربية مفتوحة المصدر لمساعدة الباحثين في مجال التعرف على الشائعات
				<br>في وسائل التواصل الاجتماعي وتصويب المحتوى غير الصحيح.
 وتقوم هذه المبادرة على مساهمة العديد من المتطوعين برصد بعض ما يتم تداوله من أخبار ومعلومات في وسائل التواصل الاجتماعي <br>وتصنيفه بعد اتباع الإرشادات والقواعد الضابطة ورفع ما تم رصده لمنصة تبيّن.</div> -->

 <!-- <div class="myDiv" >
  <h2>This is a heading in a div element</h2>
  <p>This is some text in a div element.</p>
</div> -->
	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Complete Bootstrap Course</h2>
				<p class="lead">Bootstrap is an open-source front-end library with HTML and CSS based designs. This website is built with HTML5, CSS3 and Bootstrap 4.</p><a class="btn btn-purple btn-lg" href="https://w3newbie.com/courses/" target="_blank">Complete Bootstrap Course</a>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">BUILT WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="#">Bootstrap Course</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<!--- Start Footer -->
	<?php include 'includes/footer.php';?>
	<!--- End of Footer -->

<!--- Script Source Files -->
<?php include 'includes/scripts.php';?>
<!--- End of Script Source Files -->

</body>
</html>


