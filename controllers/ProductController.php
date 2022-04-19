<?php
require_once '../config/Database.php';

class ProductController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD

    public function readData(){

        $query = $this->db->pdo->query('SELECT * from product');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image']='../img/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO product (product_image, product_name, product_price, product_description)
        VALUES (:product_image, :product_name, :product_price, :product_description)');

        $query->bindParam(':product_image', $request['image']);
        $query->bindParam(':product_name', $request['name']);
        $query->bindParam(':product_price', $request['price']);
        $query->bindParam(':product_description', $request['description']);
        $query->execute();

        return header('Location: productDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from product WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE product SET product_image = :product_image,
        product_name = :product_name, product_price = :product_price, product_description = :product_description WHERE id = :id');
        $query->bindParam(':product_image', $request['image']);
        $query->bindParam(':product_name', $request['name']);
        $query->bindParam(':product_price', $request['price']);
        $query->bindParam(':product_description', $request['description']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: productDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from product WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: productDashboard.php");
    }
}
?>