
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
    $mysqli = new mysqli("localhost","root","","Tabayan");
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

    
    $query="select * from User where UserName='$username' and UserPass= '$password' ";
    $result=mysqli_query($mysqli,$query);

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