<?php
    session_start();
    if(isset($_SESSION['flag'])){
        header('Location: login.php');
    } 
    else{
        header('Location: welcome.php');
    }
?>