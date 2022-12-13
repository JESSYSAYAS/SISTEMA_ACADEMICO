
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$id = $_POST['id']; //recibir datos y guardando en una variable 
$descripcion = $_POST['descripcion']; //recibir datos y guardando en una variable 
$nro_modulo = $_POST['nro_modulo'];
$id_programa_estudio = $_POST['id_programa_estudio'];

 $b_modulo = buscarModulo_formativo($conexion);
while ($res_b_modulo = mysqli_fetch_array($b_modulo)) {

	$insertar = "INSERT INTO modulo_profesional(id,descripcion,nro_modulo,id_programa_estudio) VALUES ('$id','$descripcion','$nro_modulo','$id_programa_estudio')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);



	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulos_formativos.php'
    			</script>";
	} else {
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>";
	}
}

 ?>