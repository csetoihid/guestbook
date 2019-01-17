<?php 
    require_once '../class/user.php';
    require_once 'config.php';
    $user = new user;
    $user->header();  
    $p_id = (isset($_REQUEST['p_id'])) ? $_REQUEST['p_id'] : 0;
    $user->addMessage($p_id);
?>
