<?php
if (!isset($_SESSION))
{
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('session_start', '1');
    session_start();
}

$password_anterior  =   $_POST["password_anterior"];
$password_nuevo     =   $_POST["password_nuevo"];
$password_nuevo_confirmar     =   $_POST["password_nuevo_confirmar"];
$txtSexo            =   $_POST["txtSexo_dat"];
$tabla              =   $_POST["opc"];

$respuesta          =   "Exito";

include("../tools/conexiondb.php");
include("../tools/encriptar.php");

$conexion->autocommit(FALSE);

if( $password_anterior == $password_nuevo )
{
    $conexion->rollback();
    $respuesta 	=   "La contraseña es la misma." ;
}
elseif( $password_nuevo != $password_nuevo_confirmar )
{
    $conexion->rollback();
    $respuesta 	=   "No coincide la contraseña nueva." ;
}
else
{
    $id_usuario             =   $_SESSION['usuario'];
    $resultselectusuario    =   $conexion->query("  SELECT usu.contrasenia
                                                    FROM usuarios usu
                                                    WHERE usu.id_usuario = $id_usuario  ");
    if( $resultselectusuario->num_rows > 0)
    {
        $datosUsuario 	=   $resultselectusuario->fetch_assoc();
        $key 		=   "97@#78#";
        $encryptado 	=   decrypt($datosUsuario["contrasenia"], $key);
        if ( $password_anterior == $encryptado )
        {
            $encryptadoN    =	encrypt($password_nuevo, $key);
            $update         =	"UPDATE usuarios SET contrasenia = '$encryptadoN' WHERE id_usuario = $id_usuario ";
            $result 	=	$conexion->query($update);
            if($result)
            {
                $updateSexo     =   "UPDATE $tabla SET sexo = '$txtSexo' WHERE id_usuario = $id_usuario ";
                $resultSexo     =   $conexion->query($updateSexo);
                if($resultSexo)
                {
                    $conexion->commit();
                    $respuesta 	=	"Exito";
                }
                else
                {
                    $conexion->rollback();
                    $respuesta 	=	"Notificar al administrador: Error al actualizar el sexo.";
                }
            }
            else
            {
                $conexion->rollback();
                $respuesta 	=	"Notificar al administrador: Error al actualizar la contraseña.";
            }
        }
        else
        {
            $conexion->rollback();
            $respuesta 	=   "La Contraseña Anterior es Incorrecta." ;
        }
    }
}
   
echo json_encode (array("respuesta" => $respuesta));

?>
