<?php
    //Coonect With Database
    require_once('config.php');
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

            $username=$_POST['Email'];
            $password=$_POST['Password'];
            $userType=$_POST['optradio'];

            $username=stripcslashes($username);
            $password=stripcslashes($password);
            $userType=stripcslashes($userType);
            $username = mysqli_real_escape_string($con,$username);
            $password = mysqli_real_escape_string($con,$password);
            $userType = mysqli_real_escape_string($con,$userType);
        
            
            $sql = "INSERT INTO user (user_name, user_password, user_type)
                    VALUES ('$username', '$password','$userType')";

                    if ($con->query($sql) === TRUE) {
                        $sql2="update user set user_name = UPPER(user_name)";
                        $result2=mysqli_query($con,$sql2);
                    
                        header("location: EnterUsersInfo.php?Save=Yes"); 
                    } else {    
                    // echo "Error: " . $sql . "<br>" . $con->error;
                    // echo '<script type="text/javascript">';
                    // echo 'setTimeout(function () {swal("!عذراً، حدث خطأ ما", " لم يتم حفظ البيانات   ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
                    // echo '}, 1000);</script>';
                        header("location: EnterUsersInfo.php?Save=No");
                    }
        }else{
            echo "Error: You Cant't Browse This Page Directory";
        }


?>
