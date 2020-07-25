<?php
				$con=mysqli_connect("192.168.64.2","root","","mydb");
				if(!$con){
					die("You Can not Connect with Database ".mysqli_connect_error());
				}

?>