<?php
require_once '../controllers/CollectionController.php';

if(isset($_GET['id'])){
    $collectionId = $_GET['id'];
}

$collection = new CollectionController;
$collection->delete($collectionId);

?>
