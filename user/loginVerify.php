<?php
    include_once 'userRepository.php';

    if(isset($_POST['submit'])){
        if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) || empty($_POST['emailk']) || empty($_POST['password']) || empty($_POST['passwordk'])){
            echo"Nje gabim ka ndodhur.";
        }        
        else{
            $emri = $_POST['emri'];
            $mbiemri = $_POST['mbiemri'];
            $email = $_POST['email'];
            $emailk = $_POST['emailk'];
            $password = $_POST['password'];
            $passwordk = $_POST['passwordk'];
            $id = $email.rand(100,999);

            $user = new UserRepository();
            $user->insert($_POST);
        }
    
    }

    if(isset($_POST['loginbutton'])){
        if(empty($_POST['email']) || empty($_POST['password'])){
            echo"";
        }
        
        else{
            $email = $_POST['email'];
            $password = $_POST['password'];

        }
    
    }

?>