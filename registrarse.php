<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Estacionamiento</title>
		<!--Estilos !-->
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!--Scripts !-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/funcionesJs.js"></script>
</head>
<body>
	<div class="container" id="imagen-fondo"> 
		<h2 class="text-center"><kbd>Sistema de Estacionamiento</kbd></h1>   
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title" style="text-align:center;">Registro de Empleado </div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >    

                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="nombreUsuario" type="text" class="form-control" name="nombreUsuario" value="" placeholder="Nombre de Usuario">                                        
                             </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="claveUsuario" type="password" class="form-control" name="claveUsuario" placeholder="Clave">
                            </div>
                             <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="mailUsuario" type="text" class="form-control" name="mailUsuario" placeholder="Email">
                            </div>
                                    
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls" style="text-align:center;">
                                     <input type="button" onclick="registrar()" class="btn btn-success" value= "Registrarse" >
                                </div>
                            </div>
                        
                        </form>

                    </div>
            </div>
        </div>
    
</body>
</html>