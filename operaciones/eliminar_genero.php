<?php
include "../include/conexion.php"; 
$id = $_GET['id'];

$sql = "DELETE FROM genero WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../genero.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Eliminar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);

?>