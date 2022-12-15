<?php
    include "../include/conexion.php";
    include "../include/busquedas.php";
    $id = $_POST['id']; //recibir datos y guardando en una variable $docente
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE cargo SET id='$id', ruc='$descripcion'";

    $ejec = mysqli_query($conexion, $sql);
    if ($ejec) {
        echo "<script>
        alert('Datos actualizados de manera Correcta');
        window.location= '../cargo.php';
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