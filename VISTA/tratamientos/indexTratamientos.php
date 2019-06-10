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
  <title>Tratamientos</title>
</head>
<script>
  $(document).ready(function () {
    $("#myInput").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#myInput2").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#myTable2 tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#myInput3").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#myTable3 tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
<script>
  $(document).ready(function () {
    $("#myInput5").on("keyup", function () {
      var value = $(this).val().toLowerCase();
      $("#myTable5 tr").filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

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
              <a class="nav-link active" data-toggle="tab" href="#aggtra">Crear Un Tratamiento</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#crearpro">Crear Proceso</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#aggpro">Agregar un proceso a un Tratamiento</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#apptra">Aplicar Tratamiento</a>

              <hr>

              <a class="nav-link" data-toggle="tab" href="#asgvet">Asignar Veterinario</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#lsttra">Listar Tratamientos</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstpro">Listar Procesos</a>


            </li>
          </ul>

        </div>
      </div>

      <div class="col-sm-7 media border p-3">


        <div class="container bg-white">
          <!-- Tab panes -->

          <div class="tab-content">
            <div id="aggtra" class="container tab-pane active"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/agregarTrata">
                <h3 align="center">Crear Un Tratamiento</h3>
                <br>
                <div class="form-group">
                  <label>Nombre del Tratamiento</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <br>

                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Agregar"></p>
              </form>
            </div>

            <div id="aggpro" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/procesotrata">
                <h3 align="center">Agregar Proceso</h3>
                <br>
                <br>
                <br>
                <label><strong>Elija el tratamiento al que desea agregarle un proceso</strong></label>
                <br>
                <br>
                <div class="form-group">
                  <select class="form-control" id="sel2" name="trata">
                    <?php foreach ($this->tratamientos as $trata) {?>
                    <option value="<?php echo $trata['id_tratamiento'];?>"><?php echo $trata['nombre'];?></option>
                    <?php } ?>
                  </select>
                </div>
                </select>

                <br> <br>

                <div class="form-group">
                  <label>Nombre del proceso</label>
                  <select class="form-control" id="sel2" name="proceso">
                    <?php foreach ($this->procesos as $proceso) {?>
                    <option value="<?php echo $proceso['id_proceso'];?>"><?php echo $proceso['nom_proceso'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <br>

                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Asignar"></p>
              </form>
            </div>



            <div id="asgvet" class="container tab-pane fade"><br>
              <h3>Lista de Veterinarios</h3>
              <br>
              <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
              <br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre persona</th>
                    <th>Cedula</th>
                    <th>Señalar</th>

                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr>
                    <td>pedro</td>
                    <td>1152321</td>
                    <td align="center"> <input type="checkbox">
                    </td>

                  </tr>
                  <tr>
                    <td>Daniel</td>
                    <td>1112333</td>
                    <td align="center"> <input type="checkbox"></td>

                  </tr>
                  <tr>
                    <td>Jose</td>
                    <td>1102735</td>
                    <td align="center"> <input type="checkbox"></td>

                  </tr>
                  <tr>
                    <td>Magnolia</td>
                    <td>5050051</td>
                    <td align="center"> <input type="checkbox"></td>

                  </tr>

                </tbody>
              </table>
              <h3>Lista de Animales</h3>
              <br>
              <input class="form-control" id="myInput2" type="text" placeholder="Buscar..">
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
                <tbody id="myTable2">
                  <tr>
                    <td>leonidas</td>
                    <td>leon</td>
                    <td>leon australiano</td>
                    <td align="center">12 meses</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Kratos</td>
                    <td>Perro</td>
                    <td>Criollo</td>
                    <td align="center">10 meses</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>lucius</td>
                    <td>gato</td>
                    <td>gato persa</td>
                    <td align="center">12 dias</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Mani</td>
                    <td>Mamut</td>
                    <td>Mamut</td>
                    <td align="center">34 anos</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>

                </tbody>
              </table>
              <br>
              <br>
              <p align="right"><button type="button" class="btn btn-success">Asignar Veterinario</button></p>
            </div>
            <div id="apptra" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/trataAnimal">
                <h3 align="center">Tratamiento para animales</h3>
                <br>
                <label>Nombre del animalito</label>
                <div class="form-group">
                  <select class="form-control" id="s2" name="animall">
                    <?php foreach ($this->animales as $animal) {?>
                    <option value="<?php echo $animal['id_animal'];?>"><?php echo $animal['nom_animal'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>fecha inicio</label>
                  <input type="date" class="form-control" name="fechaI">
                </div>
                <div class="form-group">
                  <label>fecha fin</label>
                  <input type="date" class="form-control" name="fechaF">
                </div>                
                <br>                
                <label>seleccione el Tratamiento a Aplicar</label>
                <div class="form-group">
                   <select class="form-control" id="wer" name="trata">
                    <?php foreach ($this->protra as $protras) {?>
                    <option value="<?php echo $protras['id_tratamiento_proceso'];?>"><?php echo $protras['id_tratamiento_proceso'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <label>seleccion el veterinario</label>
                <div class="form-group">
                  <select class="form-control" id="sfd" name="vete">
                    <?php foreach ($this->veterinarios as $veterinario) {?>
                    <option value="<?php echo $veterinario['id_veterinario'];?>"><?php echo $veterinario['nom_veterinario'];?></option>
                    <?php } ?>
                  </select>
                </div>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Aplicar tratamiento"></p>
              </form>
            </div>


            <div id="darbaja" class="container tab-pane fade"><br>

              <h3 align="center">Lista de Animales</h3>
              <p align="center"> Dar de baja en caso de muerte o algun siniestro que lo requiera</p>
              <br>
              <input class="form-control" id="myInput3" type="text" placeholder="Buscar..">
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
                <tbody id="myTable3">
                  <tr>
                    <td>leonidas</td>
                    <td>leon</td>
                    <td>leon australiano</td>
                    <td align="center">12 meses</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Kratos</td>
                    <td>Perro</td>
                    <td>Criollo</td>
                    <td align="center">10 meses</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>lucius</td>
                    <td>gato</td>
                    <td>gato persa</td>
                    <td align="center">12 dias</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Mani</td>
                    <td>Mamut</td>
                    <td>Mamut</td>
                    <td align="center">34 anos</td>
                    <td align="center"><input type="checkbox"></td>
                  </tr>

                </tbody>
              </table>
              <br>
              <p align="right"><button type="button" class="btn btn-success">Dar de Baja</button></p>
            </div>


            <div id="lsttra" class="container tab-pane fade"><br>

              <h3 align="center">Lista de Tratamientos</h3>

              <br>

              <br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Tratamiento</th>


                  </tr>
                </thead>
                <tbody>
                  <?php foreach($this->animal_tratamento as $at){?>
                  <tr>                    
                    <td><?php foreach ($this->animales as $animal) {
                      if ($animal['id_animal'] == $at['id_animal']) {
                        echo $animal['nom_animal'];
                      }
                    }?></td>
                    <td><?php echo $at['descripcion_at'];?></td>
                    <td><?php 
                    foreach ($this->protra as $pt) {
                      if ($at['id_tratamiento_proceso'] == $pt['id_tratamiento_proceso']) {
                        foreach ($this->tratamientos as $trata) {
                          if ($trata['id_tratamiento'] == $pt['id_tratamiento']) {
                            echo $trata['nombre'];
                          }
                        } 
                      }
                    }
                    ?> </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>

            </div>


            <div id="lstpro" class="container tab-pane fade">
              <br>
              <h3 align="center">Lista de Procesos</h3>
              <br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>descripcion</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->procesos as $proceso) {?>
                  <tr>                    
                    <td> <?php echo $proceso['nom_proceso']; ?></td>
                    <td> <?php echo $proceso['descripcion_proceso'] ?></td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
              <br><br>
            </div>

            <div id="crearpro" class="container tab-pane fade">
              <br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/agregarProceso">
                <h3 align="center">Crear Un Proceso</h3>
                <br>
                <div class="form-group">
                  <label>Nombre del Proceso</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <br>

                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Agregar"></p>
              </form>
            </div>

          </div>

        </div>

      </div>

</body>

</html>