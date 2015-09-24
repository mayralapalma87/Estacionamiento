<?php
class empleado
{
  public $idUsuario;
  public $nombreUsuario;
  public $clave;
  public $mail;
 
   public function validarEmpleado($usuario,$clave)
  {
    $objAccesoBD = accesoBD::ingresoBD(); 
    $consulta =$objAccesoBD->RetornarConsulta("select * from usuarios where Nombre='$usuario' and clave='$clave'");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS, "usuarios");
  }

  public static function TraerTodosLosEmpleados()
  {
    $objAccesoBD = accesoBD::ingresoBD(); 
    $consulta =$objAccesoBD->RetornarConsulta("select * from usuarios");
    $consulta->execute();           
    return $consulta->fetchAll(PDO::FETCH_CLASS, "usuarios"); 
  }

  public function InsertarEmpleado()
  {
    $objAccesoBD = accesoBD::ingresoBD(); 
    $consulta =$objAccesoBD->RetornarConsulta("INSERT into usuarios (nombre,clave, mail)values(:paramNombre,:paramClave,:paramMail)");
    $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
    $consulta->bindValue(':paramClave', $this->clave, PDO::PARAM_STR);
    $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_STR);
    $consulta->execute();       
    return $objAccesoBD->RetornarUltimoIdInsertado();
  }
   
}

?>