<?php

function getSelectDinamico( $conexion, $tabla, $id, $descripcion, $estatus )
{
    $result     =   $conexion->query("  SELECT $id AS id, $descripcion AS descripcion
                                        FROM $tabla
                                        WHERE estatus = '$estatus'
                                        ORDER BY $descripcion ");
    if($result->num_rows)   
    {
        return $result;
    }
    else
    {
        return array(["id" => "0", "descripcion" => "SIN INFORMACION" ]);
    }
}

function getSelectDinamicoOrderId( $conexion, $tabla, $id, $descripcion, $estatus )
{
    $result     =   $conexion->query("  SELECT $id AS id, $descripcion AS descripcion
                                        FROM $tabla
                                        WHERE estatus = '$estatus'
                                        ORDER BY $id ");
    if($result->num_rows)   
    {
        return $result;
    }
    else
    {
        return array(["id" => "0", "descripcion" => "SIN INFORMACION" ]);
    }
}


function getSelectDinamicoMarcas($conexion, $tabla, $id, $descripcion, $id_departamento, $estatus )
{
    $result     =   $conexion->query("  SELECT $id AS id, $descripcion AS descripcion
                                        FROM $tabla
                                        WHERE estatus = '$estatus' AND id_departamento = $id_departamento
                                        ORDER BY $descripcion ");
    if($result->num_rows)   
    {
        return $result;
    }
    else
    {
        return array(["id" => "0", "descripcion" => "SIN INFORMACION" ]);
    }
}


function getNombreDia($diaActual)
{
    $nombreDia  =   '';
    if($diaActual == 1)
    {
        $nombreDia  =   'lunes';
    }
    else if($diaActual == 2)
    {
        $nombreDia  =   'martes';
    }
    else if($diaActual == 3)
    {
        $nombreDia  =   'miercoles';
    }
    else if($diaActual == 4)
    {
        $nombreDia  =   'jueves';
    }
    else if($diaActual == 5)
    {
        $nombreDia  =   'viernes';
    }
    else if($diaActual == 6)
    {
        $nombreDia  =   'sabado';
    }
    else
    {
        $nombreDia  =   'domingo';
    }
    return $nombreDia;
}

?>







