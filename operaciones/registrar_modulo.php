<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['	descripcion'];
$nro_modulo = $_POST['nro_modulo'];
$id_programa_estudio = $_POST['id_programa_estudio'];


$b_modulo = buscarModulo_formativo($conexion);
$c_r_b_modulo = mysqli_num_rows($b_modulo);
if ($c_r_b_modulo == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO modulo_profesional (id,descripcion, nro_modulo, id_programa_estudio ) VALUES ('$id','$descripcion','$nro_modulo', '$id_programa_estudio')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulo_formativo.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar ');
			window.history.back();
			</script>
			";
	}
}else{
	echo "<script>
			alert('El registro ya existe, error al guardar');
			window.history.back();
			</script>
			";
}