<?php
		require_once('config.php');

		if(isset($_GET['page'])){
			$pages=$_GET['page'];
			// echo $pages;
		}else{
			$pages=1;
			// echo $pages;
		}

		$num_per_page =01;
		$start_from= ($pages-1)*01;

		// $query="select * from data limit $start_from,$num_per_page";
		session_start();
		$username=$_SESSION["UserName"];
		// $query="SELECT *  FROM data WHERE data_ID NOT IN(SELECT data_id FROM data_checked WHERE user_name='$_SESSION["UserName"]') limit $start_from,$num_per_page";
		$query="SELECT *  FROM data WHERE data_ID NOT IN(SELECT data_id FROM data_checked WHERE user_name='$username')limit $start_from,$num_per_page";
		// $query="select data_ID from data minus data_ID from check";
		$result=mysqli_query($con,$query);
		$numOfRow=mysqli_num_rows($result);
	
	$_SESSION["DataID"]=1;
?>	
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

<?php if(!$result){?>

    <div class="container ">
        <div class="row justify-content-center text-center  py-5">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 first py-5 ">
                <div class="style py-2">
                
                    <?php

                    if (!$result) {
                        printf("لا يوجد بيانات مدخلة ");
                    }?>
                </div>
                
            </div>
        </div>	
    </div>
<?php }else ?>
  <?php  {if($numOfRow==0){ ?>
    <div class="container ">
        <div class="row justify-content-center text-center  py-5">
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 first py-5 ">
                <div class="style py-2">
                
                    <?php

                  
                    printf("شكراً لك لقد قمت بتدقيق جميع البيانات المدخلة ");    
                    ?>
                </div>
                
            </div>
        </div>	
    </div>
    <?php }else{ ?>
        <div class="container ">
	        <div class="row justify-content-center text-center  py-5">
		        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4 first py-5 ">
		            <h3	 class="text-center py-3" style="font-weight: bold">: تحقق من البيانات المدخلة</h3>	
			        <div class="style py-2">
			
                        <?php

                            while($row=mysqli_fetch_array($result)){	
                        ?>

                        <?php echo "<font color='#1e4072'; font size=4px >الخبر : "."<font color='black' ; font size=4px >". $row['Data']."<br/>"."<br/>"." <font color='#1e4072'; font size=4px >نوع الخبر : "."<font color='black' ; font size=4px >".$row['data_kind'];
                        $ID=$row['data_ID'];
                        $_SESSION["DataID"]=$row['data_ID'];
                        ?>

                    
                        <?php } ?>
                    
                        <?php echo "<a id='ID' data-title='$ID'></a>"; ?>
                    </div>
			
                    <div class="form-group">
                            <div id="radioBtn" class="btn-group py-3">
                                    <a class="btn btn-primary btn-sm active" data-toggle="happy" data-value="No" name="type" data-title="N" style="width:90px; height:35px ; font-size:20px; border-color: #1e4072">لا اعلم</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-value="rumor" name="type" data-title="rumor"style="width:90px; height:35px ; font-size:20px; border-color: #1e4072">إشاعة</a>
                                    <a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-value="non-rumor" name="type" data-title="non-rumor"style="width:90px; height:35px ; font-size:20px; border-color: #1e4072">حقيقة</a>
                            </div>
                            <input type="hidden" name="happy" id="happy">
                    </div>
		        </div>
	        </div>	
        </div>

<div class="container">
	<div class="row d-flex justify-content-around ">
		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
			<?php
					$pr_query = "select * from data";
					$pr_result = mysqli_query($con,$pr_query);
					$total_record=mysqli_num_rows($pr_result);
					$total_page=ceil($total_record/$num_per_page);
				if($pages>1){
				echo "<a id='before' href='DataChecker.php?page=".($pages-1)."&ID=".($ID-1)."' class='previous btn btn-purple btn-block text-center btn btn-primary' style='background-color:#9c2025; border-color:#9c2025' method='get'>&laquo;  السابق</a>";
				}

				for($i=1;$i<$total_page;$i++){
				// echo "<a href='index_check.php?page=".$i."' class='btn btn-primary'>$i</a>";	
				}					
			?>
		</div>

		<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" >
		<?php
		if($i>$pages){
			echo "<a id='next' href='DataChecker.php?page=".($pages+1)."&ID=".($ID+1)."' class= 'next btn btn-purple btn-block text-center btn btn-primary' style='background-color:#60bad0; border-color:#60bad0' method='get'>التالي  &raquo;</a>";	  
				
			}	
		?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 py-5">
		   <a href="#" class= "next btn btn-purple btn-block text-center btn btn-primary" onclick="validation();"  >انهاء التدقيق</a>
		 
		</div>
	</div>	
</div>
<?php } ?>
<?php } ?>

<!-- Save Button-->





<!--- Start Footer -->
<?php include 'includes/footer.php';?>
<!--- End of Footer -->

<!--- Script Source Files -->
<?php include 'includes/scripts.php';?>


<!--- End of Script Source Files -->

</body>
</html>


