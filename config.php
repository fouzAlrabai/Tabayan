<?php
				$con=mysqli_connect("localhost","root","","Tabayan");
				if(!$con){
					die("You Can not Connect with Database ".mysqli_connect_error());
				}
				// else{
				// 	$sql= "select * from Data";
				// 	$retrieveData=mysqli_query($conn,$sql);
				// 	$count =0;
				// 	if(mysqli_num_rows($retrieveData)>0){
				// 		while($record=mysqli_fetch_array($retrieveData)){
				// 			echo "الخبر :". $record['Data']."<br/>"."نوع الخبر :".$record['DataKind']."<br/>";
				// 		}
				// 	}else {
				// 		echo "Database do not have any record";
				// 	}
				// }

?>