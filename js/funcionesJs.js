function registrar(){
	alert("Registrarse!");
	
	var nombre = $("#nombreUsuario").val();
	var clave = $("#claveUsuario").val();
	var mail = $("#mailUsuario").val();

	var magicAjax = $.ajax({
					url: "registrarEmpleado.php",
					type:"post",	
					data:{usuario:nombre, pass:clave, mail:mail}
				});

	magicAjax.done(function(respuesta){
		if(respuesta=="correcto")
		{
			alert("Bienvenido al sistema de Estacionamiento!");
			window.location.href="home.php"; 	// redirigimos a menu.php
		}
		else
		{
			if(window.confirm("Error inesperado, por favor intente nuevamente...")){
				window.location.href="registrarse.php";
			}
		}
	});	
}

function login(){
	alert("Login!");
	
	var nombre = $("#nombreUsuario").val();
	var clave = $("#claveUsuario").val();
	var recordar=$("#recordarme").is(':checked');
	var magicAjax = $.ajax({
					url: "validar.php",
					type:"post",	
					data:{usuario:nombre, pass:clave, recordarme:recordar}
				});

	magicAjax.done(function(respuesta){
		if(respuesta=="correcto")
		{
			alert("Bienvenido al sistema de Estacionamiento!");
			window.location.href="home.php"; 	// redirigimos a menu.php
		}
		else
		{
			if(window.confirm("Usted no esta registrado. Por favor registrese primero.")){
				window.location.href="registrarse.php";
			}
		}
	});	
}