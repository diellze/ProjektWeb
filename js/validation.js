var emailRegex = /^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/;

//To check a password between 8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character
var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; 

function Validation(){
    var email = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    if(email=="" && password==""){
        alert("Nuk keni dhene email-in dhe password-in");
    }
    else if(email == "" || password == ""){
        alert("Duhet te shkruani edhe email-in edhe password-in");
    }
    else if(emailRegex.test(email) == false){
        alert("Email-i i dhene nuk eshte valid")
    }
    else if(passwordRegex.test(password) == false){
        alert("Password duhet te kete 8 deri ne 15 karaktere dhe duhet te permbaje te pakten nje shkronje te madhe, nje shkronje te vogel, nje numer, dhe nje karakter special.");
    }
    else{
        alert("Logged in succesfully!");
    }
}

var emriRegex = /^[A-Z][a-z]*/;
var mbiemriRegex = /^[A-Z][a-z]*/;

function Validation2(){
    var emri1 = document.querySelector('#emri').value;
    var mbiemri1 = document.querySelector('#mbiemri').value;
    var email1 = document.querySelector('#email').value;
    var emailKonfirmim1 = document.querySelector('#email_k').value;
    var pass1 = document.querySelector('#password').value;
    var passKonfirmim1 = document.querySelector('#password_k').value;

    var kushti1 = (emri1=="" && mbiemri1=="" && email1=="" && emailKonfirmim1=="" && pass1=="" && passKonfirmim1=="");
    
    var str = "";
    var kushti = false;

    if(kushti1){
        alert("Nuk keni dhene asnje informate.");
    } 
    else{
        if(emri1==""){
            str += "Nuk keni shenuar emrin!\n";
            kushti = true;
        }
        else if(emriRegex.test(emri1) == false){
            str += "Emri i dhene eshte invalid!\n";
            kushti = true;
        }
        if(mbiemri1==""){
            str += "Nuk keni shenuar mbiemrin!\n";
            kushti = true;
        }
        else if(mbiemriRegex.test(mbiemri1) == false){
            str += "Mbiemri i dhene eshte invalid!\n";
            kushti = true;
        }
        if(email1==""){
            str += "Nuk keni shenuar email-in!\n";
            kushti = true;
        }
        else if(emailRegex.test(email1) == false){
            str += "Email-i eshte dhene invalid!\n";
            kushti = true;
        }
        if(emailKonfirmim1==""){
            str += "Nuk keni konfirmuar email-in!\n";
            kushti = true;
        }
        else if(!email1==emailKonfirmim1 && !email1=="" && !emailKonfirmim1==""){
            str += "Nuk keni konfirmuar email-in ne menyre te sakte!\n"
            kushti = true;
        }
        if(pass1==""){
            str += "Nuk keni shenuar fjalekalimin!\n";
            kushti = true;
        }
        else if(passwordRegex.test(pass1) == false){
            str += "Password duhet te kete 8 deri ne 15 karaktere dhe duhet te permbaje te pakten nje shkronje te madhe, nje shkronje te vogel, nje numer, dhe nje karakter special.\n";
            kushti = true;
        }
        if(passKonfirmim1==""){
            str += "Nuk keni konfirmuar fjalekalimi!\n\n";
            kushti = true;
        }
        if(!(pass1==passKonfirmim1) && !pass1=="" && !passKonfirmim1==""){
            str += "Nuk keni konfirmuar fjalekalimin ne menyre te sakte!\n"
            kushti = true;
        }
        if(kushti) {
            alert(str);
        }
        else{
            alert("Regjistrimi u krye me sukses!");
        }
    }
}