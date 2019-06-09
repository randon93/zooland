<?php /**
 *
 */
class Modelo extends Conexion{

  function __construct()  {
    parent::__construct();
    //echo "<h1>MODELO PADRE</h1>";
    $this->bd = new Conexion();
  }
}
 ?>
