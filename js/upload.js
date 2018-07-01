function render(files){
	if(files){
		$('.img-container').css('display','block');
	        
         $.each(files, function(i,file) {
         	console.log(file);
            var reader = new FileReader();
           
            reader.onload = (function(event) {
            var the_url = event.target.result;
            $('.img-container').append('<div class="com_image"><img class="com_photo"  src="'+the_url+'"/></div>');
            
        });reader.readAsDataURL(file)
            
         });
     }
           } 

function upload(uid,cid){
  var formData = new FormData();
  if($('#f_dialog')[0].files[0].length != 0 & $('#f_dialog')[0].files.length < 6) {

    $.each($('#f_dialog')[0].files, function(i,file){
        formData.append("file["+i+"]",file);
        
    });
    formData.append("uid",uid);
    
    formData.append("cid",cid);
    $.ajax({
      url: '/images.php',
      type: "POST",
      cache:false,
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
      beforeSend: function(){
        console.log('Start ');
        $("#form").find('input').prop('disabled',true);
      },
      success: function(responce){
        console.log(responce);
        $("#f_dialog").val('');
      },
      complete:function(){
        console.log('Finish');
        $("#form").find('input').prop('disabled',false);
      }
  });      
  } else alert('Максимальное количество файлов 5');
   
     
}
            
            
     
	
	
