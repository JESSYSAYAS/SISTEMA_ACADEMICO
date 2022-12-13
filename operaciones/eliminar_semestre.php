<<<<<<< HEAD
<?php
include "../include/conexion.php"; 
$id = $_GET['id'];

$sql = "DELETE FROM semestre WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../semestre.php';
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

=======
<?php
include "../include/conexion.php"; 
$id = $_GET['id'];

$sql = "DELETE FROM semestre WHERE id='$id'";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "<script>
					alert('Registro Eliminado');
					window.location= '../semestre.php';
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

>>>>>>> 5ae20d2ccb02bae06adc3175720d58cd70865491
?>