<?php
$__DIR_BASE__LOCAL = dirname(__FILE__)."./../";
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
    Redirection::to("users/sesion.php");
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
        <header>
            <nav class="nav-bar-app" id="nav-bar-app">
                <div  class="pleca">
                    <h3 style="-webkit-text-stroke: 1px black; font-weight: 900;">Panel de control</h3>
                </div>
                <ul class="menuApp">   
                    
                    <!--------  MODULE 1  --> 
                    <li class="module">
                        <?php
                        if($mA1 == true)  {
                        ?>  <p class="title" onclick="activeModule('module1');"> 
                            <i class="fas fa-book"></i> 
                            LIBRO  <?php
                        }   else    {   
                        ?>  <p class="fg-gray title" title="Módulo bloqueado"> 
                            <i class="fas fa-lock"></i> 
                            LIBRO<?php  
                        }
                        ?>
                        <i id="iconmodule1" class="fa fa-long-arrow-right"></i>
                        </p>
                        <ul class="unit" id="module1">

                        <?php
                            $resultModS =   $conexion->query(" SELECT id_menu, nombre, formato, imagen, contenido_url,icono "
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
                                    $icono = (isset($datosMod["icono"]) && trim($datosMod["icono"]) !== '') ? trim($datosMod["icono"]) : 'PDF.png';
                                    $imagen        =   $datosMod["imagen"];
                                    $url           =   $datosMod["contenido_url"];

                                    

                                    echo '<li class="d-flex flex-align-center flex-justify-between btnUnidadActividad" '.
                                    '    origen="M"  onclick="" data-unidad = "'.$idUnidad.'" actividad = "'.$idActividad.'" type = "'.$formato.'" '.
                                    '    imagen = "'.$imagen.'" url = "'.$url.'" name = "'.$nombre.'" > '.
                                    '    <a class="title">  '.
                                    '        <img class="pdf" src="'.BASE_URL.'/assets/img/icon/'.$icono.'" alt=""  '.
                                    '        style="width: 18px; margin-right: 8px; margin-bottom: 4px;"/>'.$nombre.
                                    '    </a> '.
                                    '</li> ';
                               
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
                        <img style ="width: 75px; height: 35px;" class="" loading="lazy" src="<?php echo BASE_URL; ?>/assets/img/logos/logo.png" alt="midas">
                            
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
                        src="<?php echo BASE_URL; ?>/assets/content/curso_1/imgActividades/inicio_curso.png"
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
<script src="<?php echo BASE_URL; ?>/assets/js/plugins/jquery.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/plugins/introjs/intro.min.js"></script>
<!-- <script src="../js/app/guia-interactiva_v1.js"></script> -->


<script src="<?php echo BASE_URL; ?>/assets/js/app_v3.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/darkMode_v4.js"></script>
<script src="https://kit.fontawesome.com/f8e9d1f17f.js" crossorigin="anonymous"></script>

<!-- jQuery first, then Metro UI JS -->

<script src="<?php echo BASE_URL; ?>/assets/vendors/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/vendors/qrcode/qrcode.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/vendors/jsbarcode/JsBarcode.all.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/vendors/ckeditor/ckeditor.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/vendors/metro4/js/metro.js"></script>


<script src="<?php echo BASE_URL; ?>/assets/js/index_v3.js"></script>

<script src="<?php echo BASE_URL; ?>/assets/js/events_formatos_v1.js"></script>

<script src="<?php echo BASE_URL; ?>/assets/vendors/jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.blockUI.js">  </script> 
<script src="<?php echo BASE_URL; ?>/assets/js/plugins/sweetalert/question_fornat.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


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

    $.post(BASE_URL+'/login/logout.php',
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

//  #####################################################################################################################################################
//  ###################     INICIO      ####################################################################################################################
//  #####################################################################################################################################################
function getHtmlBotonesHistorico(){

}
function fnViewTranscripcionCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Transcripcion</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <textarea id="editor-transcripcion"></textarea>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-between-rows">
          
            <button  class="btn-save btn-save-custom btn-cancelar-custom" >
                <span  >
                Cancelar
                <span><i class="fa fa-times"></i>
                </span>
            </button>

            <button  class="btn-save btn-save-custom btn-guardar-custom" >
                <span  >
                Guardar
                <span><i class="fa fa-save"></i>
            </span>
                
            </button>
        </div>
    </div>
</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}
function fnViewManuscritoCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Manuscrito</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <textarea id="editor-transcripcion"></textarea>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-between-rows">
          
            <button  class="btn-save btn-save-custom btn-cancelar-custom" >
                <span  >
                Cancelar
                <span><i class="fa fa-times"></i>
                </span>
            </button>

            <button  class="btn-save btn-save-custom btn-guardar-custom" >
                <span  >
                Guardar
                <span><i class="fa fa-save"></i>
            </span>
                
            </button>
        </div>
    </div>
</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewPropuestaPortadaCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Propuesta de portada</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <iframe 
        src="https://plataforma.fedpatmex.integrameetings.com/public/docs/documentfreeworkfinal/cfa64a6b6e_1697041724.jpg" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>

</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewTextoFinalCliente() {
    var htmlInfo = `
    <form id="formEvaluacionModulo" class="custom-validation need-validation" autocomplete="off" novalidate="" action="javascript:void(0);">

    <div class="row fg-text-actividad active-blanco">
        <div class="cell-lg-12">
            <div style="text-align: left; font-size: 28px;" class="row mb-3 ">
                <div class="cell-md-1"> </div>
                <div class="cell-md-10">
                    <label><center>Texto final</center></label>
                </div>
                <div class="cell-md-1"></div>
            </div>

        

        </div>
    </div>

    <!-- Espacio en blanco -->
    <div class="row" >
        <div class="cell-lg-12">
        <iframe src="https://plataforma.fedpatmex.integrameetings.com/public/docs/documentfreework/c9d4ef1815_AN%C3%81LISISINTEGRALDEUNGLIOMADEALTOGRADOIDH2MUTADOMEDIANTEELUSODEPRUEBASMOLECULARES_DaneryValdezOcrospoma.pdf" width="100%" height="600" frameborder="0" scrolling="auto"></iframe>

        </div>
      
    </div>

    <!-- Botón Guardar -->

 
            
    <div class="row">
        <div class="cell-lg-12 d-flex-justify-center-rows">
        <button class="btn-comentarios trigger-btn-modal" title="Comentario" 
        style="
            margin: .5rem 1rem;
        ">
                    <span>
                    <i class="fa fa-comment" aria-hidden="true"></i>

                    </span>
            </button>
           
        </div>
    </div>

</form>
`;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);
    
}

