<?php
session_start();

// IF Not Logged In 
if(!isset($_SESSION['UserName']))
{
    // not logged in
    header('Location: index.php');
    exit();
}else{

    $userType=$_SESSION["UserType"];
    if($userType=='DataChecker'){

        require_once('config.php');
        $sql="SELECT * FROM dataCheckTemporarily ";
        $result=mysqli_query($con,$sql);

        if( $result){

            while($row=mysqli_fetch_array($result)){
                $user_name=$row['user_name'];
                $ID=$row['data_id'];
                //Inset Checked Data Into data_checked Table
                $sql4="INSERT INTO `data_checked` (`user_name`, `data_id`) VALUES ('$user_name', '$ID')";
                $result4=mysqli_query($con,$sql4);
                }//End While
                
        }//End IF $result

    }//End IF DataChecke user

    //Reset dataCheckTemporarily Table
    $sql3="truncate dataCheckTemporarily";
    $result=mysqli_query($con,$sql3);
    session_unset();
    session_destroy();
    header("location: index.php?Logout=no"); 
    exit();
}//end else 
?>