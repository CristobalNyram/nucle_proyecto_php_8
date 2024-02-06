<?php
$__DIR_BASE__LOCAL = dirname(__FILE__)."./../../";
$version = time();
define('TIPO_USUARIO', 'agente');

require_once($__DIR_BASE__LOCAL."config/env.php");
//Auth::requireLogin();
?>

<?php
if(!isset($_SESSION)) 
{ 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    ini_set('session_start', '1');
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    // Redireccionar a la página de inicio de sesión
    Redirection::to("user/sesion.php");
    die(); // Asegurarse de que el script termine después de enviar el encabezado de redirección
}
else
{
    date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
  
    <title>Inicio |<?php echo PROYECTO_NOMBRE; ?></title>
    <!-- env js tiene la variable global de la BASE_URL -->
    <script src="<?php echo BASE_URL; ?>/config/env.js"></script>

    <!-- Primary Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="es" />
    <meta name="Keywords" content="" />
    <meta name="Description" content="" />
    <meta name="Distribution" content="global" />
    <meta name="author" content="">
    <meta name="copyright" content="">
    <meta name="robots" content="index,follow,all">
    <!-- Primary Meta Tags -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/sass/app_v1.css">
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/img/logos/logo.png" type="image/x-icon">
        
    <!-- Metro 4 -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/vendors/metro4/css/metro-all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/botones_v5.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/index_v5.css"> 

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins/introjs/introjs.min.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins/introjs/modificado.css"> 

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/plugins/introjs/modificado.css"> 

    <!-- CSSS PARA SWEET ALERT -->
    <script src="<?php echo BASE_URL; ?>/assets/js/plugins/sweetalert/sweetalert2@11.js"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/alertas.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/modificado.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/user-interface.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/preloader.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/timeline.css"> 
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/modal.css"> 

    <?php 
    // header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1 
    // header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado 
    ?>
</head>    
<script>
  window.addEventListener('load', () => {
    //const loadingScreen = document.getElementById('loading-screen');
    //loadingScreen.style.display = 'none';

    setTimeout(function() {
        $("#loading-screen").slideUp("slow", function() {
    // Muestra el elemento con el ID #app con una animación "slow" después de ocultar #loading-screen
          $(".main-content-app").slideDown("slow");
         });
    }, 500); 
   
 });

</script>

<body>
    <?php
    $tipoUsuario    =   $_SESSION['tipoUsuario'];
    $id_usuario     =   $_SESSION['usuario'];  //  tiene el id_usuario 
    $id_curso       =   1;
    $usuario        =  'XXXX';
    
    include($__DIR_BASE__LOCAL."app/tools/conexiondb.php");
    include($__DIR_BASE__LOCAL."app/tools/actions.php");
    
    $mA1 = true;

    include($__DIR_BASE__LOCAL."includes/layouts/preloader.php");
    include($__DIR_BASE__LOCAL."includes/general/tabla-comentarios-modal-js.php");


    
    ?>

    <div class="main-content-app app" style="display: none;">
    <?php
    include($__DIR_BASE__LOCAL."includes/layouts/header.php");
    ?>
    
     
    
        <input type="hidden" name="txtH_sexo" id= "txtH_sexo" 
        value="<?php echo $sexo; ?>" />   
        
        <input type="hidden" name="txtH_tipoUsuario" id= "txtH_tipoUsuario" 
        value="<?php echo $tipoUsuario; ?>" />   
        <input type="hidden" name="txtH_idUsuario" id= "txtH_idUsuario" 
        value="<?php echo $id_usuario; ?>" />   
                
        <input type="hidden" name="mA1" id= "mA1" value="<?php echo $mA1; ?>" />      
         
    </div>
</body>

<script>
    window.onload = function() {
        activeModule();
        activeUnity();
    };
</script>
<?php
    include($__DIR_BASE__LOCAL."includes/layouts/footer-scripts.php");
?>
<script>
var imagenPrincipal =   '../content/curso_1/imgActividades/inicio_curso.png';
var urlImagenPrincipal   =   imagenPrincipal;

localStorage.setItem('drawer', 'false');
$('#btn-menu-app').removeClass('active');
$('#nav-bar-app').removeClass('disable-nav-bar-app');
$('#container-app').removeClass('full-container-app');


//abrirMenu();
function abrirMenu()
{
    //btnOcultarMenu();  en aumatico se muestra el menu al inicio 
    //localStorage.setItem('drawer', 'false');
    //$('#btn-menu-app').removeClass('active');
    //$('#nav-bar-app').removeClass('disable-nav-bar-app');
    //$('#container-app').removeClass('full-container-app');

    $('#btn-menu-app').toggleClass('active');
    if ($('#btn-menu-app').hasClass('active')) {
        localStorage.setItem('drawer', 'true');
        $('#btn-menu-app').toggleClass('active');
        $('#nav-bar-app').toggleClass('disable-nav-bar-app');
        $('#container-app').toggleClass('full-container-app');
    } else {
        localStorage.setItem('drawer', 'false');
        $('#btn-menu-app').removeClass('active');
        $('#nav-bar-app').removeClass('disable-nav-bar-app');
        $('#container-app').removeClass('full-container-app');
    }
}


function cerrarMenu()
{
    localStorage.setItem('drawer', 'true');
    $('#btn-menu-app').toggleClass('active');
    $('#nav-bar-app').toggleClass('disable-nav-bar-app');
    $('#container-app').toggleClass('full-container-app');
}


 
//  #######   MENU NAVEGACION  ###########
$( ".btnUnidadActividad" ).click(function() {
    var origen        =   $(this).attr("origen");   
    var idUnidad      =   $(this).attr("data-unidad");   
    var idActividad   =   $(this).attr("actividad");   
    var type          =   $(this).attr("type");

    var imagen        =   $(this).attr("imagen");
    var url           =   $(this).attr("url");
    var name          =   $(this).attr("name");

    console.log(idUnidad,idActividad,type);

    // alert(name+' '+origen+' '+idUnidad+'   '+idActividad+'   '+type);
    if (type == 'ACTIVIDAD')
    {
        var tipoActividad   =   $(this).attr("tipoActividad");
        $("#txtHtipoItem").val(tipoActividad); 
       // mostrarContenidoMenuActividad(idActividad, tipoActividad, imagen); 
    }
    else if (type == 'EVALUACION')
    { 
        var idModulo =   $(this).attr("idModulo");
       // mostrarContenidoMenuEvalucion(idModulo);
    }
    else // items de menu con contenido
    {
       // mostrarContenidoMenu(name, url, imagen); 
    }

    switch (idActividad) {
        case "1":
        case 1:
            fnViewTranscripcionCliente();
            break;
        case "2":
        case 2:
            fnViewRastreoLibro();
            break;
        case "3":
        case 3:
            fnViewManuscritoCliente();
            break;

        case "4":
        case 4:
            fnViewPropuestaPortadaCliente();
            break;
        case "5":
        case 5:
            fnViewTextoFinalCliente();
            break;
            
    
        default:
            break;
    }
    cerrarMenu();
});


function eventoBackImagen()
{
    if (document.body.classList.contains('dark'))
    {
        $(".fg-text-actividad").removeClass('active-negro');
        $(".fg-text-actividad").addClass('active-blanco');
        urlImagenPrincipal   =   '../content/curso_1/back_actividad_negro.png';
    }
    else
    {
        $(".fg-text-actividad").addClass('active-negro');
        $(".fg-text-actividad").removeClass('active-blanco');
        urlImagenPrincipal   =   '../content/curso_1/back_actividad_blanco.png';
    }

    $("#mi_imagen").attr("src",""+urlImagenPrincipal);
    $("#mi_imagen").show();
}

function btnOcultarMenu()
{
    $('#btn-menu-app').toggleClass('active');
    if ($('#btn-menu-app').hasClass('active')) {
        localStorage.setItem('drawer', 'true');
        $('#btn-menu-app').toggleClass('active');
        $('#nav-bar-app').toggleClass('disable-nav-bar-app');
        $('#container-app').toggleClass('full-container-app');
    } else {
        localStorage.setItem('drawer', 'false');
        $('#btn-menu-app').removeClass('active');
        $('#nav-bar-app').removeClass('disable-nav-bar-app');
        $('#container-app').removeClass('full-container-app');
    }
}

function formatoTexto( cadenaAnalizar )
{
    var nuevaCadena =   '';
    for (var i = 0; i< cadenaAnalizar.length; i++) 
    {
        var caracter = cadenaAnalizar.charAt(i);
        if( caracter == "´") 
        {
            nuevaCadena     =   nuevaCadena+',';
        }  
        else if( caracter == "∞") 
        {
            nuevaCadena     =   nuevaCadena+':';
        }
        else
        {
            nuevaCadena     =   nuevaCadena+caracter;
        }
    }
    return nuevaCadena;
}

function getValueItem (itemCadena)
{
    var dato        =   itemCadena.split(':');
    var value       =   null;
    if( dato.length > 1 ) 
    {
        value           =  dato[1];            
        value           =  value.replace('"','');       
        value           =  value.replace('"','');
    }
    return value;
}



//  #####################################################################################################################################################
//  ###################     INICIO      ####################################################################################################################
//  #####################################################################################################################################################

//  #####################################################################################################################################################
//  ###################     FIN      ####################################################################################################################
//  #####################################################################################################################################################




//https://themes.org.ua/pandora/

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/app/functionsClient.js?v=<?php echo $version; ?>"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/app/functionsAuth.js?v=<?php echo $version; ?>"></script>

</html>
<?php

}
?>