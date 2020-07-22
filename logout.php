<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>

<?php
session_start();
if(!isset($_SESSION['UserName']))
{
    // not logged in
    header('Location: index.php');
    exit();
}else{

session_unset();
session_destroy();
header("location: index.php?Logout=no"); 
exit();
}
?>