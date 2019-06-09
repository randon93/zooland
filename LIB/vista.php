<?php /**
 *
 */
class Vista {

  function __construct()  {
   // echo "<h1>VISTA PADRE</h1>";
  }

  public function render($vista) {//echo "<h1>entre</h1>";
    define('VISTA', $vista);
    define('CARPETA', $vista);
    require_once "VISTA/plantilla.php";
  }

  public function renderD($carpeta,$vista) {//echo "<h1>entre</h1>";
    define('VISTA', $vista);
    define('CARPETA', $carpeta);
    require_once "VISTA/plantilla.php";
  }
}
 ?>
