<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
   require_once('config.php');
if(isset($_POST['submit'])){
   
            $Data=$_POST['DataEn'];
            $DataKind=$_POST['Dataki'];
            $DataSelect=$_POST['DataSel'];
            $DataDate=$_POST['DataDe'];
           
            $sql = "INSERT INTO data (Data , data_kind , data_subject, data_date)
                    VALUES ('$Data', '$DataKind','$DataSelect', '$DataDate')";
                    mysqli_query($con,$sql);
                    


if(mysqli_query($con,$sql)){
    header("location: DataEntry.php?Save=Yes");
   
} else{
echo'erorr' . mysqli_error($con);

} }
?> <?php include 'includes/scripts.php';?>