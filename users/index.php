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
    header("Location: sesion.php");
    die(); // Asegurarse de que el script termine después de enviar el encabezado de redirección
}
else
{
    date_default_timezone_set('America/Mexico_City');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es">
<head>
  
    <title>Training Midas</title>
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
    <link rel="stylesheet" href="../sass/app_v1.css">
    <link rel="shortcut icon" href="../img/logos/logo.png" type="image/x-icon">
        
    <!-- Metro 4 -->
    <link rel="stylesheet" href="../vendors/metro4/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/botones_v5.css">
    <link rel="stylesheet" href="../css/index_v5.css"> 

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/plugins/introjs/introjs.min.css"> 
    <link rel="stylesheet" href="../css/plugins/introjs/modificado.css"> 

    <link rel="stylesheet" href="../css/plugins/introjs/modificado.css"> 

    <!-- CSSS PARA SWEET ALERT -->
    <script src="../js/plugins/sweetalert/sweetalert2@11.js"></script>
    <link rel="stylesheet" href="../css/alertas.css"> 
    <link rel="stylesheet" href="../css/modificado.css"> 

    <?php 
    // header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1 
    // header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado 
    ?>
</head>    
<style>
    #loading-screen {
  display: flex;
  justify-content: center;
  flex-flow: column;
  align-items: center;
  position: fixed;
  top: 0;
  left: 0;
  color:white;
  width: 100%;
  height: 100%;
  background-color: #252525;
  z-index: 9999;
  text-align: center;
}
@keyframes loading {
    0%, 25% {
        content: ".";
    }
    50% {
        content: "..";
    }
    75% {
        content: "...";
    }
    100% {
        content: "";
    }
}

#puntos-loading::after {
    content: "";
    animation: loading 1.5s steps(4) infinite;
}
.app .section-header .logotipo img {
    width: 260px;
    height: 70px;

}
@media (max-width: 1024px) {
    /* Estilos para tabletas */
    .app .section-header .logotipo img {
        width: 200px;
        height: 50px;
    }

    /* Otros estilos específicos para tabletas */
}
@media (max-width: 768px) {
    /* Estilos para dispositivos móviles */
    .app .section-header .logotipo img {
        width: 160px;
        height: 40px;
    }

    /* Otros estilos específicos para dispositivos móviles */
}
@media (max-width: 468px) {
    /* Estilos para dispositivos móviles */
    .app .section-header .logotipo img {
        display:none;
    }

    /* Otros estilos específicos para dispositivos móviles */
}
</style>
<script>
  window.addEventListener('load', () => {
    //const loadingScreen = document.getElementById('loading-screen');
    //loadingScreen.style.display = 'none';
    $("#loading-screen").slideUp("slow");
 });

</script>

