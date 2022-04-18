<?php
require_once '../controllers/PromoController.php';

$product = new PromoController;
if(isset($_POST['submit'])){
    $product->insert($_POST);
}


?>
<div>
    <form method="POST">
        Image:
        <input type="file" name="image">
        <br>
        Title:
        <input type="text" name="title">
        <br>
        Text:
        <input type="text" name="text">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>