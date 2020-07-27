
<?php
    // Connect With Database 
    require_once('config.php');

    session_start();
//     if($_SERVER['REQUEST_METHOD']=='POST'){

            $DataEntry=$_POST['dataen'];
            $DataKind=$_POST['happy'];
            if($DataKind==""){
                $DataKind="لا اعلم";    
            }
            $DataSup=$_POST['dataSubject'];
        //     $DataDate=$_POST['datepicker'];
            // $DataDate=$("#datepicker").datepicker("getDate");
            echo "البيانات : ".$DataEntry."</br> نوع البيانات:  ".$DataKind."</br> مجال البيانات:  ".$DataSup."</br> تاريخ النشر:  ".$DataDate;

        //     $DataEntry=stripcslashes($DataEntry);
        //     $DataKind=stripcslashes($DataKind);
        //     $DataSup=stripcslashes($DataSup);
        //     $DataDate=stripcslashes($DataDate);

        //     $DataEntry = mysqli_real_escape_string($con,$DataEntry);
        //     $DataKind = mysqli_real_escape_string($con,$DataKind);
        //     $DataSup = mysqli_real_escape_string($con,$DataSup);           
        //     $DataDate = mysqli_real_escape_string($con,$DataDate);

        
            
        //     $sql = "INSERT INTO data (Data, data_kind, data_subject ,data_date)
        //             VALUES ('$DataEntry', '$DataKind','$DataSup','$DataDate')";

                   
                    
                    
        //             header("location: DataEntry.php?Save=Yes");
                
                    
                    
        //             }
        //              else {
                        
                   

        //             header("location: DataEntry.php?Save=No");
    
        //             }
?>
