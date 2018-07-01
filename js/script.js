// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function aboutme(){
	$('.about').css('display','block');
	$('.photos').css('display','none');
	$('#profile-tab1').addClass('active');
	$('#profile-tab2').removeClass('active');

}
function photos(){
	$('.about').css('display','none');
	$('.photos').css('display','block');
	$('#profile-tab2').addClass('active');
	$('#profile-tab1').removeClass('active');
}
function delete_com(id) {
	var str = 'delete_com=1&'+'id='+id;
	
	$.ajax({
				url: '/brain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		success: function(response) {
        			var obj = $.parseJSON(response);
        			$('#'+id).fadeOut("slow");

        		}
    		});
}

function send_com(uid,pid){
	
	var text = $('#com_text').html().trim();
	if(!text){
		$('#com_text').css("border","0.1vw solid red");
	} else{
		$('#com_text').css("border","0.1vw solid black");
		var str = 'add_com=1&'+'text='+text+'&pid='+pid+'&uid='+uid;
	if(text){
		$.ajax({
				url: '/brain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		success: function(response) {
        			$('#com_text').html('');
        			$('.img-container').html('');
        			$('.img-container').css('display','none');

        			$('.kek').after(response);
        		}
    		});
	}
	}
	
	
}