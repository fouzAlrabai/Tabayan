<?php
    // Connect With Database 
    require_once('config.php');
    require_once('sendEmail.php');
    
    session_start();
    
    if(isset($_POST['Delete'])){
    
        $key=$_POST['Delete'];
        $_SESSION["user"]=$key;
        if(isset($_POST['Delete'])){
    
            $key=$_POST['Delete'];
            $_SESSION["user"]=$key;

            $q1 ="SELECT * FROM user WHERE user_email = '$key'";
            $check=mysqli_query($con,$q1) or die("not found".mysqli_error());
            if(mysqli_num_rows($check)>0){
                $q2 ="DELETE FROM user WHERE user_email ='$key'";
                 $check2=mysqli_query($con,$q2) or die("not deleted".mysqli_error());?>
                
                <div class="alert alert-success">
                <p>Record deleted!!</p>
                </div>   
        
           <?php
        //    $message="نعتذر تم وفض الاشتراك في مبادرة تبين ";
        //    mail( $key, 'مبادرة تبين', $message);
            $mail->addAddress($key);
            $mail->Subject ="Tabayan initiative";
            $mail->Body="نعتذر تم رفض طلبك للانظمام لمبادرة تبيّن";
            if($mail->send()){
           header("location: Admin.php?Done=delete");
            }else{
                header("location: Admin.php?email=error");
            }
            }else{ ?>
              
           <?php 
              header("location: Admin.php?Done=error");
              } 
        }

    }

    else if(isset($_POST['Accept'])){
    
        $key=$_POST['Accept'];
        $_SESSION["user"]=$key;
        if(isset($_POST['Accept'])){
    
            $key=$_POST['Accept'];
            $_SESSION["user"]=$key;
            //$q1 ="SELECT * FROM appointment WHERE IdAppointment =".$_POST['ID']."";
            $q1 ="SELECT * FROM user WHERE user_email = '$key'";
            $check=mysqli_query($con,$q1) or die("not found".mysqli_error());
            if(mysqli_num_rows($check)>0){
                $q2 ="UPDATE user SET user_status='active' WHERE user_email='$key'";
                 $check2=mysqli_query($con,$q2) or die("not Accept".mysqli_error());?>
                
               
        
           <?php
        //    $message="تم تفعيل الاشتراك في مبادرة تبين ";
        //     mail( $key, 'مبادرة تبين', $message);
        //    header("location: Admin.php?Done=update");
        $mail->addAddress($key);
        $mail->Subject ="Tabayan initiative";
        $mail->Body="تم قبول طلبك للانظمام لمبادرة تبين، يمكن تسجيل الدخول للمنصة والمساهمة معنا في زيادة المحتوى العربي";
        if($mail->send()){
       header("location: Admin.php?Done=update");
        }else{
            header("location: Admin.php?email=error");
        }
        
            }else{ ?>
             
           <?php 
   header("location: Admin.php?Done=error");           
              } 
        }

    }
    

?>