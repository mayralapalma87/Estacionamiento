<?php
session_start();
require_once("empleado.php");
require_once("accesoBD.php");

echo "validando...";

if(empleado::ValidarEmpleado($_POST['usuario'], $_POST['pass'])
{
	$_SESSION['usuarioActual']=$_POST['usuario'];
	return "correcto";
}
else
{
	return "No registrado";
}

?>