<?php
require_once 'user.php';

if(isset($_GET['id'])){
    $userId = $_GET['id'];
}

$user = new user;
$user->delete($userId);

?>