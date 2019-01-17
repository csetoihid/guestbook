<?php 
    require_once '../class/user.php';
    require_once 'config.php';
    $user = new user;
    $user->header();  
    $user->editMessage($_REQUEST['id']);
?>
