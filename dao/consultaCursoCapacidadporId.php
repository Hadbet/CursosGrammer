<?php
include_once('db/db_RH.php');

$Horario=$_GET['horario'];
$Curso=$_GET['curso'];
$Fecha=$_GET['fecha'];

ContadorApu($Horario,$Curso,$Fecha);
function ContadorApu($Horario,$Curso,$Fecha)
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT Cursos.IdCurso, Cursos.NombreCurso, Cursos.Horario, Cursos.Fecha, Cursos.Estatus, Cursos.Capacidad, Cursos.Objetivo, Cursos.Instructor, Cursos.Tipo, Cursos.Temario, Cursos.Area, Cursos.FechaTermino, Cursos.Vigencia, (Cursos.Capacidad - IFNULL((SELECT COUNT(*) FROM BitacoraCursos WHERE BitacoraCursos.Curso = Cursos.NombreCurso AND BitacoraCursos.Horario = Cursos.Horario AND BitacoraCursos.Fecha = Cursos.Fecha), 0)) AS CapacidadRestante FROM Cursos WHERE Fecha >= CURDATE() and `NombreCurso`= '$Curso' and `Horario` = '$Horario' and `Fecha` = '$Fecha';");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
    mysqli_close($conex);

}


?>