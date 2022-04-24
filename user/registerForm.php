<?php
      require_once '../user/user.php';

        $user = new User();
        if(isset($_POST['submit'])){
            $user->insert($_POST);
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

    <title>Regjistrimi</title>
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
            background: rgba(78, 78, 76, 0.72);
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- For google icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <title>Regjistrimi</title>
    <link rel="stylesheet" href="../css/loginAndRegister.css" />
</head>
<body>

        <ul>
        <li><a href="../pages/index.php">Faqja Kryesore</a></li>
        <li><a href="../pages/aboutUsPage.php">Rreth Nesh</a></li>
        <li><a href="../pages/contactUs.php"></a>Na Kontaktoni</li>
    </ul>
    <div class="background"></div>
    <div class="container">
        <h2>Regjistrim</h2>
        <form action="registerForm.php" method="POST" name="form" >
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="text" id="emri" name="emri" placeholder="Emri" required>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="text" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
            </div>

            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="text" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">
                    account_circle
                    </span>
                <input type="text" id="email_k" name="emailk" placeholder="Konfirmo Email-in" required>
            </div>

            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" id="password" name="password" placeholder="Fjalëkalimi" required>
            </div>
            <div class="form-item">
                <span class="material-icons-outlined">                   
                    lock
                    </span>
                <input type="password" id="password_k" name="passwordk" placeholder="Konfirmo Fjalëkalimin" required>
            </div>

            <button type="submit" name="submit" onclick="Validation2()"> REGJISTROHU</button>
        </form>
    </div>
    <script src="../js/validation.js"></script>
</body>
</html>