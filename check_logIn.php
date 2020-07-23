<?php
    // Connect With Database 
    require_once('config.php');

    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST['Email'];
        $password=$_POST['Password'];
        //Convert username To Uppercase Because It Saved As Uppercase In Database
        $username=strtoupper($username);

        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username = mysqli_real_escape_string($mysqli,$username);
        $password = mysqli_real_escape_string($mysqli,$password);

    
        $query="select * from user where user_name='$username' and user_password= '$password' ";
        $result=mysqli_query($mysqli,$query);
        $row=mysqli_fetch_array($result);

        if($row>0){
                if($row['user_name'] == $username && $row['user_password'] == $password){
                    //If A User Is Data Checker 
                    if($row['user_type']=="DataChecker"){

                        $_SESSION["UserName"] = $row['user_name'];
                        $_SESSION["UserPass"] = $row['user_password'];
                        $_SESSION["UserType"] = $row['user_type'];
                        header("location: DataChecker.php");
                    //If A User Is Data Entry 
                    }if($row['user_type']=="DataEntry"){

                        $_SESSION["UserName"] = $row['user_name'];
                        $_SESSION["UserPass"] = $row['user_password'];
                        $_SESSION["UserType"] = $row['user_type'];
                        header("location: DataEntry.php");  

                    } //End If

                }else{

                    // echo '<script type="text/javascript">';
                    // echo 'setTimeout(function () {swal("!عذراً،   ", "البريد الاكتروني او كلمة المرور غير صحيحة    ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="index.php"; });';
                    // echo '}, 1000);</script>';
                    header("location: index.php?Error= البريد الإلكتروني أو كلمة المرور غير صحيحة");         
                }//End Else
        }
        else{
            header("location: index.php?Error= البريد الإلكتروني أو كلمة المرور غير صحيحة");
        }
    }else {
        echo "Error: You Cant't Brwose This Page Directory";
    }

?>