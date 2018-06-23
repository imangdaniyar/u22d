<?php 
	include 'header.php';
?>
		<div class="grid-container">
      <script src="js/jquery.js"></script>
  			<div class="content" style="background-color: rgb(4,197,130);
        box-shadow: 1vw 1vw 2vw rgb(4,195,130,0.3)!important;">
  				
            <div class="reg-form">
            <div class="contitle"><span class="contitle-name">Регистрация</span></div>
              <form action="registration.php" method="POST" class="form">               
                      <div class="input-field">
                        <input type="text" name="name" class="reg-inp" required id="form_name">
                        <label class="form-label">Введите ваше имя
                        </label>
                        <div class="tooltip" id="tooltip_wrong">
                        <i style="color:red" class="fa fa-times" aria-hidden="true"></i>
                        <span class="error_form, tooltiptext" id="name_error_message"></span>
                      </div>
                    </div>

                      <div class="tooltip" id="tooltip_right">
                        <i style="color:lightgreen" class="fa fa-check" aria-hidden="true" ></i>
                      </div>
    
                      <div class="input-field">
                        <input type="text" name="sname" class="reg-inp" required id="form_sname">
                        <label class="form-label">Введите вашу фамилию</label>
                      </div>
                    
                      <span class="error_form" id="sname_error_message"></span>

                      <div class="input-field">
                        <input type="text" name="login" class="reg-inp" required id="form_login">
                        <label class="form-label" >Придумайте имя пользователя</label>
                      </div>
                    
                      <span class="error_form" id="login_error_message"></span>
                    
                      <div class="input-field">
                        <input type="password" name="password" required class="reg-inp" id="form_password"> 
                        <label for="password" class="form-label" >Придумайте сложный пароль</label>
                      </div>
                    
                      <span class="error_form" id="password_error_message"></span>

                      <div class="input-field">
                        <input type="password" name="repass" required class="reg-inp" id="form_repass"> 
                        <label for="psw" class="form-label" >Повторите пароль</label>
                      </div>

                      <span class="error_form" id="repass_error_message"></span>
                    
                      <div class="submit-form">
                        <button class="submit">Зарегистрироваться</button>
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