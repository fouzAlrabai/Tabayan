
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
    $mysqli = new mysqli("localhost","root","Reema1420","mydb");
    //Verbindung überprüfen
    if ($mysqli -> connect_errno)
    {
      printf("Verbindung fehlgeschlagen: %s\n", $mysqli->connect_error);
      exit();
    }
 session_start();
    $username=$_POST['Email'];
    $password=$_POST['Password'];

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
                    // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
                    $_SESSION["UserName"] = $row['user_name'];
                    $_SESSION["UserPass"] = $row['user_password'];
                header("location: DataChecker.php");
                }if($row['user_type']=="DataEntry"){
                    // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
                    $_SESSION["UserName"] = $row['user_name'];
                    $_SESSION["UserPass"] = $row['user_password'];
                header("location: DataEntry.php");  
                }
               
            }else{

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {swal("!عذراً،   ", "البريد الاكتروني او كلمة المرور غير صحيحة    ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="index.php"; });';
                echo '}, 1000);</script>';
                // header("location: index.php");
                //  $error = "Your Login Name or Password is invalid";
                 
            }
    }
    else{
        echo '<script type="text/javascript">';
                echo 'setTimeout(function () {swal("!عذراً،   ", " لم يتم حفظ البيانات   ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="index.php"; });';
                echo '}, 1000);</script>';
    }

?>