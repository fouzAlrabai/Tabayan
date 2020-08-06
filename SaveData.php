
<?php
    // Connect With Database 
    require_once('config.php');
    require_once "functions.php";

    session_start();
    if($_SERVER['REQUEST_METHOD']=='POST'){

            $DataEntry=$_POST['dataen'];
            $DataKind=$_POST['happy'];
            if($DataKind==""){
                $DataKind="لا اعلم";    
            }
            $DataSup=$_POST['dataSubject'];
            $DataDate=$_POST['datepicker'];
           

            $DataEntry=stripcslashes($DataEntry);
            $DataKind=stripcslashes($DataKind);
            $DataSup=stripcslashes($DataSup);
            $DataDate=stripcslashes($DataDate);
            $userEmail=$_SESSION["UserEmail"];

            $DataEntry = mysqli_real_escape_string($con,$DataEntry);
            $DataKind = mysqli_real_escape_string($con,$DataKind);
            $DataSup = mysqli_real_escape_string($con,$DataSup);           
            $DataDate = mysqli_real_escape_string($con,$DataDate);
            $userEmail= mysqli_real_escape_string($con,$userEmail);
            $timestamp = time() + 60*60;
            $dataTimeStamp= date('Y-m-d H:i:s', $timestamp);

            if($DataDate==""){
                $sql="INSERT INTO `data` (`data_kind`,`data_subject`,`Data`,`user_email`, `data_timeStamp`) VALUES ('$DataKind', '$DataSup' , '$DataEntry', '$userEmail','$dataTimeStamp')";
                $result=mysqli_query($con,$sql);
            }else{

            $sql="INSERT INTO `data` (`data_kind`, `data_date`,`data_subject`,`Data`,`user_email`, `data_timeStamp`) VALUES ('$DataKind', '$DataDate' , '$DataSup' , '$DataEntry', '$userEmail','$dataTimeStamp')";
                $result=mysqli_query($con,$sql);
               
            }
                if($result==true){

                    header("location: DataEntry.php?Save=Successful");
                }else{

                    header("location: DataEntry.php?Save=Fail");
                }
            } else {
                redirectToIndexPage();
                 }
?>
