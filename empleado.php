<?php
class empleado
{
  public $idUsuario;
  public $nombreUsuario;
  public $clave;
  public $mail;
 
   public function ValidarEmpleado($usuario,$clave)
  {
    echo "Validar Empleado";
    $objAccesoBD = accesoBD::dameUnObjetoAcceso(); 
    $consulta =$objAccesoBD->RetornarConsulta("select * from usuarios where nombre='$usuario' and clave='$clave'");
    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_CLASS, "usuarios");
  }

  public function InsertarEmpleado()
  {
    echo "Insertar Empleado";
    $objAccesoBD = accesoBD::dameUnObjetoAcceso(); 
    $consulta =$objAccesoBD->RetornarConsulta("INSERT into usuarios (nombre,clave, mail)values(:paramNombre,:paramClave,:paramMail)");
    $consulta->bindValue(':paramNombre',$this->nombre, PDO::PARAM_STR);
    $consulta->bindValue(':paramClave', $this->clave, PDO::PARAM_STR);
    $consulta->bindValue(':paramMail', $this->mail, PDO::PARAM_STR);
    $consulta->execute();       
    return $objAccesoBD->RetornarUltimoIdInsertado();
  }

   public static function TraerTodosLosEmpleados()
  {
    $objAccesoBD = accesoBD::dameUnObjetoAcceso(); 
    $consulta =$objAccesoBD->RetornarConsulta("select * from usuarios");
    $consulta->execute();           
    return $consulta->fetchAll(PDO::FETCH_CLASS, "usuarios"); 
  }

}

?>