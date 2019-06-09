<?php /**
 *
 */
class Controlador {
  private $CtrModel;
  private $CtrVista;

  public function getCtrModel()  {
    return $this->CtrModel;
  }
  public function getCtrVista(){
    return $this->CtrVista;
  }

  function __construct()  {
   // echo "<h1>CONTROLADOR PADRE</H1>";
    $this->CrearVista();
  }

  public function CrearModelo($nombreModelo)  {
    $archivo = "MODEL/".$nombreModelo."Model.php";
    if ( file_exists( $archivo ) ) {
      require_once $archivo;
      $nom = $nombreModelo."Model";
      $modelo = new $nom;
      $this->CtrModel = $modelo;
    }
  }

  public function CrearVista()  {
    $this->CtrVista = new Vista();
  }


}
 ?>
