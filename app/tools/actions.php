<?php

function getFormatoCadena($cadena)
{
    $nuevaCadena    =   '';
    for($i=0; $i<strlen($cadena); $i++)
    {
        if($cadena[$i]  == ',')
        {
            $nuevaCadena    =   $nuevaCadena.'´';
        }
        elseif($cadena[$i]  == ':')
        {
            $nuevaCadena    =   $nuevaCadena.'∞'; // σ    Ω Δ
        }
        else
        {
            $nuevaCadena    =   $nuevaCadena.$cadena[$i];
        }
    }
    return $nuevaCadena;
}

function getFechaCambio ($fechaEntrada)
{
    if($fechaEntrada != '')
    {
        $fechaItems      =   explode("-", $fechaEntrada);
        $fecha           =   $fechaItems[2]."-".$fechaItems[1]."-".$fechaItems[0];
        return $fecha;
    }
    else
    {
        return -1;
    }
}

  
function getUSuarioSession($conexion, $id_usuario, $tipo)
{
    $nombreUsuario          =   '';
    $id_alumno_profesor     =    0;
    $nameInstitucion        =   '';
    $sexo                   =   '';
    if($tipo == 'P')
    {
        $selectUsuario  =   " SELECT p.id_profesor AS id_alumno_profesor, CONCAT(p.nombre_completo) AS nombreUSuario,  i.nombre AS nameInstitucion, p.sexo   "
                           ." FROM usuarios u "
                           ." INNER JOIN profesores p ON p.id_usuario = u.id_usuario "
                           ." INNER JOIN instituciones i ON p.id_institucion = i.id_institucion "
                           ." WHERE u.id_usuario = $id_usuario  ";
    }
    else 
    {
        $selectUsuario  =   " SELECT p.id_alumno AS id_alumno_profesor,  CONCAT(p.nombre_completo) AS nombreUSuario,  i.nombre AS nameInstitucion, p.sexo    "
                           ." FROM usuarios u "
                           ." INNER JOIN alumnos p ON p.id_usuario = u.id_usuario "
                           ." INNER JOIN instituciones i ON p.id_institucion = i.id_institucion "
                           ." WHERE u.id_usuario = $id_usuario  ";
    }
    
    $resultselectUsuario 	=   $conexion->query($selectUsuario);
    if( $resultselectUsuario->num_rows > 0 )   
    {
        $datos              =   $resultselectUsuario->fetch_assoc();
        $nombreUsuario      =   $datos["nombreUSuario"];
        $id_alumno_profesor =   $datos["id_alumno_profesor"];
        $nameInstitucion    =   $datos["nameInstitucion"];
        $sexo               =   $datos["sexo"];
    }
    return array($nombreUsuario, $id_alumno_profesor, $nameInstitucion, $sexo);
}


function getDatosInstitucion($conexion, $id_usuario, $tipo)
{
    $nombreUsuario          =   '';
    $id_alumno_profesor     =    0;
    if($tipo == 'P')
    {
        $selectUsuario  =   " SELECT p.id_profesor AS id_alumno_profesor, CONCAT(p.nombre_completo) AS nombreUSuario   "
                           ." FROM usuarios u "
                           ." INNER JOIN  profesores p ON p.id_usuario = u.id_usuario "
                           ." WHERE u.id_usuario = $id_usuario  ";
    }
    else 
    {
        $selectUsuario  =   " SELECT p.id_alumno AS id_alumno_profesor,  CONCAT(p.nombre_completo) AS nombreUSuario   "
                           ." FROM usuarios u "
                           ." INNER JOIN alumnos p ON p.id_usuario = u.id_usuario "
                           ." WHERE u.id_usuario = $id_usuario  ";
    }
    
    $resultselectUsuario 	=   $conexion->query($selectUsuario);
    if ($resultselectUsuario->num_rows > 0)
    {
        $datos              =   $resultselectUsuario->fetch_assoc();
        $nombreUsuario      =   $datos["nombreUSuario"];
        $id_alumno_profesor =   $datos["id_alumno_profesor"];
    }
    return array($nombreUsuario, $id_alumno_profesor);
}

