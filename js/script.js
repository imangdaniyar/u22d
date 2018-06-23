// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$('document').ready(function(){

	$("#name_error_message").hide();
	$("#sname_error_message").hide();
	$("#login_error_message").hide();
	$("#psw_error_message").hide();

	var error_name = false;
	var error_sname = false;
	var error_login = false;
	var error_psw = false;

});

