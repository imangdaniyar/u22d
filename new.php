<?php 
	include 'header.php';
  if($_GET['id']) {
    $new = R::findOne('news' , 'id = ?', array($_GET['id']));
    $temp_user = R::findOne( 'users', ' id = ? ', [ $new->uid ]);
            $tu_name = $temp_user->name;
            $tu_sname = $temp_user->sname;
  }
?>
		<div class="grid-container">
  			<div class="content">
  				<div class="new-container">
                    
                    <div class="title-layout">
                      <div class="new-title">
                        Lorem ipssdfailhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fdsaf asdf sadfhasi

                      <div class="additional-info">
                          Saginov Zhandos 10 101 01110 101
                      </div>   
                    </div>
                  </div>
                    <div id="block-for-slider">
                      <div id="viewport">
                        <ul id="slidewrapper">
                         <li class="slide">
                            <img src="img/modal-bg.jpg" alt="1" class="slide-img">
                         </li>
                         <li class="slide">
                            <img src="img/bg.jpg" alt="2" class="slide-img">
                         </li>
                         <li class="slide">
                            <img src="img/modal-bg.jpg" alt="3" class="slide-img">
                         </li>
                         <li class="slide">
                            <img src="img/gray-bg.jpg" alt="4" class="slide-img">
                         </li>
                        </ul>

            
                    </div>
                  </div>

              <div class="new-text">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem saepe architecto iusto consequuntur, amet beatae soluta expedita eum quas consequatur quos. Voluptas quia similique deserunt ipsam qui, odio alias, soluta!</div>
                <div>Voluptatibus architecto unde voluptas doloribus ratione repellendus. Aliquid sint, modi molestias, voluptatem, facilis, maiores perspiciatis iusto itaque ducimus expedita maxime. Nam exercitationem minus dolore deserunt, asperiores autem! Eaque, nisi, molestias?</div>
                <div>Hic inventore dolores quisquam, in facilis optio quidem consectetur cum odio consequuntur earum unde voluptate est quibusdam incidunt repellat quis aliquam totam. Possimus autem, totam veritatis distinctio doloremque adipisci architecto.</div>
              </div>
                

                  
                  </div>
                  <div class="comment-container">
                    <div class="make-comment">
                      <div class="button-box-comments">
                        <button class="com-buttons" type="file"><i dir="rtl" class="fa fa-paperclip"  aria-hidden="true"></i> Прикрепить</button>
                        <button class="com-buttons" type="button"><i class="fa fa-share" aria-hidden="true"></i> Отправить</button>
                      </div>
                      <label style="font-size: 1.3vw; " for="comarea">Оставьте комментарий:</label>
                      <div contenteditable="true" name="comarea" class="comment-box"></div>
                    </div>
                    <br>
                    <br>
                    
                    <div class="comment">
                      <div class="comments-ava">
                        <img src="avatars/default_avatar.jpg" alt="ava" class="com-ava">
                      </div>
                      <div class="com-box">
                        <div class="comment-text">
                          <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus asperiores provident ut in sequi, corporis magni facere totam ex earum, ea quod reiciendis laborum sunt. Fugit, distinctio quaerat quis ea.</div>
                         
                        </div>
                        <br class="clear">
                        <div class="com-info">
                        fsdfsdfsdfds
                        </div>
                      </div>
                    </div>
                     
                    <hr>
                    <div class="comment">
                      <div class="comments-ava">
                        <img src="avatars/default_avatar.jpg" alt="ava" class="com-ava">
                      </div>
                      <div class="com-box">
                        <div class="comment-text">
                          <div>Lorem ipsum dolor sit amet.</div>
                         
                        </div>
                        <br class="clear">
                        <div class="com-info">
                        fsdfsdfsdfds
                        </div>
                      </div>
                    </div>
                    
                    <hr>

                  </div>
                  
          
  			</div>		
  			<?php 
         include 'additional.php';
        ?>
        
		</div>
    </div>    	
</body>

</html>