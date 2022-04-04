<?php
    session_start();
    session_abort();
    header('Location:welcome.php');
?>