$('document').ready(function(){

	$("#name_error_message").hide();
	$("#sname_error_message").hide();
	$("#login_error_message").hide();
	$("#password_error_message").hide();
	$('.tooltip_wrong').hide();
	$('.tooltip_right').hide();

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
			$("#form_name").siblings('.tooltip_right').hide();
			$("#name_error_message").html("Ваше имя должно состоять не менее 2 и не более 20 букв");
			$("#name_error_message").show();
			$("#form_name").siblings('.tooltip_wrong').show();
			error_name = true;
		} else {
			$("#form_name").siblings('.tooltip_wrong').hide();
			$("#name_error_message").hide();
			$("#form_name").siblings('.tooltip_right').show();
		}
	}

	function check_sname() {
		var sname_length = $("#form_sname").val().length;

		if (sname_length < 2 || name_length > 20) {
			$("#form_sname").siblings('.tooltip_right').hide();
			$("#form_sname").siblings('.tooltip_wrong').show();
			$("#sname_error_message").html("Ваше фамилия должна состоять не менее 2 и не более 20 букв");
			$("#sname_error_message").show();
			error_sname = true;
		} else {
			$("#sname_error_message").hide();
			$("#form_sname").siblings('.tooltip_right').show();
			$("#form_sname").siblings('.tooltip_wrong').hide();
		}
	}

	function check_login() {
		var login_length = $("#form_login").val().length;

		if (login_length < 5 || login_length > 20) {
			$("#form_login").siblings('.tooltip_right').hide();
			$("#form_login").siblings('.tooltip_wrong').show();
			$("#login_error_message").html("Логин должен быть не менее 5 и не более 20");
			$("#login_error_message").show();
			error_login = true;
		} else {
			$("#login_error_message").hide();
			$("#form_login").siblings('.tooltip_right').show();
			$("#form_login").siblings('.tooltip_wrong').hide();
		}
	}

	function check_password() {
		var password_length = $("#form_password").val().length;

		if (password_length < 8) {
			$("#form_password").siblings('.tooltip_right').hide();
			$("#form_password").siblings('.tooltip_wrong').show();
			$("#password_error_message").html("Пароль должен быть более 8 букв");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
			$("#form_password").siblings('.tooltip_right').show();
			$("#form_password").siblings('.tooltip_wrong').hide();
		}
	}

	function check_repass() {
		var password = $("#form_password").val();
		var repass = $("#form_repass").val();

		if (password != repass) {
			$("#form_repass").siblings('.tooltip_right').hide();
			$("#form_repass").siblings('.tooltip_wrong').show();
			$("#repass_error_message").html("Введенные пароли не совпадают");
			$("#repass_error_message").show();
			error_repass = true;
		} else {
			$("#repass_error_message").hide();
			$("#form_repass").siblings('.tooltip_right').show();
			$("#form_repass").siblings('.tooltip_wrong').hide();
		}
	}
});

