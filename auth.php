<?php
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{

$data = $_POST;
if($_POST['register']){
 $data['id'] = '';
$user = R::dispense('users');
$user->id = $data['id'];
$user->login = $data['login'];
$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
$user->vk = '';
$user->name = ucfirst($data['name']);
$user->sname = ucfirst($data['sname']);
$user->avatar = 'default_avatar.jpg';
$user->inst = '';
$user->gender = $data['gender'];
$user->status = '';
R::store($user);
$_SESSION['logged'] = $user;
exit('{ "ans": "http://u2d/main.php"}');
}

if ($_POST['signin']) {
	$usera = R::findOne('users' , 'login = ?', array($data['login']));

	if ($usera) {

			if( password_verify($data['password'], $usera->password)) {
						$_SESSION['logged'] = $usera;
						exit('{ "ans": "http://u2d/main.php"}');
							
		}
		 else {exit('{ "ans": "1" }');}
					
			
	} else { exit('{ "ans": "0" }'); }
					
}

if ($_POST['id']) {
	$text = $data['status'];
	$users = R::load('users', $data['id']);
	$users->status = $text;
	R::store($users);
	$_SESSION['logged']->status = $text;

	exit ('{ "ans": "1"}');
}



}

?>