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
                        <div class="panel-title" style="text-align:center;">Ingreso de Empleado </div>
                        <div style="float:right; font-size: 90%; position: relative; top:-10px"><a href="registrarse.php">Registrarse</a></div>
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
                                    
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls" style="text-align:center;">
                                     <input type="button" onclick="login()" class="btn btn-success" value= "Ingresar" >
                                </div>
                            </div>
                            <div class="checkbox">
                                 <label>
                                    <input type="checkbox" id="recordarme" checked> Recordame
                                </label>
                            </div>
                        
                        </form>

                    </div>
            </div>
        </div>
    
</body>
</html>