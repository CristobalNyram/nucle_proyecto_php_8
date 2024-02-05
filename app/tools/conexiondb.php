<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//  Local
$conexion = new mysqli("localhost","root","","db_nucleo") or die ("error en la conexion") ;

//  Produccion
//$conexion = new mysqli("localhost","grupomid_user_elearning","mi*77_H34-%7lO","grupomid_db_elearning") or die ("error en la conexion");
 

mysqli_set_charset($conexion, 'utf8'); 

?>