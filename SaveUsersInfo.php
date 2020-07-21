
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
    $con=mysqli_connect("localhost","root","Reema1420","mydb");
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
                
            // echo '<script type="text/javascript">';
            // echo 'setTimeout(function () {swal("شكراً لك", " تم حفظ البيانات بنجاح  ", "success", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
            // echo '}, 1000);</script>';
            
            header("location: EnterUsersInfo.php?Save=Yes");
           
            
             
            } else {
                 
            // echo "Error: " . $sql . "<br>" . $con->error;
            // echo '<script type="text/javascript">';
            // echo 'setTimeout(function () {swal("!عذراً، حدث خطأ ما", " لم يتم حفظ البيانات   ", "error", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="EnterUsersInfo.php"; });';
            // echo '}, 1000);</script>';

            header("location: EnterUsersInfo.php?Save=No");
            }


?>
<?php include 'includes/scripts.php';?>