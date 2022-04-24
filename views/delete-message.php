<?php
require_once '../controllers/ContactController.php';

if(isset($_GET['id'])){
    $contactId = $_GET['id'];
}

$contact = new ContactController;
$contact->delete($contactId);

?>