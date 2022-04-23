<?php
    require_once('../config/Database.php');

    class ContactController{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        //Crud
        public function readData(){

            $query = $this->db->pdo->query('SELECT * from contact');
    
            return $query->fetchAll();
        }

        public function insert($request){
            
            $query = $this->db->pdo->prepare('INSERT INTO contact (emri_u, email_u, message_u)
            VALUES (:emri_u, :email_u, :message_u)');
    
            $query->bindParam(':emri_u', $request['emri']);
            $query->bindParam(':email_u', $request['email']);
            $query->bindParam(':message_u', $request['message']);
            $query->execute();
    
            return header('Location: ../index.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from contact WHERE id=:id');
            $query->bindParam(':id', $id);
            $query->execute();
    
            return header("Location: contactDashboard.php");
        }
    }
?>