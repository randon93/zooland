<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="<?PHP echo constant('URL');?>PUBLICO/css/bootstrap.css">
<script type="text/javascript" src="<?PHP echo constant('URL');?>PUBLICO/js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="<?PHP echo constant('URL');?>PUBLICO/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
  integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?PHP echo constant('URL');?>PUBLICO/css/style.css">

<head>
  <title>Inicia Sesion</title>

</head>

<body>

  <!--Inicio nav !-->
<!-- 
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
          <a class="nav-link" href="animales.html">&nbsp&nbspAnimales&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-paw'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="tratamientos.html">&nbsp&nbspTratamientos&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-heartbeat'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="vacunas.html">&nbsp&nbspVacunas&nbsp&nbsp<i style='font-size:24px'
              class='fas fa-first-aid'></i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="personas.html">&nbsp&nbspPersonas&nbsp&nbsp<i style='font-size:24px'
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
  </nav> -->
  <!--Fin nav !-->
  
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Inicia Sesion</h3>

        </div>
        <div class="card-body">
          <form method="post" action="<?PHP echo constant('URL');?>login/login">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="Usuario" name="user">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <br>
              <input type="password" class="form-control" placeholder="Contrasena" name="password">
            </div>

            <div class="form-group">
              <input type="submit" value="Login" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center">
            <p style="color: white"><strong>Copyright © 2019 DelBosque </strong></p>
          </div>


        </div>
      </div>
    </div>
  </div>

</body>

</html>