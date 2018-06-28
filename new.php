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
  				<?php 
            echo('<div class="news">
                    <div class="news-head">
                      <div class="news-img">
                        <img src="img/header.jpg" alt=""> 
                      </div>
                      <div class="news-title">
                        '.$new->title.'    
                      </div>
                    </div>
                <div class="info">'.$new->text.'</div>
                    <div class="readmore-container">
                  <div class="comments"><span style="left: 50%;" class="center">0 Комментариев</span></div>
                  <div class="avtor"><span class="center">'.$tu_sname.' '.$tu_name.' '.$new->date.'</span></div>
                      

                    </div>

                  
                  </div>
                  <hr>
              ');
           ?>
          
  			</div>		
  			<?php 
         include 'additional.php';
        ?>
        
		</div>
    </div>    	
</body>

</html>