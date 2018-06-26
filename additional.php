<div class="additional">
	<?php 
	if(isset($_SESSION['logged'])) :?>
 	<?php 
 		$user = $_SESSION['logged'];
 		$usera = R::findOne('users' , 'id = ?', array($user['id']));
 		$_SESSION['logged'] = $usera;
 		$user = $_SESSION['logged'];
 		
 	?>
<<<<<<< HEAD
 	<div class="mini-profile">
 		<div class="mp-avatar">
 			<img src="avatars/<?php echo $user->avatar?>" alt="avatar" class="mp-ava">
 		</div>
 		<div class="mp-data">
 			<div class="mp-info">
 				<?php echo $user->name.' '.$user->sname ?>
 			</div>
 			<div class="mp-status">
 				<div contenteditable="true" id="status" ><?php 
 				if($_SESSION['logged']->status != ''){
 					echo $_SESSION['logged']->status;	
 				} else echo 'Изменить статус';
 				

 				?></div>
 			</div>
 		</div>
=======
 	<div class="section" style="perspective: 500px;">
 		<div class="mini-profile">
	 		<div class="mp-avatar">
	 			<img src="avatars/<?php echo $user->avatar?>" alt="avatar" class="mp-ava">
	 		</div>
	 		<div class="mp-data">
	 			<div class="mp-info">
	 				<?php echo $user->name.' '.$user->sname ?>
	 			</div>
	 			<div class="mp-status">
	 				<input type="textarea" name="status" placeholder="Нет статуса" rows="auto" id="status" dir="rtl" value="<?php echo $_SESSION['logged']->status ?>">
	 			</div>
	 		</div>
	 		<hr>
	 	</div>

>>>>>>> d80e4e309fe75d3e528850492a1f40e416aa04c3
 	</div>
 	

	<?php endif ?>
 	<div class="icons">
        <a href=""><img src="img/icons/vintage/mail.png" alt="" class="icon"></a>
        <a href=""><img src="img/icons/vintage/rss.png" alt="" class="icon"></a>
        <a href=""><img src="img/icons/vintage/youtube.png" alt="" class="icon"></a>
    </div>
</div>