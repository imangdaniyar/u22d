<?php
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ZTD</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<script src="js/script.js"></script>

</head>
<body>
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    

    <div class="container">
    	<div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/ava.png" alt="Avatar" class="avatar">
    </div>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required  class="reg-inp">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required class="reg-inp"> 
      <button type="submit" class="submit">Login</button>
      <span style="float:right;">Нет аккаунта?, <a href="registration.php" style="color:blue">зарегистрируйтесь</a></span>
    </div>
    <div class="container"></div>
  
    	  
    
	<script src="js/script.js"></script>
  </form>
</div>

	<div class="wrapper">
		<header class="header">
			<div class="logo">
				<img src="img/gray-bg.jpg" style="width: 100%; height: 100%;" />
				<a href="main.php"><span class="logo-name">URALSK<br>TODAY</span></a>
			</div>
			<div class="heads"><span id="main-note">Уральский новостной портал</span></div>
			<div class="heads">
				<div class="navbar">
					<ul class="nav">
						<li class="nav-item">
							<a href="#" class="nav-link">Новости</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Объявления</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Статьи</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Контакты</a>
						</li>
						<li class="nav-item" onclick="document.getElementById('id01').style.display='block'">
								<a href="#" class="nav-link">Войти</a>
						</li>
					</ul>
				</div>
			</div>
		</header>

</html>			
	

