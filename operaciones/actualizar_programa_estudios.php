<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$cod = $_POST['codigo'];
$tipo = $_POST['tipo'];
$nom = $_POST['nombre'];
$reso = $_POST['resolucion'];


$sql = "UPDATE programa_estudios SET codigo='$cod', tipo='$tipo', nombre='$nom', resolucion='$reso' WHERE id='$id'";
$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../programa_estudios.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>