function fnViewRastreoLibro(){
    var htmlInfo = `
    <section id="timeline">
      <article>
        <div class="inner">
          <span class="date">
        <!--     <span class="day">30<sup>th</sup></span> -->
            <span class="month">Nov</span>
            <span class="year">2022</span>
          </span>


          <h6>PASO 1</h6>

            <p class="wrapper">

                <a href="https://constancias.integrameetings.com/fedpatmex-2022/" class="flat-btn"> 1</a>

            </p>


        </div>
      </article>
      <article>
        <div class="inner">
          <span class="date">
            <!--     <span class="day">30<sup>th</sup></span> -->
            <span class="month">Nov</span>
            <span class="year">2023</span>
          </span>
          <h6>PASO 2</h6>

          <p class="wrapper">

            <a href="https://constancias.integrameetings.com/fedpatmex-2023/" class="flat-btn">2</a>

          </p>
        </div>
      </article>

    </section>
        `;

    $("#banner-content").html("");
    $("#banner-content").append(htmlInfo);

}


function createQuestion(number, question, options) {
  return `
    <div class="form-group">
      <label>${number}. ${question}</label>
    </div>
    <div class="form-group2">
      ${options.map(option => `<br/><input type="radio" value="${option}" data-role="radio"> ${option}`).join('')}
    </div><br/>
  `
}

tinymce.init({
        selector: '#editor-transcripcion',
        height: 500,
        menubar: false,
        apiKey: 'mt3wtiqsapm6uhn41pwew5mb8ygukp6wsb66dkifamfh12s9', // Reemplaza con tu clave de API
        plugins: [
          'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
          'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
          'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist outdent indent | removeformat | help'
      });

$(document).on('focusin', function(e) {
  if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
    e.stopImmediatePropagation();
  }
});

$( document ).ready(function() {
    $(document).on("click", ".trigger-btn-modal", function(event) {
        console.log("hola");
        $('.modal-wrapper').toggleClass('open');
        $('.page-wrapper').toggleClass('blur-it');
     return false;
  });
});
//  #####################################################################################################################################################
//  ###################     FIN      ####################################################################################################################
//  #####################################################################################################################################################




//https://themes.org.ua/pandora/

</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</html>
<?php

}
?>