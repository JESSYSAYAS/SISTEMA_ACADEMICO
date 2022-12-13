
<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
include "../include/busquedas.php";
$id = $_POST['id']; //recibir datos y guardando en una variable 
$id_periodo_acad= $_POST['id_periodo_acad']; //recibir datos y guardando en una variable 

$consulta = "INSERT INTO presente_periodo_acad (id,id_periodo_acad) VALUES ('$id','$id_periodo_acad')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../periodo_academico.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>

