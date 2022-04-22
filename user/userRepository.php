<?php
require_once "../config/Database.php";

class UserRepository extends Database
{
    public $db;
    private $query;
    private $conn;

    public function __construct(){
        $this->db = new Database;
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from user where userid=:id";
        $statement = $this->db->pdo->query($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function getUserByUsername($username)
    {
        $this->query = "select * from user where Emri=:Emri";
        $statement = $this->db->pdo->query($this->query);
        $statement->bindParam(":Emri", $username);
        $statement->execute();
        $result = $statement->fetch();
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->db->pdo->query($this->query);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }


    //Crud
    public function readData(){

        $query = $this->db->pdo->query('SELECT * from user');

        return $query->fetchAll();
    }

    public function insert($request){
        
        $query = $this->db->pdo->prepare('INSERT INTO user (Emri, Mbiemri, Email, Konifrmoemailin,Pasword,KonfirmoPassword)
        VALUES (:Emri, :Mbiemri, :Email, :Konifrmoemailin, :Pasword, :KonfirmoPassword)');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':Konifrmoemailin', $request['emailk']);
        $query->bindParam(':Pasword', $request['password']);
        $query->bindParam(':KonfirmoPassword', $request['passwordk']);
        $query->execute();

        return header('Location: ../index.php');
    }

    
    

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from user WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: userDashboard.php");
    }
}
