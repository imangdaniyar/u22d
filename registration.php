<?php 
	include 'header.php';
?>
		<div class="grid-container">
  			<div class="content">
  				<div class="contitle"><span class="contitle-name">Регистрация</span></div>
          <div class="reg-form">
            <form action="registration.php" method="POST" class="form">
              <div class="input-field">
                <input type="text" name="name" class="reg-inp" required>
                <label class="form-label">Введите ваше имя</label>
              </div>
              <div class="input-field">
                <input type="text" name="sname" class="reg-inp" required>
                <label class="form-label">Введите ваше фамилию</label>
              </div>
              <div class="input-field">
                <input type="text" name="username" class="reg-inp" required>
                <label class="form-label">Придумайте имя пользователя</label>
              </div>
              
            </form>
          </div>
        </div>
  					
  			<div class="additional">
  	  			<div class="icons">
            <a href=""><img src="img/icons/vintage/mail.png" alt="" class="icon"></a>
            <a href=""><img src="img/icons/vintage/rss.png" alt="" class="icon"></a>
            <a href=""><img src="img/icons/vintage/youtube.png" alt="" class="icon"></a>
            </div>
			</div>
		</div>
		</div>		
</body>

</html>