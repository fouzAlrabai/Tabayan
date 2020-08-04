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
           

            $mail->Body="<html lang='HE'>
            <head>
            <title>
                مبادرة تبيّن
            </title>
            </head>
            <body style='text-align:right; direction:rtl;'>
                <table>
                    <tr>
                        <td><h3>السلام عليكم ورحمة الله وبركاته:</h4></td>
                    </tr>
    
                    <tr>
                    <td>نعتذر عن قبول انظمامك لمبادرة تبيّن </td>
                    </tr>

                    <br>
                    <br>
                    <tr>
                        <td><h4>فريق تبيّن</h4></td> 
    
                    </tr>
    
                    <tr>
                    <img src=\"cid:logoimg\" style='direction:rtl;' />
                </tr>
                </table>
            </body>
        </html>";
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
            $q1 ="SELECT * FROM user WHERE user_email = '$key'";
            $check=mysqli_query($con,$q1) or die("not found".mysqli_error());
            if(mysqli_num_rows($check)>0){
                $q2 ="UPDATE user SET user_status='active' WHERE user_email='$key'";
                 $check2=mysqli_query($con,$q2) or die("not Accept".mysqli_error());?>
                
               
        
           <?php

        $mail->addAddress($key);
        
        $mail->Body="<html lang='HE'>
        <head>
        <title>
            مبادرة تبيّن
        </title>
        </head>
        <body style='text-align:right; direction:rtl;'>
            <table>
                <tr>
                    <td><h3>السلام عليكم ورحمة الله وبركاته:</h4></td>
                </tr>

                <tr>
                    <td>يسعد فريق تبيّن بإبلاغك بأنه تم قبول طلبك للإنظمام لمبادرة تبيّن </td>
                </tr>

                <tr>
                    <td>يمكنك الآن تسجيل الدخول <a href='http://192.168.64.2/Tabayan/index.php'>منصة تبيّن</a> </td>   
                          
                </tr>

                    <br>
                <tr>
                    <td>نشكر لك إسهامك معنا في إثراء المحتوى العربي</td>
                </tr>
                <br>
                <br>
                <tr>
                    <td><h4>فريق تبيّن</h4></td> 

                </tr>

                <tr>
                <img src=\"cid:logoimg\" style='direction:rtl;'/>
            </tr>
            </table>
        </body>
    </html>";

    // $mail->Body="<h1  style='direction:rtl;'>Test 1 of PHPMailer html</h1>
    // <p>This is a test picture: <img src=\"cid:logoimg\" width=90 height=60/></p>";

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