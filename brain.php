<?php
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
} else{
	$last;
	$data = $_POST;
if($_POST['delete_com']){
	$id = $data['id'];
	$images = R::find('comimages', 'cid = ?',[$id]);
	foreach ($images as $image) {
		$img = $image->image;
		$upload_path = __DIR__."/com_images/";
		$server_filepath = $upload_path.$img;
		unlink($server_filepath);
	}
	R::trashAll($images);

	$comment = R::load('comments',$id);
	R::trash($comment);

	exit('{ "ans": "1"}');
}

if($_POST['add_com']){
	$pid = $data['pid'];
	$text = $data['text'];
	$uid = $data['uid'];
 	$com_user = R::findOne('users', ' id = ? ', [ $uid ]);
	$comment = R::dispense('comments');
	$comment->text = $text;
	$comment->pid = $pid;
	$comment->uid = $uid;

	$comment->purpose = "n";
	R::store($comment);
	$_SESSION['com_id'] = R::getInsertID();
	
		exit('<div class="comment" id="'.$comment->id.'"><div class="comments-ava"><img src="avatars/'.$com_user->avatar.'" alt="ava" class="com-ava"></div><div class="com-box" ><div class="comment-text"><div class="com_user_info"><a href="profile.php?id='.$com_user->id.'">'.$com_user->sname.' '.$com_user->name.':</a></div><div class="delete-com"  onclick="delete_com('.$comment->id.')">Удалить</div><div>'.$comment->text.'</div><div class="point" id="'.$comment->id.'p'.'"></div></div><br class="clear"><div class="com-info">Сейчас</div></div></div>');
	
	}
if($_POST['last']){
	$last = $_SESSION['com_id'];
	exit(($last.''));
}
	

}