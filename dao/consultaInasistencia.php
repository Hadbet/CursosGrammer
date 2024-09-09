<?php

include_once('db/db_RH.php');

ContadorApu();

function ContadorApu()
{
    $con = new LocalConector();
    $conex = $con->conectar();

    $datos = mysqli_query($conex, "SELECT COUNT(`IdBitacoraCurso`) AS Inasistencias, MONTH(`Fecha`) as Mes FROM `BitacoraCursos` WHERE `EstatusAsistencia` = 0 and YEAR(`Fecha`) = 2024 GROUP BY MONTH(`Fecha`);");

    $resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
    echo json_encode(array("data" => $resultado));
}


?>