<?php 
	include 'header.php';
?>
		<div class="grid-container">
  			<div class="content" style="background-color: rgb(4,197,130);
        box-shadow: 1vw 1vw 2vw rgb(4,195,130,0.3)!important;">
  				
            <div class="reg-form">
            <div class="contitle"><span class="contitle-name">Регистрация</span></div>
              <form action="registration.php" method="POST" class="form">
                <table>
                  <tr>
                    <td>
                      <div class="input-field">
                        <input type="text" name="name" class="reg-inp" required >
                        <label class="form-label">Введите ваше имя
                        </label>
                      </div>
                    </td>
                    
                    <td>
                      <span class="error_form" id="name_error_message"></span>
                    </td>
                  </tr>
                  
                  <tr>
                    <td>
                      <div class="input-field">
                        <input type="text" name="sname" class="reg-inp" required>
                        <label class="form-label">Введите вашу фамилию</label>
                      </div>
                    </td>
                    
                    <td>
                      <span class="error_form" id="sname_error_message"></span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-field">
                        <input type="text" name="login" class="reg-inp" required>
                        <label class="form-label" style="font-size: 1vw;">Придумайте имя пользователя</label>
                      </div>
                    </td>
                    
                    <td>
                      <span class="error_form" id="login_error_message"></span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <div class="input-field">
                        <input type="password" name="password" required class="reg-inp"> 
                        <label for="psw" class="form-label" style="font-size: 1vw;">Придумайте сложный пароль</label>
                      </div>
                    </td>
                    
                    <td>
                      <span class="error_form" id="psw_error_message"></span>
                    </td>

                    <td>
                      <div class="submit-form">
                        <button class="submit">Зарегистрироваться</button>
                      </div>
                    </td>
                  </tr>
                </table>
                
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