function getIdCursoGrupo($conexion, $id_curso, $id_alumno)
{
    $id_curso_alumno    =   0;
    $id_curso_grupo     =   0;
    
    $selectUsuario  =   " SELECT id_curso_alumno, id_curso_grupo "
                       ." FROM cursos_alumnos  "
                       ." WHERE id_curso = $id_curso AND id_alumno = $id_alumno  ";
    
    $resultselectUsuario 	=   $conexion->query($selectUsuario);
    if ($resultselectUsuario->num_rows > 0)
    {
        $datos              =   $resultselectUsuario->fetch_assoc();
        $id_curso_alumno    =   $datos["id_curso_alumno"];
        $id_curso_grupo     =   $datos["id_curso_grupo"];
    }
    return array($id_curso_alumno, $id_curso_grupo);
}


function getAlumnoDesdeUSuario($conexion, $id_usuario, $tipoUsuario)
{
    $resultado  =   1;
    if($tipoUsuario == 'a')
    {
        $select     =    " SELECT id_alumno "
                        ." FROM alumnos "
                        ." WHERE id_usuario = $id_usuario ";
        $resultselect   =   $conexion->query($select);
        if ($resultselect->num_rows > 0)
        {
            $datos         =   $resultselect->fetch_assoc();
            $resultado     =   $datos["id_alumno"];
        }
    }
    else
    {
        $select     =    " SELECT id_profesor "
                        ." FROM profesores "
                        ." WHERE id_usuario = $id_usuario ";
        $resultselect   =   $conexion->query($select);
        if ($resultselect->num_rows > 0)
        {
            $datos         =   $resultselect->fetch_assoc();
            $resultado     =   $datos["id_profesor"];
        }
    }
    return $resultado;
}

function getListaCursoProfesor($conexion, $id_usuario)
{
    $tieneGrupos =   false;
    if($id_usuario == 0)
    {
        $select     =    " SELECT c.id_curso, g.id_curso_grupo, c.nombre, g.descripcion "
                        ." FROM profesores p "
                        ." INNER JOIN cursos_grupos g ON g.id_profesor = p.id_profesor "
                        ." INNER JOIN cursos c ON c.id_curso = g.id_curso ";
    }
    else
    {
        $select     =    " SELECT c.id_curso, g.id_curso_grupo, c.nombre, g.descripcion "
                        ." FROM profesores p "
                        ." INNER JOIN cursos_grupos g ON g.id_profesor = p.id_profesor "
                        ." INNER JOIN cursos c ON c.id_curso = g.id_curso "
                        ." WHERE p.id_usuario = $id_usuario ";
    }
    $resultselect   =   $conexion->query($select);
    if ($resultselect->num_rows > 0)
    {
        $tieneGrupos    =   true;
        $datos          =   $resultselect;
    }
    else
    {
        $datos       =   [];
    }
    return array($tieneGrupos, $datos);
}

function getModuloActivo($conexion, $id_curso_grupo, $id_modulo)
{
    $mA1  = false;
    $mA2  = false;
    $mA3  = false;
    $mA4  = false;
    $mA5  = false;
    $mA6  = false;
    $mA7  = false;
    $mA8  = false;
    $mA9  = false;
    $mA10 = false;
    $conta = 1;
  
    $select     =    " SELECT id_curso_grupo_modulo, estatus "
                    ." FROM cursos_grupos_modulos "
                    ." WHERE id_curso_grupo = $id_curso_grupo "
                    ." ORDER BY id_curso_grupo_modulo ASC ";
    $resultselect   =   $conexion->query($select);
    if ($resultselect->num_rows > 0)
    {
        while ($datos = $resultselect->fetch_assoc())
        {
            $resultado     =   $datos["estatus"];
            if($resultado == '1')
            {
                if($conta == 1) {   $mA1  =   true;     }
                elseif($conta == 2) {   $mA2  =   true;     }
                elseif($conta == 3) {   $mA3  =   true;     }
                elseif($conta == 4) {   $mA4  =   true;     }
                elseif($conta == 5) {   $mA5  =   true;     }
                
                elseif($conta == 6) {   $mA6  =   true;     }
                elseif($conta == 7) {   $mA7  =   true;     }
                elseif($conta == 8) {   $mA8  =   true;     }
                elseif($conta == 9) {   $mA9  =   true;     }
                elseif($conta == 10){   $mA10 =   true;     }
            }
            
            $conta = $conta + 1;
        }
    }
    return array($mA1, $mA2, $mA3 ,$mA4, $mA5,   $mA6, $mA7, $mA8, $mA9, $mA10);
}


