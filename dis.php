<?php
require_once('config.php');


    $sql="SELECT * FROM dataCheckTemporarily ";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        
        echo " ID: ".$row['data_id']." user: ".$row['user_name'];

    	}
    
   
?>