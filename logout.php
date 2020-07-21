<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>

<?php
session_start();
session_unset();
session_destroy();
// echo '<script type="text/javascript">';
// echo 'setTimeout(function () {swal(" ", " تم تسحيل الخروج بنجاح    ", "success", { buttons: { catch: { text: "تم",value: "catch",},},}).then((value) => { window.location.href="index.php"; });';
// echo '}, 500);</script>';
header("location: index.php?Logout=no"); 
exit();

?>