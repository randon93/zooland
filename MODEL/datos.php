<?php 
include "conexion.php";
$conexion = new conexion();
$continente=$_POST['continente'];

	$sql="SELECT * FROM raza r INNER JOIN tipo_raza tr ON r.id_raza = tr.id_raza WHERE tr.id_tipo = $continente ";

	$result = $conexion->conectar()->prepare($sql);
	$result -> execute();

	$cadena="<label>Razas</label> 
			<select id='lista2' name='lista2'>";

	foreach ($result as $ver) {
		$cadena = $cadena . '<option value=' . $ver['id_raza'] . '>' .utf8_encode($ver['nom_raza']) . '</option>';
	}
	// while ($ver=mysqli_fetch_row($result)) {
	// 	$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	// }

	echo  $cadena."</select>";
	

?>