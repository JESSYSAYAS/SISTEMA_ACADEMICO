<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
//buscar cargo
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}function buscarCargoById($conexion, $id){
    $sql = "SELECT * FROM cargo WHERE id='$id'";
    return mysqli_query($conexion, $sql);
    //buscarprograma
}function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
//semestres buscar
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
//busqueda de estudiantes
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}

function buscarUsuarioEstudianteById($conexion){
    $sql = "SELECT * FROM usuarios_estudiante ";
    return mysqli_query($conexion, $sql);
}
//busqueda de docentes
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocenteById($conexion, $id){
    $sql = "SELECT * FROM usuarios_docentes WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}
function buscardocente($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
//busqueda UNIDAD DIDACTICA}
function buscarUnidadDidactica($conexion){
    $sql = "SELECT * FROM unidad_didactica";
    return mysqli_query($conexion, $sql);
}

  //busqueda datos institucionales

    function buscarDatosInstByCodModular($conexion, $cod_modular){
        $sql = "SELECT * FROM datos_institucionales WHERE cod_modular=$cod_modular";
        return mysqli_query($conexion, $sql);
    }
    function mostrarDatosInstitucionales($conexion){
        $sql = "SELECT * FROM datos_institucionales";
        return mysqli_query($conexion, $sql);
    }
//busqueda periodo academico

function buscarPeriodoAcadById($conexion){
    $sql = "SELECT * FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
//busqueda presente periodo academico
function buscarPresentePeriodoAcad($conexion){
    $sql = "SELECT * FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
//busqueda modulo formartivo

function buscarModulo_formativo($conexion){
    $sql = "SELECT * FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
//busqueda programacion unidad didactica

function buscarprogramacion_unidad_didactica($conexion){
    $sql = "SELECT * FROM programacion_unidad_didactica";
    return mysqli_query($conexion, $sql);
}