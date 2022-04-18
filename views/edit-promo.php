<?php
require_once '../controllers/PromoController.php';
if(isset($_GET['id'])){
    $promoId = $_GET['id'];
}

$promo = new PromoController;
$currentPromo = $promo->edit($promoId);

if(isset($_POST['submit'])){
    $promo->update($_POST, $promoId);
}

?>

<form method="post">
    Image:
    <input type="file" name="image" value="<?php echo $currentPromo['promo_image']; ?>">
    <br>
    Title:
    <input type="text" name="title" value="<?php echo $currentPromo['promo_title']; ?>">
    <br>
    Text:
    <input type="text" name="text" value="<?php echo $currentPromo['promo_text']; ?>">
    <br>
    <input type="submit" name="submit" value="Update">
</form>