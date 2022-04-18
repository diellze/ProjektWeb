<?php
require_once '../controllers/ProductController.php';

if(isset($_GET['id'])){
    $productId = $_GET['id'];
}

$product = new ProductController;
$product->delete($productId);

?>
