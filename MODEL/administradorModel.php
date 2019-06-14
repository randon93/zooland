<?php
class AdministradorModel extends Modelo{

  function __construct()  {
    parent::__construct();
    echo "<h3>Inicio modelo</h3>";
  }

  public function agregarEspecie($especie)  {
    $sql = "INSERT INTO tipo(id_tipo, nom_tipo) VALUES ( :id, :nombre)";
    $con = $this->bd->conectar();
    $consultar = $con ->prepare($sql);
    $id = $this->tamaño("tipo") + 1;
    $consultar -> execute( array(":id"=>$id, ":nombre"=>$especie) );
    $con = $this->bd->cerrarCon();
  }

  public function agregarRaza($raza, $especie)  {
    $sql = "INSERT INTO raza(nom_raza, id_raza) VALUES ( :nombre, :id)";
    $con = $this->bd->conectar();
    $consultar = $con ->prepare($sql);
    $id = $this->tamaño("raza") + 1;
    $consultar -> execute( array(":id"=>$id, ":nombre"=>$raza) );
    $this->agregarTipoRaza($id, $especie);
    $con = $this->bd->cerrarCon();
  }

  public function agregarTipoRaza($raza, $especie)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tipo_raza`(`id`,`id_raza`, `id_tipo`) VALUES (:id,:raza, :especie)");
    $id = $this->tamaño("tipo_raza") + 1;
    $consultar -> execute( array(":id"=>$id, ":raza"=>$raza, ":especie"=>$especie) );
    $con = $this->bd->cerrarCon();
  }

  public function darAdopcion($persona, $animal)  {    
    $this->crearAdoptador($persona);
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO adopcion (id_persona, id_animal, fecha_adopcion) VALUES (:persona, :animal, :fecha)");
    $consultar -> execute( array(":persona"=>$persona, ":animal"=>$animal, ":fecha"=> date('Y-m-d') ) );
  }

  public function crearAdoptador($persona)  {
    $sql = "INSERT INTO adoptador (nom_adoptador, id_adoptador)  VALUES (:nombre, :id)";
    $con = $this->bd->conectar();
    $consultar = $con -> prepare($sql);
    $nombre = $this->persona($persona);
    print_r($nombre);
    $consultar -> execute( array(":nombre"=>$nombre['nombre'], ":id"=>$persona) );
  }

  public function agregarAnimal($nombre, $color, $edad, $raza, $especie)  {
    $con = $this->bd->conectar();
    $id = $this->tamaño("animal") + 1;
    $consultar = $con -> prepare("INSERT INTO `animal`(`id_animal`, `nom_animal`, `color`, `edad`, `estado`) VALUES (:id, :nombre, :color, :edad, :estado)");
    $consultar -> execute( array(":id"=>$id, ":nombre"=>$nombre, ":color"=>$color, ":edad"=>$edad, ":estado"=>1) );
    $er = $this->buscarTipoRaza($especie, $raza);
    $this->animalTipo($raza, $especie);
    $this->animalTipoRaza($er, $id);
    
  }

  public function animalTipoRaza($er, $id)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `animal_tipo_raza`(`id_tipo_raza`, `id_animal`) VALUES (:tipoRaza, :animal)");
    $consultar -> execute( array(":tipoRaza"=>$er, ":animal"=>$id) );
  }

  public function buscarTipoRaza($tipo, $raza)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT id FROM tipo_raza WHERE id_tipo = :tipo AND id_raza = :raza");
    $consultar -> execute( array(":tipo"=>$tipo, ":raza"=>$raza) );
    foreach ($consultar as $value) {
      return $value['id'];
    }
  }

  public function animalTipo($raza, $especie)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tipo_raza`(`id`, `id_tipo`, `id_raza`) VALUES ( :id, :tipo, :raza)");
    $id = $this->tamaño('tipo_raza') + 1;
    $consultar -> execute( array(":id"=>$id, ":tipo"=>$especie, ":raza"=>$raza) );
  }

  public function darBaja($animal)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("UPDATE animal SET estado = :estado");
    $consultar -> execute( array(":estado"=>0) );

  }

  public function agregarTrata($nombre)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tratamiento`(`id_tratamiento`, `descripcion_tratamiento`, `nombre`) VALUES ( :id, :descripcion, :nombre)");
    $id = $this->tamaño("tratamiento") + 1; 
    $consultar -> execute( array(":id"=>$id, ":descripcion"=>"hola", ":nombre"=>$nombre) );
  }

  public function agregarProceso($nombre)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `proceso`(`id_proceso`, `nom_proceso`, `descripcion_proceso`) VALUES (:id, :nombre, :descripcion)");
    $id = $this->tamaño("proceso") + 1; 
    $consultar -> execute( array(":id"=>$id, ":nombre"=>$nombre, ":descripcion"=>"hola2") );
  }
 
  public function procesotrata($proceso, $trata)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `tratamiento_proceso`(`id_tratamiento`, `id_proceso`, `id_tratamiento_proceso`) VALUES ( :trata, :proceso, :id)");
    $id = $this->tamaño("tratamiento_proceso") + 1;
    $consultar -> execute( array( ":trata"=>$trata, ":proceso"=>$proceso, ":id"=>$id ) ) ;
  }

  public function trataAnimal($trata, $animal, $vete, $fechaI, $fechaF)  {
    $con = $this->bd->conectar();
    //$animal = $this->buscarAnimal($animal);
    $consultar = $con -> prepare("INSERT INTO `animal_tratamiento`(`id_animal`, `descripcion_at`, `fecha_inicio`, `fecha_fin`, `id_persona_v`, `cantidad`, `id_tratamiento_proceso`) VALUES (:animal, :descripcion, :fechaI, :fechaF, :vete, :cant, :trata)");
    $consultar -> execute( array( ":animal"=>$animal, ":descripcion"=>"hola3", ":fechaI"=>$fechaI, ":fechaF"=>$fechaF, ":vete"=>$vete, ":cant"=>"123", ":trata"=>$trata) );

  }

  public function agregarVacuna($nombre, $descripcion)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `vacuna`(`id_vacuna`, `nom_vacuna`, `descripcion_vacuna`) VALUES (:id, :nombre, :descripcion)");
    $id = $this->tamaño("vacuna") + 1;
    $consultar -> execute( array(":id"=>$id,  ":nombre"=>$nombre, ":descripcion"=>$descripcion) );
  }

  public function aplicarVac($animal, $vacuna, $fechaI, $fechaF)  {
    $con = $this->bd-> conectar();
    $consultar = $con -> prepare("INSERT INTO `animal_vacuna`(`id_animal`, `id_vacuna`, `fecha_aplicacion`, `fecha_vencimiento`) VALUES (:animal, :vacuna, :fechaI, :fechaF)");
    $consultar -> execute( array(":animal"=>$animal, ":vacuna"=>$vacuna, ":fechaI"=>$fechaI, ":fechaF"=>$fechaF) );
  }

  public function registrarPersona($cedula, $nombre, $direccion, $ciudad, $telefono)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `persona`(`documento`, `nombre`, `direccion`, `ciudad`, `telefono`) VALUES (:cedula, :nombre, :direccion, :ciudad, :telefono)");
    $consultar -> execute( array(":cedula"=>$cedula, ":nombre"=>$nombre, ":direccion"=>$direccion, ":ciudad"=>$ciudad, ":telefono"=>$telefono) );

  }

  public function aggVete($vete)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("INSERT INTO `veterinario`(`nom_veterinario`, `id_veterinario`) VALUES ( :nombre, :vete)");
    $nombre = $this->persona($vete)['nombre'];
    $consultar -> execute( array(":nombre"=>$nombre, ":vete"=>$vete) );
  }

  public function donar($animal, $cedula, $cantidad)  {
    $con = $this->bd->conectar();
    $consultar = $con ->  prepare("INSERT INTO `padrino`(`nom_padrino`, `id_padrino`) VALUES ( :nombre, :id)");
    $nombre = $this->persona($cedula)['nombre'];
    $consultar -> execute( array(":nombre"=>$nombre, ":id"=>$cedula) );
    $consultarr = $con -> prepare("INSERT INTO `padrinar`(`id_persona`, `id_animal`, `monto`) VALUES ( :persona, :animal, :monto)");
    $consultarr -> execute( array(":persona"=>$cedula, ":animal"=>$animal, ":monto"=>$cantidad) );
  }

  public function buscarAnimal($animal)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM animal WHERE id_animal = :id");
    $consultar -> execute( array(":id"=>$animal) );
    foreach ($consultar as $cons) {
      return $cons;
    }
  }

  public function persona($persona)  {
    $con = $this->bd->conectar();
    $consultar = $con ->prepare("SELECT * FROM persona WHERE documento = :cedula");
    $consultar -> execute( array(":cedula"=>$persona) );
    foreach ($consultar as $cons) {// echo "entre";
     // print_r($cons);
      return $cons;
    }
  }

  public function tamaño($tabla)  {
    $con = $this->bd->conectar();
    $consultar = $con -> prepare("SELECT * FROM $tabla");
    $consultar -> execute();
    $cont = 0;
    foreach($consultar as $consul){
      $cont++;
    }
    $this->bd->cerrarCon();
    return $cont;
  }

}
 ?>
