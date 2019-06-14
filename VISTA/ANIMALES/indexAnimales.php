<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?php echo constant('URL');?>PUBLICO/css/bootstrap.css">
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLICO/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>PUBLICO/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
  integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<head>
  <title>Administrar Inventario</title>
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
          <a class="nav-link" href="<?php echo constant('URL');?>vistas/aniad">&nbsp&nbsp Animalitos para Adoptar
            &nbsp&nbsp<i class="fas fa-eye"></i></a>
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
              <a class="nav-link active" data-toggle="tab" href="#aggesp">Agregar Una Especie</a>
              <hr>


              <a class="nav-link" data-toggle="tab" href="#aggraza">Agregar una raza</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#agganimal">Agregar Animal</a>
              <hr>

              <a class="nav-link" data-toggle="tab" href="#adopt">Dar en Adopcion</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#darbaja">Dar Salida</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstanm">Listar Animales</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstraza">Listar Raza</a>
              <hr>
              <a class="nav-link" data-toggle="tab" href="#lstesp">Listar Especie</a>

            </li>
          </ul>

        </div>
      </div>

      <div class="col-sm-7 media border p-3">


        <div class="container bg-white">
          <!-- Tab panes -->

          <div class="tab-content">

            <div id="aggesp" class="container tab-pane active"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/agregarEspecie">
                <h3 align="center">Agregar Una Especie</h3>
                <br>
                <div class="form-group">
                  <label>Nombre de la Especie</label>
                  <input type="text" class="form-control" name="especie">
                </div>
                <br>

                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Agregar"></p>
              </form>
            </div>


            <div id="aggraza" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/agregarRaza">
                <h3 align="center">Agregar Raza</h3>
                <br>
                <br>
                <br>
                <label><strong>Elija la especie a la que pertenece la raza , si no existe de lo contrario
                    creela</strong></label>
                <br>
                <br>
                <div class="form-group">
                  <select class="form-control" name="especie">
                    <?php foreach ($this->especies as $especie) { ?>
                    <option value="<?php echo $especie['id_tipo'];?>" selected><?php echo $especie['nom_tipo'];?>
                    </option>
                    <?php } ?>
                  </select>
                </div>

                <br> <br>

                <div class="form-group">
                  <label>Nombre de la raza</label>
                  <input type="text" class="form-control" name="raza">
                </div>
                <br>

                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" id="cmdcontra" value="Agregar Raza"></p>
              </form>
            </div>



            <div id="adopt" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>administrador/darAdopcion">
                <h3>Lista de Personas</h3>
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

                    <?php foreach ($this->personas as $persona) {?>
                    <tr>
                      <td><?php echo $persona['nombre'];?></td>
                      <td><?php echo $persona['documento'];?></td>
                      <td align="center"> <input name="cb[]" type="checkbox"
                          value="<?php echo $persona['documento'];?>">
                      </td>
                    </tr>
                    <?php } ?>

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

                    <?php foreach ($this->animales as $animal) {?>
                    <tr>
                      <td><?php echo $animal['nom_animal'];?></td>
                      <td><?php echo $animal['id_tipo'];?></td>
                      <td><?php echo $animal['id_raza'];?></td>
                      <td><?php echo $animal['edad'];?></td>
                      <td align="center"> <input name="cb2[]" type="checkbox"
                          value="<?php echo $animal['id_animal'];?>">
                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
                <br>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Dar en Adopcion"></p>
              </form>
            </div>
            <div id="agganimal" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>administrador/agregarAnimal">
                <h3 align="center">Ingresar Animal</h3>
                <br>
                <div class="form-group">
                  <label>Nombre del Animal</label>
                  <input type="text" class="form-control" name="nombre">
                </div>
                <br>
                <div class="form-group">
                  <label>Color:</label>
                  <input type="text" class="form-control" name="color">
                </div>
                <div class="form-group">
                  <label>Edad:</label>
                  <input type="text" class="form-control" name="edad">
                </div>
                <br>
                <div class="form-group">
                  <label>Especie : </label>

                </div>
                <div class="form-group">
                  <!-- <label>Especies</label> -->
                  <select id="lista1" name="especie">
                    <option value="0">Selecciona una opcion</option>
                    <?php foreach ($this->especies as $especie) {?>
                    <option value="<?php echo $especie['id_tipo'];?>"><?php echo $especie['nom_tipo'];?></option>
                    <?php }?>
                  </select>
                  <br>
                  <div id="select2lista"></div>
                </div>
                <br>

                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Crear Animal"></p>
              </form>
            </div>
            <div id="darbaja" class="container tab-pane fade"><br>
              <form method="post" action="<?php echo constant('URL');?>ADMINISTRADOR/darBaja">
                <h3 align="center">Lista
                  de Animales</h3>
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

                    <?php foreach ($this->animales as $animal) {?>
                    <tr>
                      <td><?php echo $animal['nom_animal'];?></td>
                      <td><?php echo $animal['id_tipo'];?></td>
                      <td><?php echo $animal['id_raza'];?></td>
                      <td><?php echo $animal['edad'];?></td>
                      <td align="center"> <input name="cb[]" type="checkbox" value="<?php echo $animal['id_animal'];?>">
                      </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
                <br>
                <p align="right"><input type="submit" class="btn btn-success" value="Dar de Baja"></p>
              </form>
            </div>


            <div id="lstanm" class="container tab-pane fade"><br>

              <h3 align="center">Lista de Animales</h3>

              <br>

              <br>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Raza</th>
                    <th>Edad</th>
                    <th>color</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->animales as $animal) {?>
                  <tr>
                    <td><?php echo $animal['nom_animal'];?></td>
                    <td><?php echo $animal['id_tipo'];?></td>
                    <td><?php echo $animal['id_raza'];?></td>
                    <td><?php echo $animal['edad'];?></td>
                    <td><?php echo $animal['color'];?></td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>

            </div>


            <div id="lstraza" class="container tab-pane fade">
              <br>
              <h3 align="center">Lista de Razas</h3>
              <br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombre raza</th>
                    <th>Especie</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->razas as $raza) { ?>
                  <tr>
                    <td><?php echo $raza['id_raza'];?></td>
                    <td><?php echo $raza['nom_raza'];?></td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
              <br><br>
            </div>

            <div id="lstesp" class="container tab-pane fade">
              <br>
              <h3 align="center">Lista de Especies</h3>
              <br><br>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Nombre Especie</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($this->especies as $especie) { ?>
                  <tr>
                    <td><?php echo $especie['id_tipo'];?></td>
                    <td><?php echo $especie['nom_tipo'];?></td>
                  </tr>
                  <?php } ?>

                </tbody>
              </table>
              <br><br>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#lista1').val(0);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"datos",
			data:"continente=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
			}
		});
	}
</script>