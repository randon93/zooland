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
  <title>Vacunas</title>
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
          <a class="nav-link" href="aniad.html">&nbsp&nbsp Animalitos para Adoptar &nbsp&nbsp<i
              class="fas fa-eye"></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/animales">&nbsp&nbspAnimales&nbsp&nbsp<i
              style='font-size:24px' class='fas fa-paw'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/tratamientos">&nbsp&nbspTratamientos&nbsp&nbsp<i
              style='font-size:24px' class='fas fa-heartbeat'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/vacunas">&nbsp&nbspVacunas&nbsp&nbsp<i
              style='font-size:24px' class='fas fa-first-aid'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/personas">&nbsp&nbspPersonas&nbsp&nbsp<i
              style='font-size:24px' class='fas fa-user-alt'></i></a>
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
              <a class="nav-link active" data-toggle="tab" href="#aggvac">Agregar Una Vacuna</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#appvacu">Aplicar Vacuna</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#regvac">Registrar Vacuna </a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstvac">Listar Vacunas</a>

            </li>
          </ul>

        </div>
      </div>
      <div class="col-sm-7 media border p-3">


        <div class="container bg-white">
          <!-- Tab panes -->

          <div class="tab-content">
            <div id="aggvac" class="container tab-pane active"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/agregarVacuna">
                <h3 align="center">Agregar Una Vacuna</h3>
                <br>
                <div class="form-group">
                  <label>Nombre de la Vacuna</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <br>
                <div class="form-group">
                  <label>Descripcion</label>
                  <textarea class="form-control" rows="3" id="descripcion" name="descripcion"></textarea>
                </div>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Agregar"></p>
              </form>
            </div>

            <div id="appvacu" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/aplicarVac">
                <h3 align="center">Aplicar Vacuna</h3>
                <br>
                <br>
                <div class="form-group">
                  <select class="form-control"  name="vacuna">
                    <?php foreach ($this->vacunas as $vacuna) { ?>
                    <option value = " <?php echo $vacuna['id_vacuna'] ?>"> <?php echo $vacuna['nom_vacuna']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <label>Fecha Aplicacion</label>
                  <input type="date" class="form-control" name="fechaI">
                </div>
                <br>
                <div class="form-group">
                  <label>Fecha de Vencimiento si tiene</label>
                  <input type="date" class="form-control" name="fechaF">
                </div>
                <br>
                <br> <br>
                <h3>Lista de Animales</h3>
                <br>
                <input class="form-control" id="myInput5" type="text" placeholder="Buscar..">
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
                  <tbody id="myTable5">
                    <?php foreach ($this->animales as $animal) {?>
                    <tr>
                      <td><?php echo $animal['nom_animal'] ?></td>
                      <td><?php  foreach ($this->especies as $especie) {
                        if ($especie['id_tipo'] == $animal['id_tipo']) {
                          echo $especie['nom_tipo'];
                        }
                      } ?></td>
                      <<td><?php  foreach ($this->razas as $raza) {
                        if ($animal['id_raza'] == $raza['id_raza']) {
                          echo $raza['nom_raza'];
                        }
                      } ?></td>
                      <td align="center"><?php echo $animal['edad'] . " años"; ?></td>
                      <td align="center"><input type="checkbox" name="cb[]" value="<?php echo $animal['id_animal']; ?>"></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Aplicar Vacuna">
                </p>
              </form>
            </div>



            <div id="regvac" class="container tab-pane fade"><br>

              <h3 align="center">Registrar Vacuna</h3>
              <br>
              <br>
              <div class="form-group">
                <select class="form-control">
                  <option selected>Ninguna</option>
                  <option value="volvo">Rabia</option>
                  <option value="fiat">Sarna</option>
                  <option value="audi">Pulgas</option>
                </select>
              </div>
              <br> <br>
              <h3>Lista de Animales</h3>
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
              <p align="right"><button type="button" class="btn btn-success" id="cmdcontra">Registrar Vacuna</button>
              </p>
            </div>




            <div id="lstvac" class="container tab-pane fade">
              <br>
              <h3 align="center">Lista de Especies</h3>
              <br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>nombre</th>
                    <th>descripcion</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->vacunas as $vacuna) {?>
                  <tr>
                    <td><?php echo $vacuna['nom_vacuna'] ?></td>
                    <td><?php echo $vacuna['descripcion_vacuna'] ?> </td>
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