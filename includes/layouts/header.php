<header>
    <nav class="nav-bar-app" id="nav-bar-app">
        <div class="pleca">
            <h3 style="-webkit-text-stroke: 1px black; font-weight: 900;">Panel de control</h3>
        </div>
        <ul class="menuApp">

            <!--------  MODULE 1  -->
            <li class="module">
                <?php
                if ($mA1 == true) {
                ?> <p class="title" onclick="activeModule('module1');">
                        <i class="fas fa-book"></i>
                        MI LIBRO <?php
                                } else {
                                    ?>
                    <p class="fg-gray title" title="Módulo bloqueado">
                        <i class="fas fa-lock"></i>
                        MI LIBRO<?php
                                }
                                ?>
                        <i id="iconmodule1" class="fa fa-long-arrow-right"></i>
                    </p>
                    <ul class="unit" id="module1">

                        <?php
                        $resultModS =   $conexion->query(" SELECT id_menu, nombre, formato, imagen, contenido_url,icono "
                            . " FROM menu_actividades "
                            . " WHERE estatus = '1'  "
                            . " ORDER BY id_menu ASC ");


                        if ($resultModS->num_rows) {
                            while ($datosMod   =   $resultModS->fetch_assoc()) {
                                $idActividad   =   $datosMod["id_menu"];
                                $nombre        =   $datosMod["nombre"];
                                $formato       =   $datosMod["formato"];
                                $idUnidad      =   0;
                                $icono = (isset($datosMod["icono"]) && trim($datosMod["icono"]) !== '') ? trim($datosMod["icono"]) : 'PDF.png';
                                $imagen        =   $datosMod["imagen"];
                                $url           =   $datosMod["contenido_url"];



                                echo '<li class="d-flex flex-align-center flex-justify-between btnUnidadActividad" ' .
                                    '    origen="M"  onclick="" data-unidad = "' . $idUnidad . '" actividad = "' . $idActividad . '" type = "' . $formato . '" ' .
                                    '    imagen = "' . $imagen . '" url = "' . $url . '" name = "' . $nombre . '" > ' .
                                    '    <a class="title">  ' .
                                    '        <img class="pdf" src="' . BASE_URL . '/assets/img/icon/' . $icono . '" alt=""  ' .
                                    '        style="width: 18px; margin-right: 8px; margin-bottom: 4px;"/>' . $nombre .
                                    '    </a> ' .
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