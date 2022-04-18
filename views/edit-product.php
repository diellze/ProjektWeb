<?php
require_once '../controllers/ProductController.php';
if(isset($_GET['id'])){
    $productId = $_GET['id'];
}

$product = new ProductController;
$currentProduct = $product->edit($productId);

if(isset($_POST['submit'])){
    $product->update($_POST, $productId);
}

?>

<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currentProduct['product_image']; ?>">
    <br>
    Name:
    <input type="text" name="name" value="<?php echo $currentProduct['product_name']; ?>">
    <br>
    Price:
    <input type="text" name="price" value="<?php echo $currentProduct['product_price']; ?>">
    <br>
    Description:
    <input type="text" name="description" value="<?php echo $currentProduct['product_description']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>