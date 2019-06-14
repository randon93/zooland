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

  public function datos($especie)  {
    $con = $this->bd->conectar();
    $sql="SELECT * FROM raza r INNER JOIN tipo_raza tr ON r.id_raza = tr.id_raza WHERE tr.id_tipo = $especie GROUP BY r.nom_raza";
    $result = $con -> prepare($sql);
    $result -> execute();
    $cadena="<br><div class='form-group'>
                  <label>Raza : </label>

                </div>
                <select id='lista2' name='raza'>";
      
      

    foreach ($result as $ver) {
      $cadena = $cadena . '<option value=' . $ver['id_raza'] . '>' .utf8_encode($ver['nom_raza']) . '</option>';
    }
	// while ($ver=mysqli_fetch_row($result)) {
	// 	$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	// }

    $r =  $cadena."</select>";
    return $r;
  }

}
 ?>