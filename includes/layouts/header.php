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
                           MI LIBRO  <?php
                        }   else    {   
                        ?>  <p class="fg-gray title" title="Módulo bloqueado"> 
                            <i class="fas fa-lock"></i> 
                            MI LIBRO<?php  
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