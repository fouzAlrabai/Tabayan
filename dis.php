<?php
require_once('config.php');

$query="SELECT UPPER(user_name) FROM user WHERE user_name='Fouz@gmail.com'";

$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);

// $str = "Mary Had A Little Lamb and She LOVED It So";
// $str = strtoupper($str);
// echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
if (!$result) {
    printf("لا يوجد بيانات مدخلة ");
    exit();
        }else{
    while($row=mysqli_fetch_array($result)){	
        echo $row;}}
   
?>