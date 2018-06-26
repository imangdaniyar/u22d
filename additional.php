<div class="additional">
	<?php 
	if(isset($_SESSION['logged'])) :?>
 	<?php 
 		$user = $_SESSION['logged'];
 		$usera = R::findOne('users' , 'id = ?', array($user['id']));
 		$_SESSION['logged'] = $usera;
 		$user = $_SESSION['logged'];
 		
 	?>
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

 	</div>
 	

	<?php endif ?>
 	<div class="icons">
        <a href=""><img src="img/icons/vintage/mail.png" alt="" class="icon"></a>
        <a href=""><img src="img/icons/vintage/rss.png" alt="" class="icon"></a>
        <a href=""><img src="img/icons/vintage/youtube.png" alt="" class="icon"></a>
    </div>
</div>