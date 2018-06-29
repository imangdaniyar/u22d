<div class="additional">
	<?php 
	if(isset($_SESSION['logged'])) :?>
 	<?php 
 		$user = $_SESSION['logged'];
 		$usera = R::findOne('users' , 'id = ?', array($user->id));
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
 				<div contenteditable="true" id="status" ><?php 
 				if($_SESSION['logged']->status != ''){
 					echo $_SESSION['logged']->status;	
 				} else echo 'Изменить статус';
 				?>

 				</div>
 			</div>
	 		</div>
	 		<a href="profile.php?id=<?php echo $user->id ?>"><div class="refer-profile">Перейти в профиль</div></a>
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