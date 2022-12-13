<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_modulo = $_POST['id_modulo'];
$id_semestre = $_POST['id_semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];

$b_unidad = buscarUnidadDidactica($conexion);
while ($res_b_unidad = mysqli_fetch_array($b_unidad)) {
$insertar = "INSERT INTO unidad_didactica (descripcion,id_programa_estudio,id_modulo,id_semestre,creditos,horas,tipo,orden) VALUES ('$descripcion','$id_programa_estudio', '$id_modulo','$id_semestre','$creditos','$horas','$tipo','$orden')";							
$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
}
if ($ejec_insertar) {
	echo "<script>
			alert('Registro Exitoso');
			window.location= '../unidades_didacticas.php'
			</script>";
} else {
	echo "<script>
		alert('Error al registrar ');
		window.history.back();
		</script>";
}

?>