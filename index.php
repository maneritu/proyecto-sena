
<?php
require('conectar_base_de_datos.php');
	$nombre = $_POST['nombre'];
	$titulo = $_POST['titulo'];
	$fecha = $_POST['fecha'];
	$descripcion = $_POST['descripcion'];

	$consulta = "INSERT INTO eventos (nombre, titulo, descripcion, fecha) VALUES ('$nombre', '$titulo', '$descripcion', '$fecha')";
	$resultadoConsulta = $mysqli->query($consulta);

	try {
		if ($resultadoConsulta > 0) {

			throw new Exception(1);
			
		}else{

			throw new Exception(2);
		}
		
	} catch (Exception $guardar) {
		echo $guardar->getMessage();
		
	}
?>
