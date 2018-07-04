function render(files){
	if(files){
		$('.img-container').css('display','block');
	        
         $.each(files, function(i,file) {
         	console.log(file);
            var reader = new FileReader();
           
            reader.onload = (function(event) {
            var the_url = event.target.result;
            $('.img-container').append('<div class="com_image"><img class="com_photo"  src="'+the_url+'"/><div class="remove-image" onclick="remove('+i+')" ><i style="color:red; font-size:1vw;" class="fa fa-times"></div></div>');
            
        });reader.readAsDataURL(file)
            
         });
     }
           } 
  function remove(i){
    $('#f_dialog')[0].files[i].value = '';
    console.log( $('#f_dialog')[0].files[i]);
    render($('#f_dialog')[0].files);
  }

function upload(uid,cid){
  var formData = new FormData();
  if($('#f_dialog')[0].files[0]) {
    if($('#f_dialog')[0].files.length < 6){
    $.each($('#f_dialog')[0].files, function(i,file){
        formData.append("file["+i+"]",file);
        
    });
    formData.append("uid",uid);
    
    
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
        $('.kek').after(cid);
        var str = 'last=1';
        $.ajax({
        url: '/brain.php',
            type: "POST",
            cache: false,
            data: str,
            async:true,
            beforeSend: function(){
             $('#tempdiv').empty(); 
            },
            success: function(response) {
              $('#tempdiv').text(response);
              console.log(response);
            },
            complete: function(){
               var id = $('#tempdiv').text();
        $('#'+id+'p').after(responce);
            }
        });

       
        
        



      },
      complete:function(){
        console.log('Finish');
        $("#form").find('input').prop('disabled',false);
      }
  });      
  } else {
    alert('Максимальное количество файлов 5');
    $('.kek').after(cid);
  }
   }else {
    $('.kek').after(cid);

   }
     
}
            
            
     
	
	
