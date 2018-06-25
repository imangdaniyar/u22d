<?php session_start(); 
	unset($_SESSION['logged']);
	$_SESSION['id'] = '';

	header('Location: /main.php');

 ?>

