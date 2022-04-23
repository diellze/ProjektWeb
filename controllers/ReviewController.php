<?php
require_once '../config/Database.php';

class ReviewController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from review');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO review (client_image, client_name, client_review)
        VALUES (:client_image, :client_name, :client_review)');

        $query->bindParam(':client_image', $request['image']);
        $query->bindParam(':client_name', $request['name']);
        $query->bindParam(':client_review', $request['review']);
        //$result = mysqli_fetch_array($query);
        if($request['image'] == NULL || $request['name'] == NULL || $request['review'] == NULL){
            echo '<script>alert("Duhet te plotesoni te gjitha te dhenat e kerkuara")</script>';
        }
        else{
            $query->execute();
            return header('Location: ../pages/aboutUsPage.php');
        }
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from review WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE review SET client_image = :client_image,
        client_name = :client_name, client_review = :client_review WHERE id = :id');
        $query->bindParam(':client_image', $request['image']);
        $query->bindParam(':client_name', $request['name']);
        $query->bindParam(':client_review', $request['review']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: reviewDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from review WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: reviewDashboard.php");
    }
}
?>