<?php
   


    require_once 'user.php';

        $user = new user();
        if(isset($_POST['submit'])){
            $user->insert($_POST);
        }
    

?>

<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #93c1f5;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}


</style>


  <div class="container">
    <h1>Regjistrim</h1>
    <hr>
    <form action="" method="POST" name="form" >

    <label for="emri"><b>Emri</b></label>
    <input type="text" placeholder="Shkruani emrin" name="emri" id="emri">

    <label for="mbiemri"><b>Mbiemri</b></label>
    <input type="text" placeholder="Shkruani mbiemrin" name="mbiemri" id="mbiemri" >

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Shkruai Email-in" name="email" id="email" >

    <label for="email"><b>Konfirmo Emailin</b></label>
    <input type="text" placeholder="Konfirmoni emailin" name="emailk" id="emailk" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Shkruajeni Password-in" name="password" id="password" >

    <label for="psw-repeat"><b>Konfirmo Password</b></label>
    <input type="password" placeholder="Shkruajeni Password-in edhe nje here" name="passwordk" id="psw-repeat" >
    <hr>

    <button type="submit" name="submit" class="registerbtn">Register</button>
    </form>
  </div>

  



