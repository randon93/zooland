<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?PHP echo constant('URL');?>PUBLICO/css/bootstrap.css">
<script type="text/javascript" src="<?PHP echo constant('URL');?>PUBLICO/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?PHP echo constant('URL');?>PUBLICO/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
  integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<head>
  <title>Personas</title>
</head>

<body class="bg-light">

  <!--Inicio nav !-->

  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
    <a class="navbar-brand" href="index.html">Zooland</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">&nbsp&nbspInicio&nbsp&nbsp <i class="fas fa-home"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="galeria.html">&nbsp&nbspGaleria&nbsp&nbsp<i style='font-size:24px'
              class='far'>&#xf302;</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/aniad">&nbsp&nbsp Animalitos para Adoptar &nbsp&nbsp<i
              class="fas fa-eye"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/animales">&nbsp&nbspAnimales&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-paw'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/tratamientos">&nbsp&nbspTratamientos&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-heartbeat'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/vacunas">&nbsp&nbspVacunas&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-first-aid'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/personas">&nbsp&nbspPersonas&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-user-alt'></i></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="img/ingeniero.png">
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.html">Inicia Sesion</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Administrar</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Cerrar sesion</a>
          </div>
        </div>
        <div class="nav-item active">
          <a class="nav-link" href="#"></a>
        </div>
        <div class="nav-item active">
          <a class="nav-link" href="#"></a>
        </div>

      </form>
    </div>
  </nav>


  <!--Fin nav !-->

  <br>
  <br>

  <div class="container bg-light">
    <div class="row">
      <div class="col-sm-3 media border p-3">

        <div class="container">
          <ul class=" nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#regpe">Registrar una Persona</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#desvet">Asignar Persona como Veterinario</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#regdon">Registrar Donacion de Persona</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstpe">Listar Personas</a>

            </li>
          </ul>

        </div>
      </div>
      <div class="col-sm-7 media border p-3">


        <div class="container bg-white">
          <!-- Tab panes -->

          <div class="tab-content">
            <div id="regpe" class="container tab-pane active"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/registrarPersona">
                <h3 align="center">Registrar Persona</h3>
                <br>
                <div class="form-group">
                  <label>Cedula</label>
                  <input type="text" class="form-control" name="cedula">
                </div>
                <br>
                <div class="form-group">
                  <label>Nombres</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <br>
                <div class="form-group">
                  <label>Direccion</label>
                  <textarea class="form-control" rows="3" id="descripcion" name="direccion"></textarea>
                </div>
                <br>
                <div class="form-group">
                  <label>Ciudad</label>
                  <textarea class="form-control" rows="3" id="descripcion" name="ciudad"></textarea>
                </div>
                <br>
                <div class="form-group">
                  <label>Telefono</label>
                  <input type="text" class="form-control" name="telefono">
                </div>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" vlaue="Registrar"></p>
              </form>
            </div>

            <div id="desvet" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/aggVete">
                <h3>Designar Veterinario</h3>
                <div class="form-group">
                  <label>Cedula de la Persona</label>
                  <input type="text" class="form-control" name="vete">
                </div>
                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Convertir en
                    Veterinario"></p>
              </form>
            </div>



            <div id="regdon" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/donar">
                <h3 align="center">Registrar Donacion</h3>
                <br>
                <br>
                <div class="form-group">
                  <label>Cedula del Donante</label>
                  <input type="text" class="form-control" name="cedula">
                </div>
                <br>
                <div class="form-group">
                  <label>Monto en Pesos Colombianos (COP)</label>
                  <input type="text" class="form-control" name="cantidad">
                </div>
                <br> <br>
                <h3>Seleciona el Animal</h3>
                <br>
                <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
                <br>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Especie</th>
                      <th>Raza</th>
                      <th>Edad</th>
                      <th>confirmar</th>

                    </tr>
                  </thead>
                  <tbody id="myTable">
                    <?php foreach ($this->animales as $animal) {?>
                    <tr>
                      <td><?php echo $animal['nom_animal'];?></td>
                      <td><?php echo $animal['id_tipo'];?></td>
                      <td><?php echo $animal['id_raza'];?></td>
                      <td><?php echo $animal['edad'];?></td>
                      <td align="center"> <input name="cb[]" type="checkbox"
                          value="<?php echo $animal['id_animal'];?>">
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Registrar
                    Donacion">
                </p>
              </form>
            </div>




            <div id="lstpe" class="container tab-pane fade">
              <br>
              <h3 align="center">Lista de Personas</h3>
              <br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Documento</th>
                    <th>nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->personas as $persona) { ?>
                  <tr>
                    <th><?php echo $persona['documento']; ?></th>
                    <td><?php echo $persona['nombre']; ?></td>
                    <td><?php echo $persona['direccion']; ?></td>
                    <td><?php echo $persona['telefono']; ?></td>                    
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <br><br>
            </div>

          </div>

        </div>

</body>

</html>