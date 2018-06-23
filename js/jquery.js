$('document').ready(function(){

	$("#name_error_message").hide();
	$("#sname_error_message").hide();
	$("#login_error_message").hide();
	$("#password_error_message").hide();
	$("#tooltip_wrong").hide();
	$("#tooltip_right").hide();

	var error_name = false;
	var error_sname = false;
	var error_login = false;
	var error_password = false;
	var error_repass = false;

	$("#form_name").focusout(function() {
		check_name();
	});
	$("#form_sname").focusout(function() {
		check_sname();
	});
	$("#form_login").focusout(function() {
		check_login();
	});
	$("#form_password").focusout(function() {
		check_password();
	});
	$("#form_repass").focusout(function() {
		check_repass();
	});
	function check_name() {
		var name_length = $("#form_name").val().length;

		if (name_length < 2 || name_length > 20) {
			$("#tooltip_right").hide();
			$("#name_error_message").html("Error");
			$("#name_error_message").show();
			$("#tooltip_wrong").show();
			error_name = true;
		} else {
			$("#tooltip_wrong").hide();
			$("#name_error_message").hide();
			$("#tooltip_right").show();
		}
	}

	function check_sname() {
		var sname_length = $("#form_sname").val().length;

		if (sname_length < 2 || name_length > 20) {
			$("#sname_error_message").html("Error");
			$("#sname_error_message").show();
			error_sname = true;
		} else {
			$("#sname_error_message").hide();
		}
	}

	function check_login() {
		var login_length = $("#form_login").val().length;

		if (login_length < 5 || login_length > 20) {
			$("#login_error_message").html("Error");
			$("#login_error_message").show();
			error_login = true;
		} else {
			$("#login_error_message").hide();
		}
	}

	function check_password() {
		var password_length = $("#form_password").val().length;

		if (password_length < 8) {
			$("#password_error_message").html("Error");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	}

	function check_repass() {
		var password = $("#form_password").val();
		var repass = $("#form_repass").val();

		if (password != repass) {
			$("#repass_error_message").html("Error");
			$("#repass_error_message").show();
			error_repass = true;
		} else {
			$("#repass_error_message").hide();
		}
	}
});

