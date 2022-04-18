<?php
require_once '../config/Database.php';


class PromoController{
    public $db;
    public function __construct(){
        $this->db = new Database;
    }

    //CRUD
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from promotion');

        return $query->fetchAll();
    }

    public function insert($request){
        //$request['image'] = '../img/' .$request['image'];

        $query = $this->db->pdo->prepare('INSERT INTO promotion (promo_image, promo_title, promo_text)
        VALUES (:promo_image, :promo_title, :promo_text)');

        $query->bindParam(':promo_image', $request['image']);
        $query->bindParam(':promo_title', $request['title']);
        $query->bindParam(':promo_text', $request['text']);
        $query->execute();

        return header('Location: promoDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from promotion WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE promotion SET promo_image = :promo_image,
        promo_title = :promo_title, promo_text = :promo_text WHERE id = :id');
        $query->bindParam(':promo_image', $request['image']);
        $query->bindParam(':promo_title', $request['title']);
        $query->bindParam(':promo_text', $request['text']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: promoDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from promotion WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: promoDashboard.php");
    }
}
?>