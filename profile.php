<?php 
	include 'header.php';
?>
<?php if(isset($_SESSION['logged'])) :?>
<?php $user = $_SESSION['logged'];
    $usera = R::findOne('users' , 'id = ?', array($user->id));
    $_SESSION['logged'] = $usera;
    $user = $_SESSION['logged'];?>
<?php endif; ?>


		<div class="grid-container">
 
  			<div class="content">

  				<div class="profile-container">
            <div class="profile-head">
              <div class="profile-avatar">
                <img src="avatars/default_avatar.jpg" alt="" class="profile-ava">
              </div>
              <div class="profile-info">
                <div class="short-info">
                  <div class="name">
                     <?php echo $user->name.' '.$user->sname ?>
                  </div>
                  <div class="add-info">
                      Gender: <?php 
                      if ($user->gender == "m") :?>
                        Male
                      <?php elseif ($user->gender == "f") :?>
                        Female
                      <?php endif; ?>
                  </div>   
                  <div class="dob">
                    <div class="day">26</div>
                    <div class="month"><b>September</b></div>
                    <div class="year">2000</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="profile-content">
              <div class="nav-head">
                <div class="profile-nav">
                  <ul class="profile-navigation">
                    <li onclick="aboutme()" id="profile-tab1" class="information active">О себе</li>
                    <li onclick="photos()" id="profile-tab2" class="information">Фотографии</li>
                  </ul>
                  <hr>  
                </div>
              </div>
              <div class="personal">
                <div class="personal-info about">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sit ab aspernatur deserunt laborum magnam, dolore optio ex iure, mollitia eius consequuntur fugiat esse quod minima est labore inventore quae, voluptates itaque ut. Amet nostrum fugiat aperiam culpa ea. Dignissimos minima, laboriosam tempora non eveniet velit incidunt consequatur tenetur nostrum eligendi doloremque quibusdam sunt sed excepturi molestiae nisi ex rem quidem, mollitia nobis sit ipsa atque? Molestias delectus sequi facilis, illum maxime eius quas cum fugiat eveniet in. Quas laboriosam veniam harum quod illum vitae, voluptate officia doloremque officiis dolorum aut eum architecto. Totam tempore pariatur eum voluptates in porro?                  
                </div>
                <div class="personal-info photos">
                  <div class="photos_container .clearfix">
                    <div class="photo-container">
                      <img src="img/modal-bg.jpg" alt="" class="photo">
                    </div>
                    <div class="photo-container">
                      <img src="img/modal-bg.jpg" alt="" class="photo">
                    </div>
                    <div class="photo-container">
                      <img src="img/modal-bg.jpg" alt="" class="photo">
                    </div>
                    <div class="photo-container">
                      <img src="img/modal-bg.jpg" alt="" class="photo">
                    </div>

                  </div>
                </div>
                
              </div>

            </div>
          </div>
        </div>
  			<?php 
  include 'additional.php';
?>
		</div>
		</div>		
</body>

</html>