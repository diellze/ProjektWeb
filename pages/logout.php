<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: ../user/loginForm.php')
?>