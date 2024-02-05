 
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
    <link rel="stylesheet" href="sass/estilos.css">

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<style lang="">
    .btn-login-dark {
        
    } 
    .btn-login-white {
        background-color:black; 
        color: transparent; /* Oculta el color de las letras */
        -webkit-text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores Webkit (Safari, Chrome) */
        text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores estándar */
        -webkit-text-fill-color: black; /* Rellena las letras con el color negro */
        text-fill-color: black; /* Rellena las letras con el color negro */
    }

    .input-login:focus {
        padding-bottom: 6px;
        border-width: 3px;
        border-bottom: 2px solid #EED581;
        border-image-slice: 1;
    }
    .input-login::placeholder {
    color: white!important; /* Cambia este color al que desees */
    font-size: bold;
    }
    .input-login-white::placeholder {
        color: transparent; /* Oculta el color de las letras */
    -webkit-text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores Webkit (Safari, Chrome) */
    text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores estándar */
    -webkit-text-fill-color: black; /* Rellena las letras con el color negro */
    text-fill-color: black; /* Rellena las letras con el color negro */
   font-weight: bolder;
    }

    .input-login:hover::placeholder {
        color: #EED581!important; /* Color al pasar el mouse */
        font-size: normal;

        /* border-bottom: 2px solid #f9f9f9; */
    }

    .input-login:focus::placeholder {
        color: #EED581!important; /* Color al estar enfocado */
        font-size: normal;

        /* border-bottom: 2px solid #f9f9f9; */

    }
    .text-login-white {
    color: transparent; /* Oculta el color de las letras */
    -webkit-text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores Webkit (Safari, Chrome) */
    text-stroke: 1px white; /* Agrega el borde blanco a las letras en navegadores estándar */
    -webkit-text-fill-color: black; /* Rellena las letras con el color negro */
    text-fill-color: black; /* Rellena las letras con el color negro */
    }
            
</style>
<body>
    <header data-scroll-header>
        <nav class="nav-bar" id="navbar">
            <button id="btn-menu" class="btn-menu">
                <div class="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <!-- <img  id="" width="200px"  class="logotipo img-logo-academy"  loading="lazy" src="img/logos/academy_training_black.png" alt="midas" hidden>
                -->

                <img  id="" width="200px"  class="logotipo img-logo-academy"  loading="lazy" src="img/logos/logo_b.png" alt="midas" hidden>
            
             

            
            <!-- <ul class="nav" id="menu">
                <li id="home"><a    onclick="javascript:localStorage.setItem('activeMenu','home')"   href="../">INICIO</a></li>
                <li id="videos"><a  onclick="javascript:localStorage.setItem('activeMenu','videos')" href="../videos.html">Videos</a></li>
                <li id="plain"><a   onclick="javascript:localStorage.setItem('activeMenu','plain')"  href="../plain.html">PLAN INTEGRAL DE DESARROLLO HUMANO</a></li>
                <li id="login"><a   onclick="javascript:localStorage.setItem('activeMenu','login')"  href="../login.html">INGRESAR</a></li>
                <li id="sve"><a     onclick="javascript:localStorage.setItem('activeMenu','sve')"    href="../sve.html">SVE</a></li>
            </ul> -->
           
            <div class="mode center">
                <button class="switch" id="switch">
                    <span><i class="fas fa-sun"></i></span>
                    <span><i class="fas fa-moon"></i></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container">
       <div class="banner">
            <!-- <img width="75px" height="100px" src="img/udg.png" alt="" srcset=""> -->
            <div class="banner-content">
                
                <!-- <span style="text-align: left; margin-left: 100px; font-size:  9px;">  Versión  1.25</span> -->
                <h2  id="text-inicio"></h2>

                <div class="form-container">
                    <form id="formLogin" class="form custom-validation need-validation" novalidate="" action="javascript:void(0);" autocomplete="off" >
                        <div class="form-group field" onclick="$('#txtusuario').click();">
                            <input class="form-field input-login" id="txtusuario" name="txtusuario" placeholder="Usuario" required  />
                            <i class="form-icon far fa-user" ></i>
                            <!-- <label class="form-label" for="password">Contraseña</label> -->

                            <!-- <label class="form-label" for="email">Usuario</label> -->
                        </div>
<!--                        <div class="form-group field">
                            <input class="form-field" id="txtpassword" name="txtpassword"    placeholder="Contraseña" required />
                            <label class="form-label" for="password">Contraseña</label>
                        </div>-->
                        
                        <div class="form-group field">
                            <input type="password" class="form-field input-login"
                            name="txtpassword" id="txtpassword" autocomplete ="new-password"
                            placeholder="Contraseña" required  />
                            <i class="form-icon far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                            <!-- <label class="form-label" for="password">Contraseña</label> -->
                        </div>
                        
                        <div class="text-center link">
                          <!--  <a href="">¿Aún no tienes cuenta? Registrate.</a>-->
                        </div>
                        <div class="center">
                            <button type="submit" class="btn-send btn-login-dark" onclick="iniciarSesion()" >
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>
            </div>
                    
            <!--  imagen de fondo de pantalla -->
            <!-- <img class="banner-image-login banner-image" src="img/back.png" alt="" srcset=""> -->
            <img class="banner-image" src="img/home.jpg" alt="" srcset="">
        

            <img class="shadow" src="img/shadow.svg" alt="" srcset="">
       </div>
    </div>
</body>




<script>
    window.onload = function() {
        window.localStorage.removeItem("activeMenu");
        window.localStorage.setItem("activeMenu", "login");
        activeMenu();
    };
</script>
<script src="js/plugins/jquery.min.js"></script>
<script src="js/plugins/typedjs/typed.min.js"></script>
<script src="js/plugins/sweetalert/sweetalert2@11.js"></script>

<script src="js/main.js"></script>
<script src="js/darkMode_v4.js"></script>
<script src="https://kit.fontawesome.com/f8e9d1f17f.js" crossorigin="anonymous"></script>
<script src="login/js/loginJS.js"></script>
<link rel="stylesheet" href="css/login.css">

<style>
    .typed-cursor {
  display: none;
}
</style>
<script>
    $("#txtusuario").focus();
   
    let typedStartSesion = new Typed('#text-inicio', {
    strings: [` INICIO DE SESIÓN`],
    typeSpeed: 190,
    backSpeed: 150,
    backDelay: 1000,
    loop: false,

    });

    typedStartSesion.start();

</script>
</html>