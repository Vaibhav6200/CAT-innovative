<?php
    session_start();
    include 'connect.php';
    $code=$_GET['code'];
    $email=$_GET['email'];
    $sql="SELECT * FROM `users` WHERE `email`='$email';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        var_dump($row);
        if($row['code']==$code){
            $sql="UPDATE `users` SET `status` = '1' WHERE `email`='$email';"; 
            $result=mysqli_query($conn,$sql);
            var_dump($result);
            $_SESSION['username']=$row['username'];
            $_SESSION['signing_up']='yes';
            $_SESSION['admin']=true;
            $_SESSION['index']=0;
            header("Location:navbar2.php");
        }
    }

?>