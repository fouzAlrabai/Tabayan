<?php
    // Connect With Database 
    require_once('config.php');
    
    session_start();
    
    if(isset($_POST['ID'])){
        $Type=$_POST['Type'];
        $ID=$_POST['ID'];
        $user_name=$_SESSION["UserName"];
        if($Type=="rumor"){
            //Increment Rumor Counter
            $sql="UPDATE data SET rumorCount=rumorCount+1 WHERE data_ID='$ID'";
            $result=mysqli_query($con,$sql);   
            
            if($result){
                //Increment User Check Data Counter
                $sql2="UPDATE user SET user_dataCount=user_dataCount+1 WHERE user_name='$user_name'";
                $result2=mysqli_query($con,$sql2);

                //Insert Checked Data Into dataCheckTemporarily Table
                $sql4="INSERT INTO `dataCheckTemporarily` (`user_name`, `data_id`) VALUES ('$user_name', '$ID')";
                $result4=mysqli_query($con,$sql4);
                return 'data update';
            }
        }
        else if($Type=="non-rumor"){
            //Increment Non-Rumor Counter
            $sql="UPDATE data SET nonrumorCount=nonrumorCount+1 WHERE data_Id='$ID'";
            $result=mysqli_query($con,$sql);
           
            if($result){
                //Increment User Check Data Counter
                $sql2="UPDATE user SET user_dataCount=user_dataCount+1 WHERE user_name='$user_name'";
                $result2=mysqli_query($con,$sql2);

                //Insert Checked Data Into dataCheckTemporarily Table
                $sql4="INSERT INTO `dataCheckTemporarily` (`user_name`, `data_id`) VALUES ('$user_name', '$ID')";
                $result4=mysqli_query($con,$sql4);
                return 'data update';

            }   
        }
        
        
    }

?>