
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$descripcion = $_POST['descripcion']; //recibir datos y guardando en una variable 
$nro_modulo = $_POST['nro_modulo'];
$programa_estudio = $_POST['programa_estudio'];

 $b_modulo = buscarModulo_formativo($conexion);
while ($res_b_modulo = mysqli_fetch_array($b_modulo)) {

	$insertar = " INSERT INTO modulo_profesional(descripcion,nro_modulo,programa_estudio) VALUES ('$descripcion','$nro_modulo','$programa_estudio')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);

}
	if ($ejecutar_insertar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulos_formativos.php'
    			</script>";
	} else {
		echo "<script>
			alert('Error al registrar ');
			window.history.back();
			</script>";
	}



 ?>