function getIdHistoricoActividad($conexion, $idActividad, $idAlumno, $tbl)
{
    $resultado  =   1;
    $select     =    " SELECT MAX(id_historico) AS id_historico "
                    ." FROM $tbl "
                    ." WHERE id_alumno = $idAlumno AND id_actividad = $idActividad ";
    $resultselect   =   $conexion->query($select);
    if ($resultselect->num_rows > 0)
    {
        $datos         =   $resultselect->fetch_assoc();
        $resultado     =   $datos["id_historico"] + 1;
    }
    return $resultado;
}


function getIdHistoricoActividadUltimo($conexion, $idActividad, $idAlumno, $tbl)
{
    $resultado  =   0;
    $select     =    " SELECT MAX(id_historico) AS id_historico "
                    ." FROM $tbl "
                    ." WHERE id_alumno = $idAlumno AND id_actividad = $idActividad ";
    $resultselect   =   $conexion->query($select);
    if ($resultselect->num_rows > 0)
    {
        $datos         =   $resultselect->fetch_assoc();
        $resultado     =   $datos["id_historico"];
    }
    return $resultado;
}


function getNombreAlumno($conexion, $id_alumno, $tipoUsuario)
{
    $datoRegreso        =   '';
    if($tipoUsuario == 'a')
    {
        $resultRespuestas   =   $conexion->query("  SELECT nombre_completo "
                                                ."  FROM alumnos  "
                                                ."  WHERE  id_alumno = $id_alumno " );
        if( $resultRespuestas->num_rows > 0)
        {
            $datos          =   $resultRespuestas->fetch_assoc();
            $datoRegreso    =   $datos['nombre_completo'];
        }
    }
    else
    {
        $select     =    " SELECT nombre_completo "
                        ." FROM profesores "
                        ." WHERE id_profesor = $id_alumno ";
        $resultselect   =   $conexion->query($select);
        if ($resultselect->num_rows > 0)
        {
            $datos         =   $resultselect->fetch_assoc();
            $datoRegreso     =   $datos["nombre_completo"];
        }
    }
    
    return $datoRegreso;
}


function getAlumnoDesdeUSuario_sub($conexion, $id_usuario, $tipoUsuario)
{
    $resultado  =   1;
    if($tipoUsuario == 'a')
    {
        $select     =    " SELECT id_alumno "
                        ." FROM alumnos "
                        ." WHERE id_usuario = $id_usuario ";
        $resultselect   =   $conexion->query($select);
        if( $resultselect->num_rows > 0 )
        {
            $datos         =   $resultselect->fetch_assoc();
            $resultado     =   $datos["id_alumno"];
        }
    }
    else
    {
        $select     =    " SELECT id_profesor "
                        ." FROM profesores "
                        ." WHERE id_usuario = $id_usuario ";
        $resultselect   =   $conexion->query($select);
        if( $resultselect->num_rows > 0 )
        {
            $datos         =   $resultselect->fetch_assoc();
            $resultado     =   $datos["id_profesor"];
        }
    }
    return $resultado;
}


function getIdCursoGrupo_sub($conexion, $id_curso, $id_alumno)
{
    $id_curso_alumno    =   0;
    $id_curso_grupo     =   0;
    
    $selectUsuario  =   " SELECT id_curso_alumno, id_curso_grupo "
                       ." FROM cursos_alumnos  "
                       ." WHERE id_curso = $id_curso AND id_alumno = $id_alumno  ";
    
    $resultselectUsuario 	=   $conexion->query($selectUsuario);
    if ($resultselectUsuario->num_rows > 0)
    {
        $datos              =   $resultselectUsuario->fetch_assoc();
        $id_curso_alumno    =   $datos["id_curso_alumno"];
        $id_curso_grupo     =   $datos["id_curso_grupo"];
    }
    return array($id_curso_alumno, $id_curso_grupo);
}


function getImgen($formato)
{
    $complementoAct = 'ejercicio.png';
    if($formato == 'pdf')
    {
        $complementoAct = 'PDF.png';
    }
    else if($formato == 'vid')
    {
        $complementoAct = 'VIDEO.png';
    }
    return $complementoAct;
}


function getconclusiones($conexion, $idActividad)
{
    $conclusion    =   '';
    $selectUsuario  =   " SELECT conclusion "
                       ." FROM cursos_activades_indicaciones  "
                       ." WHERE id_actividad = $idActividad  ";
    $resultselectUsuario 	=   $conexion->query($selectUsuario);
    if ($resultselectUsuario->num_rows > 0)
    {
        $datos         =   $resultselectUsuario->fetch_assoc();
        $conclusion    =   $datos["conclusion"];
    }
    return $conclusion;
}

?>
