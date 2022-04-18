<?php
require_once '../controllers/PromoController.php';

if(isset($_GET['id'])){
    $promoId = $_GET['id'];
}

$promo = new PromoController;
$promo->delete($promoId);

?>
