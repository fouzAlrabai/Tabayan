<html>
<head>
	<title>Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
	<?php include 'includes/scripts.php';?>
</head>
<body>
<?php 
	
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("WOW!","Message!","success");';
    echo '}, 1000);</script>';
  
?>
</body>
</html>