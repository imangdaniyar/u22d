<?php
session_start();
require 'rb.php';	
R::setup( 'mysql:host=127.0.0.1;dbname=u2d','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}else{
$uid = $_POST['uid'];
$cid = $_SESSION['com_id'];
 if(!empty($_FILES['file']['tmp_name'])){
 	for($i = 0; $i < count($_FILES['file']['name']); $i++){
 		if(($_FILES['file']['type'] = "image/jpg") or ($_FILES['file']['type'] = "image/jpeg")){
 			$upload_path = __DIR__."/com_images/";
 			$user_filename = $_FILES['file']['name'][$i];
 			$userfile_name = pathinfo($user_filename,PATHINFO_FILENAME);
 			$userfile_ext = pathinfo($user_filename,PATHINFO_EXTENSION);

 			$server_filename = $userfile_name.".".$userfile_ext;
 			$server_filepath = $upload_path.$server_filename;
 			$j= 0;
 			while (file_exists($server_filepath)) {
 			$j++;
 			$server_filepath = $upload_path.$userfile_name."(".$j.").".$userfile_ext;
 			$server_filename = $userfile_name."(".$j.").".$userfile_ext;
 			}
 			if(copy($_FILES['file']['tmp_name'][$i], $server_filepath)){
 				
				$image = R::dispense('comimages');
				$image->cid = $cid;
				$image->uid = $uid;
				$image->image = $server_filename;
				R::store($image);
				$temp = $temp.'
                          <div class="com_image">
                            <img class="com_photo"  src="com_images/'.$server_filename.'"/>
                          </div>
                        ';


				
	
 			}
 		}
 		
 	}
 	$_FILES='';
 	 $temp = '<div class="com_images">'.$temp.'</div>';
 	 exit($temp);
 }
}
  ?>