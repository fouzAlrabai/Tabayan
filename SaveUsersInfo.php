<?php
    //Coonect With Database
    require_once('config.php');
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

            $userEmail=$_POST['Email'];
            $userPassword=$_POST['Password'];
            $userType=$_POST['optradio'];
            $userName=$_POST['userName'];

            $userEmail=stripcslashes($userEmail);
            $userPassword=stripcslashes($userPassword);
            $userType=stripcslashes($userType);
            $userEmail = mysqli_real_escape_string($con,$userEmail);
            $userPassword = mysqli_real_escape_string($con,$userPassword);
            $userType = mysqli_real_escape_string($con,$userType);

            if ($_POST["Password"] === $_POST["confirm_password"]) {
                // success

                $sql = "INSERT INTO user (user_email, user_password, user_type, user_name)
                    VALUES ('$userEmail', '$userPassword','$userType','$userName')";

                     if ($con->query($sql) === TRUE) {
                        $sql2="update user set user_email = UPPER(user_email)";
                        $result2=mysqli_query($con,$sql2);
                    
                        header("location: EnterUsersInfo.php?Save=Yes"); 
                    } else {    
                    // echo "Error: " . $sql . "<br>" . $con->error;
                    // echo '<script type="text/javascript">';
                    // echo 'setTimeout(function () {swal("!عذراً، حدث خطأ ما", " لم يتم حفظ البيانات   ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
                    // echo '}, 1000);</script>';
                        header("location: EnterUsersInfo.php?Save=No");
                    }
             }
             else {
                // failed 
                header("location: EnterUsersInfo.php?Error=passwordFails");
             }
        
            
            

                   
        }else{
            echo "Error: You Cant't Browse This Page Directory";
        }


?>
