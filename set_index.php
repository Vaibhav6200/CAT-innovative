<?php
    session_start();
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $_SESSION['index']=$_POST['index'];
    }
?>