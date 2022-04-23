<?php
      require_once '../controllers/ContactController.php';

        $contact = new ContactController;
        if(isset($_POST['submit'])){
            $contact->insert($_POST);
        }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../css/contactForm.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="image">
                <img src="../img/mail.jpg" alt="">
            </div>
            <div class="form-area">
                <h2>Na kontaktoni</h2>
                <form action="">
                    <input type="text" name="emri" id="emri" placeholder="Emri">
                    <input type="email" name="email" id="email" placeholder="Emaili">
                    <textarea cols="30" name="message" id="message" rows="3" placeholder="Mesazhi"></textarea>
                    <button  type="submit" name="submit" value="Save">Dergo</button>
                </form>
                <div class="social-icons">
                    <i class="facebook fab fa-facebook-f"></i>
                    <i class="instagram fab fa-instagram"></i>
                    <i class="linkedin fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
