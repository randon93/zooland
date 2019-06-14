<?php /**
 *
 */
class VistasControlador extends Controlador{

  function __construct()  {
    parent::__construct();
  }

 
  public function administrador()  {
    $this->animales();
  }
  public function animales()  {
    $this->getCtrVista()->especies = $this->getCtrModel()->especies();
    $this->getCtrVista()->razas = $this->getCtrModel()->razas();
    $this->getCtrVista()->personas = $this->getCtrModel()->personas();
    $this->getCtrVista()->animales = $this->getCtrModel()->animales();
    $this->getCtrVista()->render("animales");
  }

  

  public function login()  {
    $this->getCtrVista()->render("login");
  }

  public function error()  {
    $this->getCtrVista()->render("error");
  }

 
  public function tratamientos()  {
    $this->getCtrVista()->tratamientos = $this->getCtrModel()->tratamientos();
    $this->getCtrVista()->procesos = $this->getCtrModel()->procesos();
    $this->getCtrVista()->animales = $this->getCtrModel()->animales();
    $this->getCtrVista()->veterinarios = $this->getCtrModel()->veterinarios();
    $this->getCtrVista()->protra = $this->getCtrModel()->protra();
    $this->getCtrVista()->animal_tratamento = $this->getCtrModel()->animal_tratamento();  
    $this->getCtrVista()->render("tratamientos");
  }

  public function vacunas()  {
    $this->getCtrVista()->vacunas = $this->getCtrModel()->vacunas();
    $this->getCtrVista()->animales = $this->getCtrModel()->animales();
    $this->getCtrVista()->especies = $this->getCtrModel()->especies();
    $this->getCtrVista()->razas = $this->getCtrModel()->razas();
    $this->getCtrVista()->render("vacunas");
  }

  public function personas()  {
    $this->getCtrVista()->animales = $this->getCtrModel()->animales();
    $this->getCtrVista()->personas = $this->getCtrModel()->personas();  
    $this->getCtrVista()->render("personas");
  }

  public function aniad()  {
    $this->getCtrVista()->animales = $this->getCtrModel()->animales();
    $this->getCtrVista()->especies = $this->getCtrModel()->especies();
    $this->getCtrVista()->razas = $this->getCtrModel()->razas();
    $this->getCtrVista()->render("aniad");
  }
public function datos(){
  $continente=$_POST['continente'];
  echo $this->getCtrModel()->datos($continente);
  
}


}
 ?>
