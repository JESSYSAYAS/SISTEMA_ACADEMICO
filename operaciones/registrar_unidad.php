<<<<<<< HEAD
<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_modulo = $_POST['id_modulo'];
$id_semestre = $_POST['id_semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];
					

$b_unidad = buscarUnidadDidactica($conexion);
$c_r_b_unidad = mysqli_num_rows($b_unidad);
if ($c_r_b_unidad == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (id,descripcion,id_programa_estudio,id_modulo,id_semestre,creditos,horas,tipo,orden)VALUES ('$id','$descripcion','$id_programa_estudio', '$id_modulo','$id_semestre','$creditos','$horas','$tipo','$orden')";
 							
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	if ($ejec_insertar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../unidad_didactica.php'
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
=======
<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$id_programa_estudio = $_POST['id_programa_estudio'];
$id_modulo = $_POST['id_modulo'];
$id_semestre = $_POST['id_semestre'];
$creditos = $_POST['creditos'];
$horas = $_POST['horas'];
$tipo = $_POST['tipo'];
$orden = $_POST['orden'];
					

$b_unidad = buscarUnidadDidactica($conexion);
$c_r_b_unidad = mysqli_num_rows($b_unidad);
if ($c_r_b_unidad == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (id,descripcion,id_programa_estudio,id_modulo,id_semestre,creditos,horas,tipo,orden)VALUES ('$id','$descripcion','$id_programa_estudio', '$id_modulo','$id_semestre','$creditos','$horas','$tipo','$orden')";
 							
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	if ($ejec_insertar) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../unidad_didactica.php'
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
>>>>>>> 5ae20d2ccb02bae06adc3175720d58cd70865491
?>