<body>
    <?php
    $tipoUsuario    =   $_SESSION['tipoUsuario'];
    $id_usuario     =   $_SESSION['usuario'];  //  tiene el id_usuario 
    $id_curso       =   1;
    $usuario        =  'XXXX';
    
    include("../tools/conexiondb.php");
    include("../tools/actions.php");
    
    $mA1 = true;
    
    ?>
  <div id="loading-screen">
    <!-- Contenido que se mostrará mientras carga la página -->
    
    <h1>Cargando el contenido </h1>
    <h1 id="puntos-loading">.</h1>
  </div>

    <div class="app">
        <header>
            <nav class="nav-bar-app" id="nav-bar-app">
                <div  class="pleca">
                    <h3 style="-webkit-text-stroke: 1px black; font-weight: 900;">Contenido del curso</h3>
                </div>
                <ul class="menuApp">   
                    
                    <!--------  MODULE 1  --> 
                    <li class="module">
                        <?php
                        if($mA1 == true)  {
                        ?>  <p class="title" onclick="activeModule('module1');"> 
                            <i class="fas fa-eye"></i> 
                            NUEVO  <?php
                        }   else    {   
                        ?>  <p class="fg-gray title" title="Módulo bloqueado"> 
                            <i class="fas fa-lock"></i> 
                            NUEVO<?php  
                        }
                        ?>
                        <i id="iconmodule1" class="fa fa-long-arrow-right"></i>
                        </p>
                        <ul class="unit" id="module1">

                        <?php
                            $resultModS =   $conexion->query(" SELECT id_menu, nombre, formato, imagen, contenido_url "
                                                            ." FROM menu_actividades "
                                                            ." WHERE estatus = '1'  "
                                                            ." ORDER BY id_menu ASC ");
                            if( $resultModS->num_rows )
                            {
                                while ($datosMod   =   $resultModS->fetch_assoc() )
                                {
                                    $idActividad   =   $datosMod["id_menu"];
                                    $nombre        =   $datosMod["nombre"];
                                    $formato       =   $datosMod["formato"];
                                    $idUnidad      =   0;
                                    $icono         =   'PDF.png';// getImgen($formato);
                                    $imagen        =   $datosMod["imagen"];
                                    $url           =   $datosMod["contenido_url"];

                                    echo '<li class="d-flex flex-align-center flex-justify-between btnUnidadActividad" ';
                                    echo '    origen="M" data-unidad = "'.$idUnidad.'" actividad = "'.$idActividad.'" type = "'.$formato.'" ';
                                    echo '    imagen = "'.$imagen.'" url = "'.$url.'" name = "'.$nombre.'" > ';
                                    echo '    <a class="title">  ';
                                    echo '        <img class="pdf" src="../img/icon/'.$icono.'" alt=""  ';
                                    echo '        style="width: 18px; margin-right: 8px; margin-bottom: 4px;"/>'.$nombre;
                                    echo '    </a> ';
                                    echo '</li> ';
                                }
                            }
                            ?>

                        </ul>
                    </li>
     
                    <!--------  FIN DE LOS MODULES   -->
                    
                </ul>
            </nav>
        </header>
        <div class="container-app" id="container-app">
            <div class="section-header">
                <section class="center">
                    <button  class="btn-menu-app" id="btn-menu-app">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="logotipo logotipo-app">
                        <!--<a href="../">-->
                        <!-- <img class="" loading="lazy" src="../img/logos/academy_training_black.png" alt="midas"> -->    
                        <img style ="width: 75px; height: 35px;" class="" loading="lazy" src="../img/logos/logo.png" alt="midas">
                            
                        <!--</a>-->
                    </div>
                </section>
                <section class="center">
                    <div class="account hover">
                        <a href="#" class="app-bar-item">
                        <div class="btn-account">
                            <i class="fas fa-user-circle"></i>
                            <span class="name"><?php echo $usuario ?></span>
                        </div>
                        </a>
                        <div class="menu-account" id="menu-account">
                            <div class="mode center">
                                <button class="switch" id="switch">
                                    <span><i class="fas fa-sun"></i></span>
                                    <span><i class="fas fa-moon"></i></span>
                                </button>
                            </div>
                            <hr>
                            <button class="btn-logout btn-result-activities" onclick="btnResultadosActividades()">
                                Resultados de actividades
                            </button>
                            <br/> <br/> 
                            
                            <!-- <button class="btn-logout btn-update-password" onclick="updateContrasenia()">
                                Administrar tu cuenta
                            </button> -->
                           <!--  <br/> <br/>  -->

                            <button class="btn-logout btn-close-session" onclick="cerrarSesion()">
                                Cerrar sesión
                            </button>
                        </div>
                    </div>
                    
                </section>
            </div>
            <div class="background-img">
                <div class="container">
                    <div class="banner">
                        <div id="content-wrapper" class="content-inner h-100" style="overflow-y: auto">
                            <div id = "banner-content" class="banner-content">
                                                   
                            </div>
                        </div>
                        
    <!--                <div id="divImagenMain">-->
                        <img id="mi_imagen" class="banner-image"
                        src="../content/curso_1/imgActividades/inicio_curso.png"
                        width = "100%"  height ="100%"  alt="" srcset=""></img>
    <!--                </div>-->
                   </div>
                </div>
            </div>
        </div>
    
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
<script src="../js/plugins/jquery.min.js"></script>
<script src="../js/plugins/introjs/intro.min.js"></script>
<!-- <script src="../js/app/guia-interactiva_v1.js"></script> -->


<script src="../js/app_v3.js"></script>
<script src="../js/darkMode_v4.js"></script>
<script src="https://kit.fontawesome.com/f8e9d1f17f.js" crossorigin="anonymous"></script>

<!-- jQuery first, then Metro UI JS -->

<script src="../vendors/chartjs/Chart.bundle.min.js"></script>
<script src="../vendors/qrcode/qrcode.min.js"></script>
<script src="../vendors/jsbarcode/JsBarcode.all.min.js"></script>
<script src="../vendors/ckeditor/ckeditor.js"></script>
<script src="../vendors/metro4/js/metro.js"></script>


<script src="../js/index_v3.js"></script>

<script src="../js/events_formatos_v1.js"></script>

<script src="../vendors/jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.blockUI.js">  </script> 
<script src="../js/plugins/sweetalert/question_fornat.js"></script>
 

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

    // alert(name+' '+origen+' '+idUnidad+'   '+idActividad+'   '+type);
    if (type == 'ACTIVIDAD')
    {
        var tipoActividad   =   $(this).attr("tipoActividad");
        $("#txtHtipoItem").val(tipoActividad); 
        mostrarContenidoMenuActividad(idActividad, tipoActividad, imagen); 
    }
    else if (type == 'EVALUACION')
    { 
        var idModulo =   $(this).attr("idModulo");
        mostrarContenidoMenuEvalucion(idModulo);
    }
    else // items de menu con contenido
    {
        mostrarContenidoMenu(name, url, imagen); 
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

function alertaUI( texto ) 
{
    $.blockUI({   
        css: 
        {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff'
        },
        message: '<h1><img src="../images/loading.gif" /> </h1> '+texto 
    });
}
function alertaUIFin() 
{
    $.unblockUI(); 
}

function cerrarSesion()
{

    $.post('../login/logout.php',
    {
    }, respuestaSalir, 'json');
    setTimeout(function() {
        window.location.href = '../';
    }, 1500); // 1500 milisegundos (1.5 segundos)
}
function respuestaSalir(arg)
{

    setTimeout("location.href='../'", 2);
}


//https://themes.org.ua/pandora/

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</html>
<?php

}
?>