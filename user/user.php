<?php
    require_once('../config/Database.php');
    

    class User{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        //Crud
        public function readData(){

            $query = $this->db->pdo->query('SELECT * from user');
    
            return $query->fetchAll();
        }

        public function insert($request){
            $emailRegex = "/^\w+([._-]?\w+)*@[a-z]+[-]?[a-z]*\.[a-z]{2,3}/";
            $passwordRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/"; 
            $emriRegex = "/^[A-Z][a-z]*/";
            $mbiemriRegex = "/^[A-Z][a-z]*/";
            
            $conn = mysqli_connect("localhost","root","","womenshoes"); 

            $emri = mysqli_real_escape_string($conn, $_POST['emri']);
            $mbiemri = mysqli_real_escape_string($conn, $_POST['mbiemri']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $emailk = mysqli_real_escape_string($conn, $_POST['emailk']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $passwordk = mysqli_real_escape_string($conn, $_POST['passwordk']);

            $emailquery = " select * from user where email='$email' ";
            $queryE = mysqli_query($conn, $emailquery);
            $emailcount = mysqli_num_rows($queryE);
            

            $k1 = !preg_match($emriRegex, $emri);
            $k2 = !preg_match($mbiemriRegex, $mbiemri);
            $k3 = !preg_match($emailRegex, $email);
            $k4 = $emailcount>0;
            $k5 = !($email==$emailk);
            $k6 = !preg_match($passwordRegex, $password);
            $k7 = !($password==$passwordk); 

            $query = $this->db->pdo->prepare('INSERT INTO user (Emri, Mbiemri, Email, Konifrmoemailin, Pasword, KonfirmoPassword)
            VALUES (:Emri, :Mbiemri, :Email, :Konifrmoemailin, :Pasword, :KonfirmoPassword)');
    
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':Konifrmoemailin', $request['emailk']);
            $query->bindParam(':Pasword', $request['password']);
            $query->bindParam(':KonfirmoPassword', $request['passwordk']);
  

            if($k1 || $k2 || $k3 || $k4 || $k5 || $k6 || $k7){
                echo "";
            }
            else{
                $query->execute();
            }
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from user WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();
    
            return header("Location: userDashboard.php");
        }
    }
?>