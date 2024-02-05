
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
    <link rel="shortcut icon" href="img/logos/logo.png" type="image/x-icon">

</head>
<style>
    .nav-bar .logotipo {
    width: 79px;
    display: flex;
    align-items: center;
    justify-items: center;
    justify-content: center;
    transition: all 0.3s ease-in-out 0s;
    margin-right: 75px;
}
  .bordered-text {
    font-size: 24px; /* Tamaño de la fuente */
    position: relative;
    color: black; /* Color del texto */
    text-shadow: 1px 1px 1px white, -1px -1px 1px white, 1px -1px 1px white, -1px 1px 1px white; /* Sombra de texto con borde blanco */
    padding: 4px; /* Espacio interno alrededor del texto para aumentar el tamaño del borde */
  }

  .bordered-text::before,
  .bordered-text::after {
    content: attr(data-text);
    position: absolute;
    top: 0;
    left: 0;
    color: white; /* Color del borde */
  }

  .bordered-text::before {
    left: -2px; /* Desplazamiento del borde hacia la izquierda */
  }

  .bordered-text::after {
    left: 2px; /* Desplazamiento del borde hacia la derecha */
  }
    /* Estilos base para la imagen */
  .img-logo-academy {
      height: auto;
      max-width: 100%;
  }

  /* Media query para dispositivos móviles */
  @media (max-width: 767px) {
      .img-logo-academy {
          height: 103px;
      }
  }

  /* Media query para pantallas de PC */
  @media (min-width: 768px) {
      .img-logo-academy {
          width: 100%;
          max-height: 400px; /* Puedes ajustar este valor según tus necesidades */
      }
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
            <div class="logotipo">
<!--                <a href="/">-->
                    <img id="id_imagen_logo_midas" class="img-fluid fit" loading="lazy" src="img/logos/logo_b.png" alt="midas">
<!--                </a>-->
            </div>
            <!--
            <ul class="nav" id="menu">
                <li id="home"><a   onclick="javascript:localStorage.setItem('activeMenu','home')"   href="">INICIO</a></li>
                <li id="videos"><a onclick="javascript:localStorage.setItem('activeMenu','videos')" href="videos.html">Videos</a></li>
                <li id="plain"><a onclick="javascript:localStorage.setItem('activeMenu','plain')"  href="plain.html">PLAN INTEGRAL DE DESARROLLO HUMANO</a></li>
                <li id="login"><a onclick="javascript:localStorage.setItem('activeMenu','login')"  href="login.html">INGRESAR</a></li>
                <li id="sve"><a onclick="javascript:localStorage.setItem('activeMenu','sve')"   href="sve.html">SVE</a></li>
            </ul>
            -->
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
           <div class="banner-content">

                <!--  Texto de la pantalla -->
                <!-- <img class="img-logo-academy" src="img/logos/academy_training_black.png" alt="" srcset=""> -->
                 

                <h1 id="titulo-udg" class="bordered-text"> PROGRAMA <br> ANTI ZOMBIE</h1>
                <p hidden>Para docentes y estudiantes</p>
                
                <button onclick="window.location.href = 'login.php'" style="background-color: black;"> ACCEDER</button>
            </div>
            
            <!-- Fondo de la pantalla -->
            <!-- <img class="banner-image-login banner-image" src="img/back.png" alt="" srcset=""> -->
            <img class="banner-image-login banner-image" src="img/home.jpg" alt="" srcset="">

            
            <img class="shadow" src="img/shadow.svg" alt="" srcset="">
       </div>
    </div>
</body>
<script>
    window.onload = function() {
        window.localStorage.removeItem("activeMenu");
        window.localStorage.setItem("activeMenu", "home");
        activeMenu();
    };
</script>
<!--<script>
   

    const texto  = "PROGRAMA \n ANTI ZOMBIE";
    const textoAnimado = document.getElementById("titulo-udg");

    let index = 0;

function animarTexto() {
  textoAnimado.innerHTML += texto.charAt(index);
  index++;
  if (index > texto.length - 1 || texto.charAt(index - 1) === '\n') {
    textoAnimado.innerHTML += '<br>';
  }
  if (index < texto.length) {
    setTimeout(animarTexto, 120);
  }
}

    window.onload = animarTexto;
</script>-->
<script src="js/plugins/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/darkMode_v4.js"></script>
<script src="https://kit.fontawesome.com/f8e9d1f17f.js" crossorigin="anonymous"></script>
</html>