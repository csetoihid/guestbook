<?php
	require_once '../class/user.php';
	require_once 'config.php';
	if(isset($_SESSION['user']['id'])){
	  	$user->messages();
	}else{
		header('Location: index.php');
	}
?>
