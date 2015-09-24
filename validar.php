<?php
session_start();
require_once("empleado.php");
require_once("accesoBD.php");

echo "validando...";

$usuario=$_POST['usuario'];
$clave=$_POST['pass'];
$recordar=$_POST['recordarme'];

if(empleado::ValidarEmpleado($usuario, $clave)
{
	$_SESSION['usuarioActual']=$usuario;
	if($recordar){
		setcookie("registro",$usuario,  time()+36000 , '/');
	}
	return ("correcto");
else
{
	return ("No registrado");
}

?>