<?php 
	include 'header.php';
	$newsNum = R::count('news');
	$pagesNum = (int)($newsNum/5);
	if($newsNum%5 != 0) $pagesNum++; 
	$lastNew = R::findOne('news','ORDER BY id DESC');
	$lastNewId = $lastNew->id;

	if(!$_GET['pageNum'] || $_GET['pageNum']==1){
		$pageNum = 1;
		$minId = $lastNewId-5;
		$maxId = $lastNewId+1;
	}else { $pageNum = $_GET['pageNum'];
			$minId = ($lastNewId-(5*$pageNum));
			$maxId= $minId+6;
		}
	
	
	$news  = R::findAll( 'news', ' id < :maxId AND id > :minId', array( 'maxId'=>$maxId, ':minId'=>$minId ) );
	
?>
		<div class="grid-container">
  			<div class="content">
  				<?php
  					foreach ($news as $new) {
  					$temp_user = R::findOne( 'users', ' id = ? ', [ $new->uid ]);
  					$tu_name = $temp_user->name;
  					$tu_sname = $temp_user->sname;
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
                  <div class="readmore">
                    <a href="new.php?id='.$new->id.'" class="readmore-link">
                      Продолжить
                    </a>
                  </div> 

                </div>

              
            	</div>
            	<hr>
            	');
  					}
  				 ?>
  				
            	<div class="pageControl"><?php for($i=1;$i<=$pagesNum;$i++){
            		echo('<a href="main.php?pageNum='.$i.'">'.$i.'</a>');
            	} ?></div>
            </div>
  				<?php 
	include 'additional.php';
?>	
  			
		</div>

		</div>		
</body>

</html>
