<?php
$__DIR_BASE__LOCAL = dirname(__FILE__)."./../";
$version = time();
define('TIPO_USUARIO', 'client');

require_once($__DIR_BASE__LOCAL."config/env.php");
//Auth::requireLogin();

if(!isset($_SESSION)) 
{ 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('session_start', '1');
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se terminó la sesión</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: black;
        }

        .container {
            text-align: center;
        }

        img {
            max-width: 200px;
            height: auto;
        }

        h1 {
            margin-top: 20px;
            color: #00afe8;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color:#00afe8 ;
            color: black;
            font-weight: bold;
            text-decoration: none;
            border-radius: 0;
            color: white;
        }
    </style>
    <script src="<?php echo BASE_URL; ?>/config/env.js"></script>

</head>

<body>
    <div class="container">
        <img src="<?php echo BASE_URL; ?>/assets/img/logos/logo_b.png" alt="Imagen de Sesión Terminada">
        <h1>Se terminó la sesión</h1>
        <a href='<?php echo BASE_URL; ?>/login.php' class="btn">Volver al inicio</a>
    </div>
</body>


<!-- 
      background-color: #2D2D2D;
  
<body>
  <div class="container">
    <img src="./../img/logo_b.png" alt="Imagen de Sesión Terminada">
    <h1>Se terminó la sesión</h1>
  </div>
</body> -->