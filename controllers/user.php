<?php
    require_once('../config/Database.php');

    class User extends Database{
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
            
            $query = $this->db->pdo->prepare('INSERT INTO user (Emri, Mbiemri, Email, Konfirmoemailin,Pasword,KonfirmoPassword)
            VALUES (:Emri, :Mbiemri, :Email, :Konfirmoemailin, :Pasword, :KonfirmoPassword)');
    
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':Konfirmoemailin', $request['emailk']);
            $query->bindParam(':Pasword', $request['password']);
            $query->bindParam(':KonfirmoPassword', $request['passwordk']);

            $query->execute();
    
            return header('Location: userDashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * from user WHERE id = :id');
            $query->bindParam(':id', $id);
            $query->execute();
    
            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE user SET Emri = :Emri,
            Mbiemri = :Mbiemri, Email = :Email, Konfirmoemailin = :Konfirmoemailin,
             Pasword = :Pasword, KonfirmoPassword = :KonfirmoPassword WHERE id = :id');
            $query->bindParam(':Emri', $request['emri']);
            $query->bindParam(':Mbiemri', $request['mbiemri']);
            $query->bindParam(':Email', $request['email']);
            $query->bindParam(':Konfirmoemailin', $request['emailk']);
            $query->bindParam(':Pasword', $request['password']);
            $query->bindParam(':KonfirmoPassword', $request['passwordk']);
            $query->bindParam(':id', $id);
            $query->execute();
    
            return header('Location: userDashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from user WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();
    
            return header("Location: userDashboard.php");
        }
    }
?>