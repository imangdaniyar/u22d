<?php 
	include 'header.php';
?>
		<div class="grid-container">
  			<div class="content" style="">
  				
            <div class="reg-form">
            <div class="contitle"><span class="contitle-name">Регистрация</span></div>
              <form action="registration.php" method="POST" class="form" onsubmit="return false" >               
                      <div class="input-field">
                        <input type="text" name="name" class="reg-inp" required id="form_name">
                        <label class="form-label">Введите ваше имя
                        </label>
                        <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="name_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>
                    </div>

                      <div class="input-field">
                        <input type="text" name="sname" class="reg-inp" required id="form_sname">
                        <label class="form-label">Введите вашу фамилию</label>
                         <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="sname_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>
                      </div>       
                      <div  class="input-field">
                        <input type="text" name="login" class="reg-inp" required id="form_login">
                        <label class="form-label" >Придумайте имя пользователя</label>
                        <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="login_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>
                      </div>
          
                      <div class="input-field">
                        <input type="password" name="password" required class="reg-inp" id="form_password"> 
                        <label for="password" class="form-label" >Придумайте сложный пароль</label>
                        <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="password_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>

                      </div>
                    
              
                      <div class="input-field">
                        <input type="password" name="repass" required class="reg-inp" id="form_repass"> 
                        <label for="psw" class="form-label" >Повторите пароль</label>
                        <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="repass_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>
                      </div>
                      <div class="input-field">
                        <select class="select-inp" style="font-size: 1vw; height: 3.4vw;" id="gender" required="true">
                          <option disabled selected value=""></option>
                          <option value="m">Мужской</option>
                          <option value="f">Женский</option>
                        </select>
                        <label class="form-label">Выберете пол</label>
                        <div  class="tooltip_wrong">
                            <i style="color:red; font-size:2vw;" class="fa fa-times" aria-hidden="true"></i>
                            <span class="error_form, tooltiptext" id="gender_error_message"></span>
                        </div>
                        <div  class="tooltip_right">
                            <i style="color:lightgreen;font-size:2vw;" class="fa fa-check" aria-hidden="true" ></i>
                        </div>
                      </div>
                      <div id="emsg">Заполните все поля верно</div>
                        

                      
                    
                      <div class="submit-form">
                        <button type="" class="buton"  id="buton">Зарегистрироваться</button>
                          </div>
                      </div>
                    
                
              </form>

          
          
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


