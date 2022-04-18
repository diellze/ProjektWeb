<?php
require_once '../controllers/ProductController.php';

$product = new ProductController;
if(isset($_POST['submit'])){
    $product->insert($_POST);
}


?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Name:
        <input type="text" name="name">
        <br>
        Price:
        <input type="text" name="price">
        <br>
        Description:
        <textarea name="description" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>