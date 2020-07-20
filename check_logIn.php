<?php
    $con=mysqli_connect("localhost","root","","Tabayan");
    $username=$_POST['Email'];
    $password=$_POST['Password'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);

    
    $query="select * from User where UserName='$username' and UserPass= '$password' ";
    $result=mysqli_query($con,$query);

    $row=mysqli_fetch_array($result);
    if($row>0){
            if($row['UserName'] == $username && $row['UserPass'] == $password){
                if($row['UserType']=="DataChecker"){
                    // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
                    $_SESSION["UserName"] = $row['UserName'];
                    $_SESSION["UserPass"] = $row['UserPass'];
                header("location: DataChecker.php");
                }if($row['UserType']=="DataEntry"){
                    // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
                    $_SESSION["UserName"] = $row['UserName'];
                    $_SESSION["UserPass"] = $row['UserPass'];
                header("location: DataEntry.php");  
                }
               
            }else{
                header("location: index.php");
                 $error = "Your Login Name or Password is invalid";
            }
    }
    else{
        header("location: index.php");
         $error = "Your Login Name or Password is invalid";
    }

?>