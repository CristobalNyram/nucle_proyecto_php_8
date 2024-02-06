<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    //ini_set('session_start', '1');
    if(isset($_SESSION['usuario']))
    {
        session_destroy();
    }
    session_start();

    $username 	=   $_POST['usuariodat'];
    $password 	=   $_POST['passworddat'];
    $respuesta 	=   "a";

    include("../app/tools/conexiondb.php");
    include("../app/tools/encriptar.php");

    if (isset($conexion))
    {
        $resultselectusuario    =   $conexion->query("	SELECT usu.id_usuario, usu.contrasenia, usu.tipo_usuario
                                                        FROM usuarios usu
                                                        WHERE usu.usuario = '$username' and usu.estatus = '1' ");
        if( $resultselectusuario->num_rows > 0 )
        {
            $datosUsuario 	=   $resultselectusuario->fetch_assoc();
            $key 		=   "97@#78#";
            $encryptado 	=   decrypt($datosUsuario["contrasenia"], $key);
            //$respuesta   =   "USUARIO:".$password."BD: ". $datosUsuario["contrasenia"]."==".$encryptado;
            if ( $password == $encryptado )
            {
                $_SESSION['tipoUsuario']    =	$datosUsuario["tipo_usuario"];
                if ($datosUsuario["tipo_usuario"] == 'a')		// Alumnos
                {
                    $_SESSION['usuario']        =   $datosUsuario["id_usuario"];
                    $respuesta                  =   "a";
                    $_SESSION['usuario_nombre'] =   "Alumno";
                }
                else if ($datosUsuario["tipo_usuario"]=='p') 	// Profesor
                {
                    $_SESSION['usuario']	=   $datosUsuario["id_usuario"];
                    $respuesta                  =   "p";
                    $_SESSION['usuario_nombre'] =   "Profesor";
                }
                else if ($datosUsuario["tipo_usuario"]=='m') 	// ADMINISTRACION
                {
                    $_SESSION['usuario']	=   $datosUsuario["id_usuario"];
                    $respuesta                  =   "m";
                    $_SESSION['usuario_nombre'] =   "Profesor";
                }


                /* $idUsuario = $datosUsuario["id_usuario"];
                date_default_timezone_set('America/Mexico_City');
                list($idAlumno, $idCurso, $idCursoGrupo) = getDatosHistorico($conexion, $idUsuario);
                $fechaSistema   =  date("Y-m-d");
                $horaApSistema  =  date('H_i');
                $historico  =   "  INSERT INTO usuarios_historico_acceso (id_historial, fecha_acceso, "
                               ."  hora_acceso, fecha_acceso_termino, hora_acceso_termino, id_alumno,  "
                               ."  id_usuario, id_curso, id_curso_grupo) VALUES "
                               ."  (null, '$fechaSistema', '$horaApSistema', '', '',  $idAlumno, "
                               ."  $idUsuario, $idCurso, $idCursoGrupo ); ";
                $resulHistorico     =	$conexion->query($historico);
                if ($resulHistorico == false) {
                } */


            }
            else  // que si sea correcta la contraseña
            {
                $respuesta 	=	"02";
            }
        }
        else  // que si existe el usuario
        {
            $respuesta 	=	"02";
        }
    }
    else
    {
        $respuesta	=	"03";
    }
    echo json_encode($respuesta);


function getDatosHistorico($conexion, $idUsuario)
{
    $idAlumno       =   0;
    $idCurso        =   0;
    $idCursoGrupo   =   0;

    $resultQuery    =   $conexion->query(" SELECT a.id_alumno, ca.id_curso, ca.id_curso_grupo "
                                        ." FROM alumnos a"
                                        ." INNER JOIN cursos_alumnos ca ON ca.id_alumno = a.id_alumno"
                                        ." WHERE id_usuario = $idUsuario ");
    if($resultQuery->num_rows)
    {
        $datos        =   $resultQuery->fetch_assoc();
        $idAlumno     =   $datos['id_alumno'];
        $idCurso      =   $datos['id_curso'];
        $idCursoGrupo =   $datos['id_curso_grupo'];
    }
    return array($idAlumno, $idCurso, $idCursoGrupo);
}

?>

