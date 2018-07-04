<?php 
	include 'header.php';
  if($_GET['id']) {
    $new = R::findOne('news' , 'id = ?', array($_GET['id']));
    $temp_user = R::findOne( 'users', ' id = ? ', [ $new->uid ]);
            $tu_name = $temp_user->name;
            $tu_sname = $temp_user->sname;
    $comments= R::find('comments', 'purpose = "n" AND pid=:pid ORDER BY date DESC', [':pid'=>$_GET['id']]);

        
  }
?>
		<div class="grid-container">
  			<div class="content">
          <script src="js/upload.js"></script>
  				<div class="new-container">
                    
                    <div class="title-layout">
                      <div class="new-title">
                        <?php echo($new->title); ?>

                      <div class="additional-info">
                          <?php echo($tu_sname.' '.$tu_name.' '.$new->date); ?>
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
                <?php echo($new->text); ?>
              </div>
              <hr>
                

                  
                  </div>
                  <div class="comment-container">
                    <?php if(isset($_SESSION['logged'])) :?>
                     
                    <div class="make-comment">
                      <div class="button-box-comments">
                        <form action="images.php" method="POST"  onsubmit="return false" style="display:none;" enctype="multipart/form-data" id="form">
                            <input type="file" id="f_dialog" name="f_dialog"  multiple="true" onchange="render(this.files)"/>
                            <input onclick="upload(<?php  echo $_SESSION['logged']->id ?>,$('#tempdiv').html())" type="submit" id="submit" name="submit" value="q" />
                        </form>
                        <button onclick="$('#f_dialog').trigger('click');" class="com-buttons" type="file"><i dir="rtl" class="fa fa-paperclip"  aria-hidden="true"></i> Прикрепить</button>
                        <button onclick="send_com(<?php  echo $_SESSION['logged']->id ?>, <?php  echo $_GET['id'] ?>); " class="com-buttons" type="button"><i class="fa fa-share" aria-hidden="true" "></i> Отправить</button>
                      </div>
                      <label style="font-size: 1.3vw; " for="comarea">Оставьте комментарий:</label>
                      <div contenteditable="true" name="comarea" id="com_text" class="comment-box"></div>
                      <div class="img-container">
                        
                        </div>
                      
                    </div>
                    <?php else : ?>
                      <div class="a2mk">Зарегистрируйтесь что бы оставлять комментарии!</div>
                    <?php endif ?>
                    <br>
                    <hr>
                    <br class="kek">
                    <?php foreach ($comments as $comment) {
                    $com_user = R::findOne('users', ' id = ? ', [ $comment->uid ]);
                    $com_images = R::find('comimages', 'cid = ?', [$comment->id]);
                    if($com_images){
                      foreach ($com_images as $image) {
                        $images = $images.'
                          <div class="com_image">
                            <img class="com_photo"  src="com_images/'.$image->image.'"/>
                          </div>
                        ';
                      }
                        $images = '<div class="com_images">'.$images.'</div>';
                      }else $images = '';
                    
                    if($com_user->id == $_SESSION['logged']->id){
                      $delete = '<div class="delete-com"  onclick="delete_com('.$comment->id.')">Удалить</div>';
                    }else $delete = '';

                    
                    echo('<div class="comment" id="'.$comment->id.'">
                      <div class="comments-ava">
                        <img src="avatars/'.$com_user->avatar.'" alt="ava" class="com-ava">

                      </div>
                      <div class="com-box" >
                        <div class="comment-text">
                          <div class="com_user_info"><a href="profile.php?id='.$com_user->id.'">'.$com_user->sname.' '.$com_user->name.':</a></div>
                          '.$delete.'
                          <div>'.$comment->text.'</div>'.$images.'
                         
                        </div>
                        <br class="clear">
                        <div class="com-info">
                        '.$comment->date.'
                        </div>
                      </div>

                    </div>'
                  );
                    $images = '';
                    
                    } ?>
                    
                    
                    
                     
                    
                   
                    
                    

                  </div>
                  
          
  			</div>		
  			<?php 
         include 'additional.php';
        ?>
        <div id="tempdiv"></div>
        
		</div>
    </div>    	
</body>

</html>