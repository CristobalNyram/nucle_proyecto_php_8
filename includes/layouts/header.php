<?php
    $tipo_usuario=TIPO_USUARIO??"client";
    
?>
<header>
    <nav class="nav-bar-app" id="nav-bar-app">
        <div class="pleca">
            <h3 style="-webkit-text-stroke: 1px black; font-weight: 900;">Panel de control</h3>
        </div>
        <?php

            switch ($tipo_usuario) {
                case "client":
                    include($__DIR_BASE__LOCAL."includes/layouts/menuApp/client.php");
                    break;
                case "admin":
                    include($__DIR_BASE__LOCAL."includes/layouts/menuApp/admin.php");
                    break;
                case "agente":
                        include($__DIR_BASE__LOCAL."includes/layouts/menuApp/agente.php");
                    break;
                default:
                    break;
            }
        ?>
    </nav>
</header>

<div class="container-app" id="container-app">
    <div class="section-header">
        <section class="center">
            <button class="btn-menu-app" id="btn-menu-app">
                <i class="fa fa-bars"></i>
            </button>
            <div class="logotipo logotipo-app">
                <!--<a href="../">-->
                <!-- <img class="" loading="lazy" src="../img/logos/academy_training_black.png" alt="midas"> -->
                <img style="width: 75px; height: 35px;" class="" loading="lazy" src="<?php echo BASE_URL; ?>/assets/img/logos/logo.png" alt="midas">

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
                    <div id="banner-content" class="banner-content">

                    </div>
                </div>

                <!--                <div id="divImagenMain">-->
                <img id="mi_imagen" class="banner-image" src="<?php echo BASE_URL; ?>/assets/content/curso_1/imgActividades/inicio_curso.png" width="100%" height="100%" alt="" srcset=""></img>
                <!--                </div>-->
            </div>
        </div>
    </div>
</div>