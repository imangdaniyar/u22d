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