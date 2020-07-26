<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
   $con=mysqli_connect("192.168.64.2","root","Reema1420","mydb");

   $Data=$_POST['DataEn'];
   $DataKind=$_POST['Dataki'];
   $DataSelect=$_POST['DataSel'];
   $DataDate=$_POST['DataDe'];

            $DataEntry=stripcslashes($DataEntry);
            $DataKind=stripcslashes($DataKind);
            $DataSup=stripcslashes($DataSup);
            $DataDate=stripcslashes($DataDate);

            $DataEntry = mysqli_real_escape_string($con,$DataEntry);
            $DataKind = mysqli_real_escape_string($con,$DataKind);
            $DataSup = mysqli_real_escape_string($con,$DataSup);           
            $DataDate = mysqli_real_escape_string($con,$DataDate);

        

if(isset($_POST['submit'])){
  
  $sql = "INSERT INTO data (Data , data_kind , data_subject, data_date)
                    VALUES ('$Data', '$DataKind','$DataSelect', '$DataDate')";
}
if(mysqli_query($con,$sql)){
    header("location: DataEntry.php?Save=Yes");
   
} else{
echo'erorr' .mysqli_error($con);

} 
?> <?php include 'includes/scripts.php';?>