<?php
if(!isset($_SESSION))
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('session_start', '1');
    session_start();
}

include("../tools/conexiondb.php");

date_default_timezone_set('America/Mexico_City');
$idUsuario      =  $_SESSION['usuario'];
$idHistorial    =  getHistoricoId($conexion, $idUsuario);
$fechaSistema   =  date("Y-m-d");
$horaApSistema  =  date('H_i');

$historico  =   "  UPDATE usuarios_historico_acceso SET "
               ."  fecha_acceso_termino = '$fechaSistema', "
               ."  hora_acceso_termino  = '$horaApSistema' "
               ."  WHERE  id_historial = $idHistorial ";
$resulHistorico     =	$conexion->query($historico);


if(isset($_SESSION))
{
    session_destroy();
}

echo json_encode("Sesión Finalizada");


function getHistoricoId($conexion, $idUsuario)
{
    $idHistorial    =   0;
    $resultQuery    =   $conexion->query(" SELECT MAX(id_historial) AS  id_historial "
                                        ." FROM usuarios_historico_acceso "
                                        ." WHERE id_usuario = $idUsuario ");
    if($resultQuery->num_rows)
    {
        $datos          =   $resultQuery->fetch_assoc();
        $idHistorial    =   $datos['id_historial'];
    }
    return $idHistorial ;
}

?>