<?php
    $mysqli = new mysqli("localhost","root","Reema1420","mydb");
    if ($mysqli -> connect_errno)
    {
      printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
      exit();
    }
    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['Email'];
    $password=$_POST['Password'];
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
                if($row['user_type']=="DataChecker"){

                    $_SESSION["UserName"] = $row['user_name'];
                    $_SESSION["UserPass"] = $row['user_password'];
                    header("location: DataChecker.php");

                }if($row['user_type']=="DataEntry"){

                    $_SESSION["UserName"] = $row['user_name'];
                    $_SESSION["UserPass"] = $row['user_password'];
                    header("location: DataEntry.php");  

                }
               
            }else{

                // echo '<script type="text/javascript">';
                // echo 'setTimeout(function () {swal("!عذراً،   ", "البريد الاكتروني او كلمة المرور غير صحيحة    ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="index.php"; });';
                // echo '}, 1000);</script>';
                header("location: index.php?Error= البريد الإلكتروني أو كلمة المرور غير صحيحة");         
            }
    }
    else{
        header("location: index.php?Error= البريد الإلكتروني أو كلمة المرور غير صحيحة");
    }
}else {
    echo "Error: You Cant't Brwose This Page Directory";
}

?>