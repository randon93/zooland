<?php /**
 *
 */
class VistasModel extends Modelo{

  function __construct()  {
    parent::__construct();
  }

  public function especies()  {
    $sql = "SELECT * FROM tipo";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function razas()  {
    $sql = "SELECT * FROM raza";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

   public function personas()  {
    $sql = "SELECT * FROM persona";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function animales()  {
    $sql = "SELECT * FROM animal";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function tratamientos()  {
    $sql = "SELECT * FROM tratamiento";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function procesos()  {
    $sql = "SELECT * FROM proceso";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function veterinarios()  {
    $sql = "SELECT * FROM veterinario";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

   public function protra()  {
    $sql = "SELECT * FROM tratamiento_proceso";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

  public function animal_tratamento()  {
    $sql = "SELECT * FROM animal_tratamiento";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }

   public function vacunas()  {
    $sql = "SELECT * FROM vacuna";
    $especies  = [];
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $consultar -> execute();
    foreach ($consultar as $tipo) {
      array_push($especies, $tipo);
    }
    return $especies;
  }


}
 ?>