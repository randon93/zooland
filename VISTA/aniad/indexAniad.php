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
  <title>Productos</title>
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

  <div class="container bg-white">
    <h1 align="center">Nuestros Animalitos</h1>
    <P align="center"><Strong>Ellos estan Buscando un Hogar , ellos te estan esperando a ti que esperas...
        Adopta!</Strong></p>
    <table class="table table-borderless">
      <tbody>
      <?php foreach ($this->animales as $animal) {?>
        <tr>
          <div class="col">
            <td>
              <div class="card">
                <div class="card-header" align="center"><strong><?php echo $animal['nom_animal']; ?></strong></div>
                <div class="card-img-top"><img src="img/caro1.jpg" style="width: 100%;height: 100%"></div>
                <div class="card-footer">
                  <p><strong>Edad : </strong><?php echo $animal['edad']; ?> </p>
                  <p><strong>Raza :</strong> <?php foreach ($this->razas as $raza) {
                    if ($raza['id_raza'] == $animal['id_raza']) {
                      echo $raza['nom_raza'];
                    }
                  } ?> </p>
                  <p><strong>Especie : </strong><?php foreach ($this->especies as $especie) {
                    if ($especie['id_tipo'] == $animal['id_tipo']) {
                      echo $especie['nom_tipo'];
                    }
                  } ?> </p>
                </div>
              </div>
            </td>
            <td>
              <div class="card">
                <div class="card-header" align="center"><strong>Gatito</strong></div>
                <div class="card-img-top"><img src="img/caro2.jpg" style="width: 100%;height: 100%"></div>
                <div class="card-footer">
                  <p><strong>Edad : </strong>2</p>
                  <p><strong>Raza :</strong>Tigre Australiano </p>
                  <p><strong>Especie : </strong>Tigre</p>
                </div>
              </div>
            </td>
            <td>
              <div class="card">
                <div class="card-header" align="center"><strong>Leonidas</strong></div>
                <div class="card-img-top"><img src="img/caro3.jpg" style="width: 100%;height: 100%"></div>
                <div class="card-footer">
                  <p><strong>Edad : </strong>10</p>
                  <p><strong>Raza :</strong>Espartano </p>
                  <p><strong>Especie : </strong>Leon</p>
                </div>
              </div>
            </td>
        </tr>
      <?php } ?>

      </tbody>
    </table>




  </div>



  <footer align="center"><strong>Derechos reservados ©2019 zooland </strong></footer>







</body>

</html>