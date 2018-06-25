<?php
session_start();
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
	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
	<script src="js/script.js"></script>

</head>
<body>
	<script src="js/jquery.js"></script>
	<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" onsubmit="return false">
    

    <div class="container">
    	<div class="imgcontainer">
      		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     		 <img src="img/ava.png" alt="Avatar" class="avatar">
    	</div>
    	<div class="input-field">
    		<input type="text"  name="login" id="login" required  class="reg-inp" required>
      		<label class="form-label"><b>Имя пользователя</b></label>
      	</div>
      	<div class="input-field">
      		<input type="password"  name="password" required class="reg-inp" id="password" required>
     		<label class="form-label"><b>Пароль</b></label>
     	</div>
     	<div id="error-messagebox"></div>
     	 
      <button type="" class="buton" id="signin-button" style="margin-top:1vw;">Войти</button>
      <span style="float:right;">Нет аккаунта?, <a href="registration.php" style="color:blue">зарегистрируйтесь</a></span>
    </div>
  
    	  
    
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
						<?php if( isset($_SESSION['logged']) ): ?>
							<li class="nav-item" >
								<a href="logout.php" class="nav-link">Выйти</a>
						</li>
						<?php else : ?>
							<li class="nav-item" onclick="document.getElementById('id01').style.display='block'">
								<a href="#" class="nav-link">Войти</a>
						</li>
						<?php endif ?> 
					</ul>
				</div>
			</div>
		</header>

</html>			
	

