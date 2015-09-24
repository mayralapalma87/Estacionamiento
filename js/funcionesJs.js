function registrar(){
			alert("Registrarse!");
		}
function login(){
	alert("Registrarse!");
	
	var nombre = $("#nombreUsuario").val();
	var clave = $("#claveUsuario").val();

	var magicAjax = $.ajax({
					url: "validar.php",
					type:"post",	
					data:{usuario:nombre, pass:clave}
				});

	magicAjax.done(function(respuesta){
		if(respuesta=="correcto")
		{
			alert("Bienvenido al sistema de Estacionamiento!");
			window.location.href="home.php"; 	// redirigimos a menu.php
		}
		else
		{
			if(windows.confirm("Usted no esta registrado. Por favor registrese primero.")){
				windows.location.href="registrarse.php";
			}
		}
	});	
}