<?php
include_once 'adminuser.php';
include_once 'simpleuser.php';
require_once 'userRepository.php';
//main


$emriRegex = '^[a-zA-Z0-9]{3,}$';
$emailRegex = '^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}$';
$passwordRegex ='^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$'; 

    if(isset($_POST['submit'])){
        if(empty($_POST['emri']) || empty($_POST['mbiemri']) || empty($_POST['email']) || empty($_POST['emailk']) || empty($_POST['password']) || empty($_POST['passwordk'])){
            echo"";
        }
           if(!(preg_match($emriRegex, $_POST['emri'])) && !(preg_match($emriRegex, $_POST['mbiemri'])) && !(preg_match($emailRegex, $_POST['email'])) && !(preg_match($emailRegex, $_POST['emailk'])) && !(preg_match($passwordRegex, $_POST['password'])) && !(preg_match($passwordRegex, $_POST['passwordk']))){
               echo"";
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
         elseif(!(preg_match($emriRegex, $_POST['email'])) && !(preg_match($passwordRegex, $_POST['password']))){
               echo"";
            }
        
        else{
            $email = $_POST['email'];
            $password = $_POST['password'];

        }
    
    }

?>