<?php
    // Connect With Database 
    require_once('config.php');
    
    session_start();
    
    if(isset($_POST['Accept'])){
    
        $key=$_POST['Accept'];
        $_SESSION["user"]=$key;
        if(isset($_POST['Delete'])){
    
            $key=$_POST['Delete'];
            $_SESSION["user"]=$key;
            //$q1 ="SELECT * FROM appointment WHERE IdAppointment =".$_POST['ID']."";
            $q1 ="SELECT * FROM user WHERE user_email = '$key'";
            $check=mysqli_query($con,$q1) or die("not found".mysqli_error());
            if(mysqli_num_rows($check)>0){
                $q2 ="UPDATE user SET user_status='active' WHERE user_email='$key'";
                 $check2=mysqli_query($con,$q2) or die("not deleted".mysqli_error());?>
                
                <div class="alert alert-success">
                <p>Record deleted!!</p>
                </div>   
        
           <?php
           header("location: Admin.php");
            }else{ ?>
            
             <div class="alert alert-warning">
                <p>Record does not exist!!</p>
             </div>   
           <?php 
              
              } 
        }

    }
    

?>