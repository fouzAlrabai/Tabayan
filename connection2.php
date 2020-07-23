
<?php
				$con=mysqli_connect("localhost","root","","mydb");
				if(!$con){
					die("You Can not Connect with Database ".mysqli_connect_error());
                }
                
                if(isset($_POST['ID'])){
                    $Type=$_POST['Type'];
                    $ID=$_POST['ID'];
                    if($Type=="rumor"){
                        $sql="UPDATE Data SET rumorCount=rumorCount-1 WHERE DataId='$ID'";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            return 'data update';
                        }
                    }
                    if($Type=="non-rumor"){
                        $sql="UPDATE Data SET nonrumorCount=nonrumorCount-1 WHERE DataId='$ID'";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            return 'data update';
                        }
                    }
                }

?>