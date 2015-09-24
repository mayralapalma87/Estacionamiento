<?php
session_start();
require_once("empleado.php");
require_once("accesoBD.php");

$usuario= $_POST['usuario'];
$pass= $_POST['pass'];
$retorno;
echo "validando...";

if(empleado::validarEmpleado($usuario, $pass)
{
	$_SESSION['usuarioActual']=$_POST['usuario'];
	return "correcto";
}
else
{
	return "No registrado";
}

?>