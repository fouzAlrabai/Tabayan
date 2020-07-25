<?php
				$con=mysqli_connect("192.168.64.2","root","Reema1420","mydb");
				if(!$con){
					die("You Can not Connect with Database ".mysqli_connect_error());
                }
                session_start();
                
                if(isset($_POST['ID'])){
                    $Type=$_POST['Type'];
                    $ID=$_POST['ID'];
                    $user_name=$_SESSION["UserName"];
                    if($Type=="rumor"){
                        $sql="UPDATE data SET rumorCount=rumorCount+1 WHERE data_ID='$ID'";
                        $sql2="UPDATE user SET user_dataCount=user_dataCount+1 WHERE user_name='$user_name'";
                        // $sql3="INSERT INTO check (user_user_name, user_check_check_id) VALUES ('$user_name', '$ID')";
                        $sql4="INSERT INTO `check` (`user_user_name`, `data_ID`) VALUES ('$user_name', '$ID');";
                        $result=mysqli_query($con,$sql);
                        $result2=mysqli_query($con,$sql2);
                        // $result3=mysqli_query($con,$sql3);
                        $result4=mysqli_query($con,$sql4);
                        if($result){
                            return 'data update';
                        }
                    }
                    if($Type=="non-rumor"){
                        $sql="UPDATE data SET nonrumorCount=nonrumorCount+1 WHERE data_Id='$ID'";
                        $sql2="UPDATE user SET user_dataCount=user_dataCount+1 WHERE user_name='$user_name'";
                        $sql4="INSERT INTO `check` (`user_user_name`, `data_ID`) VALUES ('$user_name', '$ID');";
                        $result=mysqli_query($con,$sql);
                        $result2=mysqli_query($con,$sql2);
                        $result3=mysqli_query($con,$sql3);
                        $result4=mysqli_query($con,$sql4);
                        if($result){
                            return 'data update';
                        }   
                    }

                    
                    if($result3){
                        return 'data Insert';
                    }

                }

?>