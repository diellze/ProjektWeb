<?php
    session_start();
    $errorMsg = "";
    if(isset($_SESSION['ID'])){
        header("Location: dashboard.php");
        exit();
    }
    
    include_once('../config/database.php');

    if(isset($_POST['loginbutton'])){
        $con = mysqli_connect("localhost","root","","womenshoes");
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $emailRegex = "/^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/";
        $passwordRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/"; 

        $k1 = preg_match($emailRegex, $email);
        $k2 = preg_match($passwordRegex, $password);
        

       if(!empty($email) || !empty($password)){
            $query = "Select * from user where Email = '$email' && Pasword = '$password'";
            $result = mysqli_query($con, $query);
            $emailcount = mysqli_num_rows($result);
            
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $_SESSION['Id'] = $row['id'];
                $_SESSION['Email'] = $row['email'];
                $_SESSION['Pasword'] = $row['password'];
                if($k1 && $k2){
                    $errorMsg = "Login successful";
                } 
                header("Location: ../pages/index.php");
                die();
            }else{
                $errorMsg = "Username or password incorrect";
            }
        }
    }
    


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For google icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <title>Login form</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .background {
            background: url('../img/background.jfif') rgba(0, 0, 0, 0.61);
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            filter: blur(3px);
            min-height: 800px;
        }

        li{
            display: inline;
            font-weight: bold;
            padding-left: 5mm;
            color: white;
        }

        li a{
            text-decoration: none;
            color: white;
        }
        
        h2 {
            font-size: 30px;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background: transparent;
            box-shadow: 0 0 15px rgb(255, 255, 255);
            border-radius: 15px;
            width: 500px;
            margin: 10vh auto;
        }
        
        form {
            padding: 10px;
            display: flex;
            flex-direction: column;
            width: 85%;
        }
        
        .form-item {
            display: flex;
            width: 90%;
            background: transparent;
            margin: 10px auto;
            align-items: center;
            border-radius: 15px;
            border-bottom: 1px solid rgb(82, 81, 81);
        }

        .form-item:hover {
            border: 1px solid rgb(82, 81, 81);;
        }

        input {
            font-size: 18px;
            width: 80%;
            height: 30px;
            outline: none;
            background: transparent;
            border: none;
            margin: auto;
            color: white;
        }
        
        span {
            margin: 5px;
            color: rgb(172, 172, 172);
            cursor: default;
            user-select: none;
            background: rgba(85, 81, 81, 0.637);
            padding: 5px;
            border-radius: 15px;
        }
        
        button[type="submit"] {
            width: 250px;
            font-size: 20px;
            margin: 10px auto;
            padding: 10px 16px;
            color: white;
            background: rgba(122, 123, 116, 0.72);
            border: none;
            text-align: center;
        }

        button[type="submit"]:hover {
            background: rgb(172, 134, 8);
        }

        p:first-of-type {
            font-size: 18px;
            margin: 0;
        }
        
        .options {
            display: flex;
            margin:  10px auto;
            flex-wrap: wrap;
            justify-content: center;
        }

        .error{
            color: red;
            font-size: 10px;
        }
        
        button {
            padding: 5px 16px;
            font-size: 18px;
            margin: 5px 15px;
            width: 180px;
            color: white;
            background: transparent;
            cursor: pointer;
            transition: all 0.7s ease;
        }
        .fb:hover{
            background: rgb(5, 5, 73);
            border: none;
            box-shadow: 0 0 5px  rgb(5, 5, 73);
        }

        .gl:hover{
            background: rgb(73, 5, 5);
            border: none;
            box-shadow: 0 0 5px  rgb(73, 5, 5);
        }
        
        p {
            font-size: 18px;
            margin: 5px;
        }

        a{
            color: white;
        }

        a:hover{
            color: grey;
        }

        @media screen and (max-width:550px) {
            .container {
                width: 80%;
            }  
        }
    </style>
</head>
<body>
    <ul>
        <li><a href="index.php">Faqja Kryesore</a></li>
        <li><a href="aboutUsPage.php">Rreth Nesh</a></li>
        <li><a href="contactUs.php">Na Kontaktoni</a></li>
    </ul>
    <div class="background"></div>
    <div class="container">
        <h2>Login Form</h2>
        <p class="error"><?php echo $errorMsg; ?></p>
        <form action="loginForm.php" method="POST">
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="text" id="email" name="email" placeholder="email">
            </div>

            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" id="password" name="password"placeholder="password">
            </div>

            <button type="submit" name="loginbutton" onclick="Validation()"> LOGIN </button>
            <p>Kyquni përmes</p>
            <div class="options">
                <button class="fb">Facebook</button>
                <button class="gl">Google</button>
            </div>
            <p>Nuk keni llogari? <a href="registerForm.php">Regjistrohu</a></p>
            
        </form>
    </div>
    <script src="../js/validation.js"></script>
</body>
</html>