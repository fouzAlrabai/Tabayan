<?php
require_once('config.php');


    // $sql="SELECT u.user_name, d.data_id FROM user AS u, data AS d WHERE u.user_email='FOUZ@GMAIL.COM'";
    // $query="SELECT d.DName, a.CName, a.ADate, a.ATime, a.IdAppointment FROM appointment AS a, doctor AS d WHERE a.File_Num =".$id." AND a.DUserName = d.UserName ORDER BY ADate, ATime ASC";
    $sql="SELECT b.*, a.user_name FROM check AS b INNER JOIN user as A ON (b.user_name=a.user_name)";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        
        echo " ID: ".$row['data_id']." user: ".$row['user_name']."</br>";

    	}
    
   
?>