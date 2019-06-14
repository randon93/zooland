<?php

class administradorControlador extends Controlador{

  function __construct(){
    parent::__construct();
    echo "<h3>Hola Controlador de administrador</h3>";
  }

  public function agregarEspecie()  {
    $especie = $_POST['especie'];
    $this->getCtrModel()->agregarEspecie($especie);
    echo "<script>alert('CITA ELIMINADO ');</script>";
    header("Location:  http://127.0.0.1/zooland/VISTAS/administrador");
  }

  public function agregarRaza()  {
    $especie = $_POST['especie'];
    $raza = $_POST['raza'];
    $this->getCtrModel()->agregarRaza($raza, $especie);
    echo "<script>alert('CITA ELIMINADO ');</script>";
    header("Location:  http://127.0.0.1/zooland/VISTAS/administrador");
  }

  public function darAdopcion()  {    
   $persona = "";
   $animal = "";
    foreach ($_POST['cb'] as $opc) {
      $persona = $opc;
    }
    foreach ($_POST['cb2'] as $opc) {
      $animal = $opc;
    }    
    
    $this->getCtrModel()->darAdopcion($persona, $animal);
    header("Location:  http://127.0.0.1/zooland/VISTAS/administrador");
  }

  public function darBaja()  {
    $animal = "";
    foreach ($_POST['cb'] as $opc) {
      $animal = $opc;
    }
    $this->getCtrModel()->darBaja($animal);
    header("Location:  http://127.0.0.1/zooland/VISTAS/administrador");
  }

  public function agregarAnimal()  {
    $nombre = $_POST["nombre"];
    $color = $_POST["color"];
    $edad = $_POST["edad"];
    $especie = $_POST["especie"];
    $raza = $_POST["raza"];
    $this->getCtrModel()->agregarAnimal($nombre, $color, $edad, $raza, $especie);
    header("Location:  http://127.0.0.1/zooland/VISTAS/administrador");
  }
  
  public function agregarTrata()  {
    $nombre = $_POST['nombre'];
    $this->getCtrModel()->agregarTrata($nombre);
    header("Location:  http://127.0.0.1/zooland/VISTAS/tratamientos");
  }

  public function agregarProceso()  {
    $nombre = $_POST['nombre'];
    $this->getCtrModel()->agregarProceso($nombre);
    header("Location:  http://127.0.0.1/zooland/VISTAS/tratamientos");
  }

  public function procesotrata()  {
    $proceso = $_POST['proceso'];
    $trata = $_POST['trata'];
    $this->getCtrModel()->procesotrata($proceso, $trata);
    header("Location:  http://127.0.0.1/zooland/VISTAS/tratamientos");
  }

  public function trataAnimal()  {
    $trata = $_POST['trata'];
    $animalitosp = $_POST['animall'];
    print_r($animalitosp);
    $vete = $_POST['vete'];
    $fechaI = $_POST['fechaI'];
    $fechaF = $_POST['fechaF'];
    $this->getCtrModel()->trataAnimal($trata, $animalitosp, $vete, $fechaI, $fechaF);
    header("Location:  http://127.0.0.1/zooland/VISTAS/tratamientos");
  }

  public function agregarVacuna()  {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $this->getCtrModel()->agregarVacuna($nombre, $descripcion);
    header("Location:  http://127.0.0.1/zooland/VISTAS/vacunas");
  }

  public function aplicarVac()  {
    $animal = "";
    foreach ($_POST['cb'] as $opc) {
      $animal = $opc;
    }
    $vacuna = $_POST['vacuna'];
    $fechaI = $_POST['fechaI'];
    $fechaF = $_POST['fechaF'];
    $this->getCtrModel()->aplicarVac($animal, $vacuna, $fechaI, $fechaF);
    header("Location:  http://127.0.0.1/zooland/VISTAS/vacunas");

  }

  public function registrarPersona()  {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $this->getCtrModel()->registrarPersona($cedula, $nombre, $direccion, $ciudad, $telefono);
    header("Location:  http://127.0.0.1/zooland/VISTAS/personas");
  }

  public function aggVete()  {
    $vete = $_POST['vete'];
    $this->getCtrModel()->aggVete($vete);
    header("Location:  http://127.0.0.1/zooland/VISTAS/personas");
  }

  public function donar()  {
    $animal = "";
    foreach ($_POST['cb'] as $opc) {
      $animal = $opc;
    }
    $cedula = $_POST['cedula'];
    $cantidad = $_POST['cantidad'];
    $this->getCtrModel()->donar($animal, $cedula, $cantidad);
    header("Location:  http://127.0.0.1/zooland/VISTAS/personas");
  }

}

 ?>
