<?php
require_once '../config/Database.php';

class ContactController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from contact');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO contact (Emri, Emaili, Mesazhi)
        VALUES (:Emri, :Emaili, :Mesazhi)');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Emaili', $request['email']);
        $query->bindParam(':Mesazhi', $request['mesazhi']);
        $query->execute();

        return header('Location: contactDashboard.php');
    }

    

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from contact WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: contactDashboard.php");
    }
}
?>