<?php
require_once 'userRepository.php';

if(isset($_GET['id'])){
    $userId = $_GET['id'];
}

$user = new UserRepository;
$user->delete($userId);

?>