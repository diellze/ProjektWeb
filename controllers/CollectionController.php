<?php
require_once '../config/Database.php';

class CollectionController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD
    public function readData(){
        $query = $this->db->pdo->query('SELECT * from collections');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO collections (collection_image, collection_title, collection_text1, collection_text2)
        VALUES (:collection_image, :collection_title, :collection_text1, :collection_text2)');

        $query->bindParam(':collection_image', $request['image']);
        $query->bindParam(':collection_title', $request['title']);
        $query->bindParam(':collection_text1', $request['text1']);
        $query->bindParam(':collection_text2', $request['text2']);
        $query->execute();

        return header('Location: collectionDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from collections WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE collections SET collection_image = :collection_image,
        collection_title = :collection_title, collection_text1 = :collection_text1, collection_text2 = :collection_text2 WHERE id = :id');
        $query->bindParam(':collection_image', $request['image']);
        $query->bindParam(':collection_title', $request['title']);
        $query->bindParam(':collection_text1', $request['text1']);
        $query->bindParam(':collection_text2', $request['text2']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: collectionDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from collections WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: collectionDashboard.php");
    }
}
?>