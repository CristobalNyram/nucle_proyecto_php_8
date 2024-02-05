<?php

define("APP_ENV", 'DEV'); // Puedes establecer esta constante según tu entorno

if (defined('APP_ENV') && APP_ENV === 'PRO') {
    define("BASE_URL", "http://127.0.0.1:8080/midasproyectos/nucleo");
} else {
    define("BASE_URL", "http://127.0.0.1:8080/midasproyectos/nucleo");
    //define("BASE_URL", "http://localhost/MIDAS/midas_academy/midas_trainning_academy");

}

define("PROYECTO_NOMBRE", " Epick Books");
define("DIR",__DIR__);
define("CURRENT_URL",$_SERVER['REQUEST_URI']);
// echo CURRENT_URL;
// die();
// HELPERS INI
include_once DIR . "./../app/controllers/Auth.php";
include_once DIR . "./../app/controllers/Redirection.php";
include_once DIR . "./../app/controllers/Debugger.php";
include_once DIR . "./../app/controllers/Session.php";

