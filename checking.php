<?php
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{

$data = $_POST;
if($_POST['logincheck']){
  $user = R::findOne('users' , 'login = ?', array($data['login']));
  if($user){
    exit('{ "ans": "1"}');
  } else exit('{ "ans": "0"}');
}



}

?>