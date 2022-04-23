<?php
require_once '../controllers/ReviewController.php';

if(isset($_GET['id'])){
    $reviewId = $_GET['id'];
}

$review = new ReviewController;
$review->delete($reviewId);

?>
