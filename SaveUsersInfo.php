
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
    $con=mysqli_connect("localhost","root","","Tabayan");
    $username=$_POST['Email'];
    $password=$_POST['Password'];
    $userType=$_POST['optradio'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);
    $userType=stripcslashes($userType);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);
    $userType = mysqli_real_escape_string($con,$userType);

    
    // $query="INSERT INTO User (`UserName`,`UserPass`,`UserType`) VALUES ('$username','$password','$username')";
    // $result=mysqli_query($con,$query);
    $sql = "INSERT INTO User (UserName, UserPass, UserType)
            VALUES ('$username', '$password','$userType')";

            if ($con->query($sql) === TRUE) {
                
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () {swal("شكراً لك", " تم حفظ البيانات بنجاح  ", "success", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
            echo '}, 1000);</script>';

           
            
             
            } else {
            // echo "Error: " . $sql . "<br>" . $con->error;
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () {swal("!عذراً، حدث خطأ ما", " لم يتم حفظ البيانات   ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
            echo '}, 1000);</script>';
            }

    // $row=mysqli_fetch_array($result);
    // if($row>0){
    //         if($row['UserName'] == $username && $row['UserPass'] == $password){
    //             if($row['UserType']=="auditor"){
    //                 // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
    //                 $_SESSION["UserName"] = $row['UserName'];
    //                 $_SESSION["UserPass"] = $row['UserPass'];
    //             header("location: DataChecker.php");
    //             }if($row['UserType']=="normal"){
    //                 // echo "Login succ ".$row['UserName']."Type is ".$row['UserType'];
    //                 $_SESSION["UserName"] = $row['UserName'];
    //                 $_SESSION["UserPass"] = $row['UserPass'];
    //             header("location: DataEntry.php");  
    //             }
               
    //         }else{
    //             header("location: index.php");
    //              $error = "Your Login Name or Password is invalid";
    //         }
    // }
    // else{
    //     header("location: signIn.php");
    //      $error = "Your Login Name or Password is invalid";
    // }
    // if($result)
    // echo "data saved";
    // else {
    //     echo "data not save ".mysqli_connect_error();
    // }

?>
<?php include 'includes/scripts.php';?>