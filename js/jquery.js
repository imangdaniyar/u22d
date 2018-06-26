$('document').ready(function(){


	$("#name_error_message").hide();
	$("#sname_error_message").hide();
	$("#login_error_message").hide();
	$("#password_error_message").hide();
	$("#gender_error_message").hide();
	$('.tooltip_wrong').hide();
	$('.tooltip_right').hide();

	var error_name = true;
	var error_sname = true;
	var error_login = true;
	var error_password = true;
	var error_repass = true;
	var error_gender = true;

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
	$("#gender").focusout(function() {
		check_gender();
	});
	$("#buton").click(function() {
		register();
	});
	
	$("#signin-button").click(function() {
		signin();
	});
	$("#status").focusout(function() {
		status_change($('#statusid').val());
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
			error_name = false;
		}
	}

	function check_sname() {
		var sname_length = $("#form_sname").val().length;

		if (sname_length < 2 || sname_length > 20) {
			$("#form_sname").siblings('.tooltip_right').hide();
			$("#form_sname").siblings('.tooltip_wrong').show();
			$("#sname_error_message").html("Ваше фамилия должна состоять не менее 2 и не более 20 букв");
			$("#sname_error_message").show();
			error_sname = true;
		} else {
			$("#sname_error_message").hide();
			$("#form_sname").siblings('.tooltip_right').show();
			$("#form_sname").siblings('.tooltip_wrong').hide();
			error_sname = false;
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
			var str = $('#form_login').serialize();
			str = 'logincheck=1&'+str;
			$.ajax({
				url: '/checking.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
            var obj = jQuery.parseJSON(response);
            if(obj.ans === '0') {
            	$("#login_error_message").hide();
				$("#form_login").siblings('.tooltip_right').show();
				$("#form_login").siblings('.tooltip_wrong').hide();
				error_login=false;
            } else if(obj.ans === '1'){
            	$("#form_login").siblings('.tooltip_right').hide();
				$("#form_login").siblings('.tooltip_wrong').show();
				$("#login_error_message").html("Такой логин уже существует");
				$("#login_error_message").show();
				error_login = true;
            }
        }
    });
			;
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
			error_password = false;
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
			error_repass = false;
		}
	}
	function check_gender() {
		var gender = $("#gender").val();
		if ( !gender ) {
			$("#gender").siblings('.tooltip_right').hide();
			$("#gender").siblings('.tooltip_wrong').show();
			$("#gender_error_message").html("Вы не выбрали пол");
			$("#gender_error_message").show();
			error_gender = true;
		} else {
			$("#gender_error_message").hide();
			$("#gender").siblings('.tooltip_right').show();
			$("#gender").siblings('.tooltip_wrong').hide();
			error_gender = false;
		}
	}

	function register(){
		if(!error_gender &  !error_repass & !error_password & !error_login & !error_sname &  !error_name){
			$('#emsg').css('display','none');
			var name = $('#form_name').val().trim();
			var sname = $('#form_sname').val().trim();
			var login = $('#form_login').val().trim().toLowerCase();
			var password = $('#form_password').val().trim();
			var gender = $("#gender").val();
			var str = 'register=1&'+'name='+name+'&'+'sname='+sname+'&'+'password='+password+'&'+'login='+login+'&'+'gender='+gender;
			$.ajax({
				url: '/auth.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		success: function(response) {
            		var obj = jQuery.parseJSON(response);
            		location.replace(obj.ans);	
        		}
    		});

	} else {
		$('#emsg').css('display','block');
	}
}

function signin(){

	var login = $('#login').val().trim().toLowerCase();
	var password = $('#password').val().trim();
	if(login != '' & password != ''){
			var str = 'signin=1&'+'login='+login+'&'+'password='+password;
			$.ajax({
				url: '/auth.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		success: function(response) {
            		var obj = jQuery.parseJSON(response);
            		if (obj.ans==='0'){
            			$('#error-messagebox').html('Неправильно введен логин');
            		}	else if (obj.ans==='1') {
            			$('#error-messagebox').html('Неправильный пароль');
            		} else {location.replace(obj.ans);}
        		}
    		});

	} else {
		$('#error-messagebox').html('Заполните поля');
	}
}

function status_change(id){
	
	var text = $('#status').html().trim();
	var str = 'id='+id+'&'+'status='+text;
	$.ajax({
				url: '/auth.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		success: function(response) {
        			var obj = $.parseJSON(response);
        		}
    		});
}


	

});

