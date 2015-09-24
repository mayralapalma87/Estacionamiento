<?php
session_start();
require_once("empleado.php");
require_once("accesoBD.php");

echo "Resgistrando...";

if(empleado::InsertarEmpleado($_POST['usuario'], $_POST['pass'],$_POST['mail'])
{
	$_SESSION['usuarioActual']=$_POST['usuario'];
	return "correcto";
}
else
{
	return "No registrado";
}

?>