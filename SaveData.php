<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.2/sweetalert2.all.min.js"></script>
</head>
<?php
    $con=mysqli_connect("localhost","root","Reema1420","mydb");

    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

            $DataEntry=$_POST['dataen'];
            $DataKind=$_POST['happy'];
            $DataSup=$_POST['datasup'];
            $DataDate=$_POST['datepicker'];

            $DataEntry=stripcslashes($DataEntry);
            $DataKind=stripcslashes($DataKind);
            $DataSup=stripcslashes($DataSup);
            $DataDate=stripcslashes($DataDate);

            $DataEntry = mysqli_real_escape_string($con,$DataEntry);
            $DataKind = mysqli_real_escape_string($con,$DataKind);
            $DataSup = mysqli_real_escape_string($con,$DataSup);           
            $DataDate = mysqli_real_escape_string($con,$DataDate);

        
            
            $sql = "INSERT INTO data (Data, data_kind, data_subject ,data_date)
                    VALUES ('$DataEntry', '$DataKind','$DataSup','$DataDate')";

                   
                    
                    
                    header("location: DataEntry.php?Save=Yes");
                
                    
                    
                    } else {
                        
                   

                    header("location: DataEntry.php?Save=No");
    
                    }
?>
<?php include 'includes/scripts.php';?>